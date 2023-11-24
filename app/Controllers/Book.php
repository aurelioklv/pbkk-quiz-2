<?php

namespace App\Controllers;

use App\Models\BookModel;

class Book extends BaseController
{
    protected $bookModel;
    public function __construct()
    {
        $this->bookModel = new BookModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Daftar Buku',
            'books' => $this->bookModel->getBook()
        ];
        return view('/book/index', $data);
    }

    public function detail($slug)
    {
        $book = $this->bookModel->getBook($slug);
        $data = [
            'title' => 'Detail Buku',
            'book' => $book
        ];
        if (empty($data['book'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul buku ' . $slug . ' tidak ditemukan.');
        }
        return view('/book/detail', $data);
    }

    public function add()
    {
        // d($_SESSION);
        $data = [
            'title' => 'Form Tambah Data Buku',
        ];
        return view('/book/add', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[buku.judul]',
                'errors' => [
                    'required' => '{field} buku harus diisi.',
                    'is_unique' => '{field} buku sudah terdaftar.'
                ]
            ],
            'penulis' => 'required',
            'penerbit' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'sampul' => 'required',
        ])) {
            return redirect()->to('/admin/book/add')->withInput();
        }
        // dd('berhasil');
        $this->bookModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => url_title($this->request->getVar('judul'), '-', true),
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'stok' => $this->request->getVar('stok'),
            'harga' => $this->request->getVar('harga'),
            'sampul' => $this->request->getVar('sampul')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/admin/book');
    }

    public function delete($id)
    {
        $this->bookModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/admin/book');
    }

    public function edit($slug)
    {
        // d($_SESSION);
        $validation = session()->getFlashdata('validation');
        $data = [
            'title' => 'Form Ubah Data Buku',
            'validation' => $validation,
            'book' => $this->bookModel->getBook($slug)
        ];
        return view('/book/edit', $data);
    }

    public function update($id)
    {
        $oldBook = $this->bookModel->getBook($this->request->getVar('slug'));
        if ($oldBook['judul'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[buku.judul]';
        }
        if (!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => '{field} buku harus diisi.',
                    'is_unique' => '{field} buku sudah terdaftar.'
                ]
            ],
            'penulis' => 'required',
            'penerbit' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'sampul' => 'required',
        ])) {
            // $validation = \Config\Services::validation();
            return redirect()->to('/admin/book/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $this->bookModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => url_title($this->request->getVar('judul'), '-', true),
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'stok' => $this->request->getVar('stok'),
            'harga' => $this->request->getVar('harga'),
            'sampul' => $this->request->getVar('sampul')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/admin/book');
    }
}
