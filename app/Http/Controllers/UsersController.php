<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UsersController extends Controller
{

    public function index()
    {
    	return 1;
    }

    public function register()
    {
    	return view('users.register');
    }

    public function store(Requests\UserRegisterRequest $request)
    {
    	// 保持用户数据
    	User::create(array_merge($request->all(),['avatar'=>'/images/default-avatar.png']));
    	// 发送验证邮件,待开发

    	// 重定向
    	return redirect('/');
    }
}
