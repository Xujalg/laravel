<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
     // 用户登录显示
     public function index() {
        return view('login.index');
    }

    // 用户登录处理
    public function login(Request $request) {
        // 接受表单数据
        $data = $request->except(['_token']);

        dump($data);

    }
}
