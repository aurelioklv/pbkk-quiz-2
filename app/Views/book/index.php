<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <a href="<?= base_url('admin/book/add') ?>" class="btn btn-primary my-3">+ Tambah Data Buku</a>
    <div class="row">
        <div class="col-lg-8">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan') ?>
                </div>
            <?php endif ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($books as $book) : ?>
                        <tr>
                            <th scope="row"><?= $book['id'] ?></th>
                            <td><img src="<?= $book['sampul'] ?>" width="400" height="600" alt="<?= $book['judul'] ?>" class="sampul"></td>
                            <td><?= $book['judul'] ?></td>
                            <td><?= $book['harga'] ?></td>
                            <td><?= $book['stok'] ?></td>
                            <td><a href="<?= base_url('admin/book/') ?><?= $book['slug'] ?>" class="btn btn-success">Detail</a></td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
    </div>

</div>
<?php $this->endSection(); ?>