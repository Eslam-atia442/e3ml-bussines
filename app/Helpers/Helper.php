<?php


use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

define('PAGINATION_COUNT', 10);
function upload($file, $dir)
{
    $image = time() . uniqid() . '.' . $file->getClientOriginalExtension();
    $file->move('uploads' . '/' . $dir, $image);
    return $image;
}

function updateImage(string $dir, $old_image, string $format, $image = null)
{
    if (Storage::disk('public')->exists($dir . $old_image)) {
        Storage::disk('public')->delete($dir . $old_image);
    }
    $imageName = uploadImage($dir, $format, $image);
    return $imageName;
}

 function remove_invalid_charcaters($str)
{
    return str_ireplace(['\'', '"', ',', ';', '<', '>', '?'], ' ', $str);
}

function translate($key)
{
    $local = session()->has('local') ? session('local') : \app()->getLocale();
    App::setLocale($local);
    $lang_array = include(base_path('resources/lang/' . $local . '/admin.php'));
    $processed_key = ucfirst(str_replace('_', ' ', remove_invalid_charcaters($key)));
    if (!array_key_exists($key, $lang_array)) {
        $lang_array[$key] = $processed_key;
        $str = "<?php return " . var_export($lang_array, true) . ";";
        file_put_contents(base_path('resources/lang/' . $local . '/admin.php'), $str);
        $result = $processed_key;
    } else {
        $result = __('admin.' . $key);
    }
    return $result;
}

function msgdata($request, $status, $key, $data)
{
    $msg['status'] = $status;
    $msg['msg'] = $key;
    $msg['data'] = $data;
    return $msg;
}


function msg($request, $status, $key)
{
    $msg['status'] = $status;
    $msg['msg'] = $key;
    return $msg;
}

function success()
{
    return 200;
}

function failed()
{
    return 401;
}

function not_authoize()
{
    return 403;
}

function not_acceptable()
{
    return 406;
}

function not_found()
{
    return 404;
}

function not_active()
{
    return 405;
}


