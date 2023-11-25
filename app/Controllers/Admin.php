<?php

namespace App\Controllers;

class Admin extends BaseController
{
    // public function index(): string
    // {
    //     return view('admin/index');
    // }

    public function buku(): string
    {
        return view('admin/buku');
    }
    protected $db;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
    public function index(): string
    {
        $data = [
            'title' => 'Users',
        ];

        // $db = \Config\Database::connect();
        $builder = $this->db->table('users');
        $builder->select('users.id as userid, username, email, auth_groups.name as role');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $builder->get();

        $data['users'] = $query->getResult();

        return view('admin/index', $data);
    }

    public function user($id = 0)
    {
        $data = [
            'title' => 'User Detail',
        ];

        $builder = $this->db->table('users');
        $builder->select('users.id as userid, username, email, fullname, profile_image, auth_groups.name as role');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $builder->where('users.id', $id);
        $query = $builder->get();

        $data['user'] = $query->getRow();

        if (empty($data['user'])) {
            return redirect()->to('/admin');
        }

        return view('admin/user', $data);
    }

    public function book(): string
    {
        $bookModel = new \App\Models\BookModel();
        $data = [
            'title' => 'Book',
            'books' => $bookModel->getBook()
        ];
        return view('admin/book', $data);

    }

    public function transaction(): string
    {
        return view('admin/transaction');

        $data = [
            'title' => 'Transaction'
        ];
        return view('admin/transaction', $data);
    }
}
