<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        $rules = [
            'email' => 'required|exists:clients,email',
            'password' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return msgdata($request, failed(), $validator->messages()->first(), (object)[]);
        }
        $credentials = $request->only(['email', 'password']);
        $token = Auth::guard('api')->attempt($credentials);

        if (!$token) {
            return msgdata($request, failed(), ' بيانات الدخول غير صحيحه', (object)[]);
        }
        $user = Auth::guard('api')->user();
        if ($user->verified == 0) {
            Auth::logout();
            return msgdata($request, not_active(), 'تحقق من البريد الالكتروني اولا', (object)[]);
        }
        if (!$token) {
            return $this->returnError('e001', ' بيانات الدخول غير صحيحه');
        }
        $user = Auth::guard('api')->user();
        if ($user->verified == '0') {
            Auth::guard('api')->logout();
            return msgdata($request, not_active(), 'ادخل كود التفعيل اولا', null);
        }
        if ($user->status !== 'Unblock') {
            Auth::guard('api')->logout();
            return msgdata($request, not_active(), 'حسابك موقوف', null);
        }
        $user_data = Client::where('id', $user->id)->first();
        $user_data->token_api = $token;

        return msgdata($request, success(), 'login_success',  $user_data);
    }
    public function register(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'name' => 'required|string',
            'email' => 'required|email|unique:clients,email',
            'phone' => 'required|unique:clients,phone',
            'password' => 'required|confirmed'
        ]);
        //Request is valid, create new user
        if ($validator->fails()) {
            return msgdata($request, failed(), $validator->messages()->first(), (object)[]);
        }
        //Request is valid, create new user
        unset($data['password_confirmation']);
        $data['password'] = $request->password;

        $customer = Client::create($data);
        if ($customer) {
            $four_digit_random_number = mt_rand(100000, 999999);
            $customer->code = $four_digit_random_number;
            $customer->save();
            $responseData['code'] = $four_digit_random_number;
            return msgdata($request, success(), 'تم انشاء الحساب بنجاح - يرجي تأكيد البريد الالكتروني', $responseData);

        }
    }
}
