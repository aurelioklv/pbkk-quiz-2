<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'config' => config('Auth'),
        ];
        return view('auth/login', $data);
    }

    public function register(): string
    {
        $data = [
            'config' => config('Auth'),
        ];
        return view('auth/register', $data);
    }

    public function user(): string
    {
        return view('user/index');
    }
}
