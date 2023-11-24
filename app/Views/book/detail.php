<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= $book['sampul'] ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $book['judul'] ?></h5>
                            <p class="card-text"><b>Penulis : </b><?= $book['penulis'] ?></p>
                            <p class="card-text"><small class="text-body-secondary"><b>Penerbit : </b><?= $book['penerbit'] ?></small></p>

                            <a href="<?= base_url('admin/book/edit/') ?><?= $book['slug'] ?>" class="btn btn-warning">Edit</a>
                            <form action="<?= base_url('admin/book/') ?><?= $book['id'] ?>" method="post" class="d-inline">
                                <?= csrf_field() ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                            </form>
                            <br><br>
                            <!-- <a href="/book">Kembali ke daftar buku</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php $this->endSection(); ?>