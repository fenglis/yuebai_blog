<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login.index');
    }

    public function login()
    {
        //验证
        $this->validate(request(), [
            'username' => 'required',
            'password' => 'required|min:1|max:10',
            'captcha' => 'required|captcha'
        ],[
            'captcha.required' => '验证码不能为空',
            'captcha.captcha' => '请输入正确验证码',
        ]);

        //逻辑
        $user = request(['username', 'password']);
        //使用守备来登录
        dd(\Auth::guard("admin")->attempt($user));
        if(\Auth::guard("admin")->attempt($user)) {
            return redirect('/admin/home/index');
        }

        return \Redirect::back()->withErrors("用户名密码不匹配");
    }
}
