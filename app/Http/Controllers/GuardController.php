<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GuardController extends Controller
{
    //會員註冊
    public function register(Request $request)
    {

        // dd($reqeust->all());
        $this->validate($request, [
            'account' => 'required|unique:users,account|max:255',
            'password' => 'required',
            'email' => 'required|email|unique:users,email',
            'name' => 'required',
        ]);

        $userPayload = $request->only('account', 'password', 'email', 'name');
        $userPayload['password'] = \Hash::make($userPayload['password']);
        User::create($userPayload);
        return [
            'status' => true,
            'message' => '建立成功',
        ];

    }

    //會員登入
    public function login(Request $request)
    {
        $payload = $request->only('email', 'account', 'password');
        if ($result = auth('users')->attempt($payload)) {
            return [
                'status' => true,
                'message' => '登入成功',
            ];
        } else {
            return [
                'status' => false,
                'message' => '登入失敗',
            ];
        }
    }

    //顯示當前登入會員
    public function show()
    {
        return auth('users')->user();
    }
}
