<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        return view('admin/index');
    }

    public function buku(): string
    {
        return view('admin/buku');
    }

    public function transaction(): string
    {
        return view('admin/transaction');
    }
}
