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
            return msgdata($request, failed(), 'Account Or Password Not Correct', (object)[]);
        }
        $user = Auth::guard('api')->user();
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
        if ($validator->fails()) {
            return msgdata($request, failed(), $validator->messages()->first(), (object)[]);
        }
        unset($data['password_confirmation']);
        $data['password'] = $request->password;
        $customer = Client::create($data);
        return msgdata($request, success(), 'Account created', $data);
    }

    public function logout(Request $request){
        auth()->guard('api')->logout();
        return msg($request, success(), 'you have Logout');
    }
}
