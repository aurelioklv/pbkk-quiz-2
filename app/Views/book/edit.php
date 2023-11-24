<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <div class="row">
        <form action="<?= base_url('admin/book/update/') ?><?= $book['id'] ?>" method="post">
            <?= csrf_field() ?>
            <input type="hidden" name="slug" value="<?= $book['slug'] ?>">
            <div class="row mb-3">
                <label for="inputJudul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation && $validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="inputJudul" name="judul" value="<?= (old('judul')) ? old('judul') : $book['judul'] ?>" autofocus>
                    <?php if ($validation) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul') ?>
                        </div>
                    <?php endif ?>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPenulis" class="col-sm-2 col-form-label">Penulis</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation && $validation->hasError('penulis')) ? 'is-invalid' : ''; ?>" id="inputPenulis" name="penulis" value="<?= (old('penulis')) ? old('penulis') : $book['penulis'] ?>">
                    <?php if ($validation) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('penulis') ?>
                        </div>
                    <?php endif ?>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPenerbit" class="col-sm-2 col-form-label">Penerbit</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation && $validation->hasError('penerbit')) ? 'is-invalid' : ''; ?>" id="inputPenerbit" name="penerbit" value="<?= (old('penerbit')) ? old('penerbit') : $book['penerbit'] ?>">
                    <?php if ($validation) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('penerbit') ?>
                        </div>
                    <?php endif ?>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputStok" class="col-sm-2 col-form-label">Stok</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation && $validation->hasError('stok')) ? 'is-invalid' : ''; ?>" id="inputStok" name="stok" value="<?= (old('stok')) ? old('stok') : $book['stok'] ?>">
                    <?php if ($validation) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('stok') ?>
                        </div>
                    <?php endif ?>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputHarga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation && $validation->hasError('harga')) ? 'is-invalid' : ''; ?>" id="inputHarga" name="harga" value="<?= (old('harga')) ? old('harga') : $book['harga'] ?>">
                    <?php if ($validation) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('harga') ?>
                        </div>
                    <?php endif ?>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputSampul" class="col-sm-2 col-form-label">Sampul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation && $validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" id="inputSampul" name="sampul" value="<?= (old('sampul')) ? old('sampul') : $book['sampul'] ?>">
                    <?php if ($validation) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('sampul') ?>
                        </div>
                    <?php endif ?>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Ubah</button>
        </form>
    </div>

</div>
<?php $this->endSection(); ?>