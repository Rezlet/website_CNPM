<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Hash;
use Session;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function registration(Request $request)
    {
        return view("auth.register");
    }

    public function registerUser(Request $request)
    {
        $rules = [
            "name" => 'required',
            "email" => 'required|email|unique:users',
            "password" => 'required|min:6|max:12',
            "retype-password" => "required_with:password|same:password|min:6"
        ];
        $request->validate($rules);

        $user = new Users();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = "1";
        $res = $user->save();
        if ($res) {
            return redirect("login")->with("success", "Đăng kí thành công!");
        } else {
            return back()->with("error", "Vui lòng kiểm tra lại!");
        }
    }

    public function loginUser(Request $request)
    {
        $rules = [
            "email" => 'required|email',
            "password" => 'required|min:6|max:12',
        ];
        $request->validate($rules);

        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put("loginId", $user->id);
                return redirect("/")->with('success', "Đăng nhập thành công");
            } else {
                return back()->with('fail', 'Mật khẩu không đúng');
            }
        } else {
            return back()->with('fail', 'Email này chưa đăng kí');
        }
    }

    public function dashboard()
    {
        return "dashboard";
    }
    

    public function userProfile() {

        if(session()->has("loginId")) {
            $user = User::where("id", "=", session()->get("loginId"))->first();
            return view("auth.user", compact('user'));
        }

        return view("auth.user");

    }

    public function adminManage() {
        return view("auth.manage");
    }

    public function managerManage() {
        return view("auth.manage");
    }

    public function logout() {
        if(session()->has("loginId")) {
            session()->pull("loginId");
            return redirect("login");
        } else {
            return redirect("/");
        }
    }
}
