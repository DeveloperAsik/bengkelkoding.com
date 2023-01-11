<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Helpers\MyHelper;
use Illuminate\Support\Facades\DB;
use App\Http\Middleware\TokenUser;
use Closure;

class Authenticate {

    public function __construct() {
        
    }

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request) {
        if (!$request->expectsJson()) {
            return route('login');
        }
    }

    public function handle(Request $request, Closure $next) {
        $currentPath = Route::getFacadeRoot()->current()->uri();
        $data = $request->session()->all();
        if (isset($data['_session_is_logged_in']) && !empty($data['_session_is_logged_in']) && $data['_session_is_logged_in'] == true) {
            session(['_session_destination_path' => '/' . $currentPath]);
            session()->save();
            if ($currentPath != 'profile') {
                return redirect('/profile')->with(['warning-msg' => 'Youre already login!']);
            } else {
                return $next($request);
            }
        } else {
            if ($currentPath != 'login') {
                return redirect('/login')->with(['warning-msg' => 'This page need login session, please login first!']);
            } else {
                return $next($request);
            }
        }
    }

    public static function save_token($request) {
        if (isset($request) && !empty($request)) {
            $token = $request['token']['token'];
            $decode_jwt = MyHelper::decode_jwt($token);
            //session()->put();
            session(['_session_token' => $token]);
            session(['_session_user_id' => $decode_jwt->user_id]);
            session(['_session_group_id' => $decode_jwt->group_id]);
            session(['_session_user_name' => $decode_jwt->user_name]);
            session(['_session_user_email' => $decode_jwt->user_email]);
            session(['_session_is_logged_in' => true]);
            session(['_session_expiry_date' => date('Y-m-d H:i:s', strtotime('+24 Hours'))]);
            session()->save();
            return MyHelper::_set_response('json', ['code' => 200, 'message' => 'successfully save token.', 'valid' => true]);
        }
    }

    public static function clear_session() {
        session()->forget('_session_token');
        session()->forget('_session_user_id');
        session()->forget('_session_group_id');
        session()->forget('_session_is_logged_in');
        session()->forget('_session_expiry_date');
        session()->forget('_session_user_name');
        session()->forget('_session_user_email');
        session()->forget('alert-msg');
        session()->flush();
        session()->save();
    }

    public static function __verify_token($token_jwt = null) {
        if ($token_jwt != null) {
            $response = MyHelper::is_jwt_valid($token_jwt);
        }
    }

    public static function __string_hash($password_raw) {
        if (isset($password_raw) && !empty($password_raw)) {
            $salt = config('app.salt');
            $password_peppered = hash_hmac("sha256", $password_raw, $salt);
            return password_hash($password_peppered, PASSWORD_ARGON2ID);
        } else {
            return null;
        }
    }

    public static function __verify_hash($password_raw, $password_hashed) {
        if (isset($password_raw) && !empty($password_raw)) {
            $salt = config('app.salt');
            $password_peppered = hash_hmac("sha256", $password_raw, $salt);
            if (password_verify($password_peppered, $password_hashed)) {
                return true;
            } else {
                return false;
            }
        } else {
            return null;
        }
    }

}
