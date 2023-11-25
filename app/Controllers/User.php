<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index(): string
    {
        $data = [
            'config' => config('Auth'),
        ];
        return view('auth/login', $data);
        //return view('user/index');
    }

    public function showUser(): string
    {
        return view('user/index');
    }
}
