<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'My Profile'
        ];
        return view('user/index', $data);
    }

    public function catalogue(): string
    {
        $data = [
            'title' => 'Catalogue'
        ];
        return view('user/catalogue', $data);
    }

    public function cart(): string
    {
        $data = [
            'title' => 'Cart'
        ];
        return view('user/cart', $data);
    }

    public function transaction(): string
    {
        $data = [
            'title' => 'Transaction'
        ];
        return view('user/transaction', $data);
    }
}
