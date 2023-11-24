<?php

namespace App\Controllers;

class Admin extends BaseController
{
    protected $db;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
    public function index(): string
    {
        $data = [
            'title' => 'Admin | Users',
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
            'title' => 'Admin | User Detail',
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

    public function buku(): string
    {
        $data = [
            'title' => 'Admin | Book'
        ];
        return view('admin/buku', $data);
    }

    public function transaction(): string
    {
        $data = [
            'title' => 'Admin | Transaction'
        ];
        return view('admin/transaction', $data);
    }
}
