<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <div class="row">
        <div class="col">
            <?php $validationErrors = session('_ci_validation_errors'); ?>
            <form action="<?= base_url('admin/book/save') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="row mb-3">
                    <label for="inputJudul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= (isset($validationErrors['judul'])) ? 'is-invalid' : ''; ?>" id="inputJudul" name="judul" value="<?= old('judul') ?>" autofocus>
                        <?php if (isset($validationErrors['judul'])) : ?>
                            <div class="invalid-feedback">
                                <?= $validationErrors['judul'] ?>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPenulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= (isset($validationErrors['penulis'])) ? 'is-invalid' : ''; ?>" id="inputPenulis" name="penulis" value="<?= old('penulis') ?>">
                        <?php if (isset($validationErrors['penulis'])) : ?>
                            <div class="invalid-feedback">
                                <?= $validationErrors['penulis'] ?>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPenerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= (isset($validationErrors['penerbit'])) ? 'is-invalid' : ''; ?>" id="inputPenerbit" name="penerbit" value="<?= old('penerbit') ?>">
                        <?php if (isset($validationErrors['penerbit'])) : ?>
                            <div class="invalid-feedback">
                                <?= $validationErrors['penerbit'] ?>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputHarga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control <?= (isset($validationErrors['harga'])) ? 'is-invalid' : ''; ?>" id="inputHarga" name="harga" value="<?= old('harga') ?>">
                        <?php if (isset($validationErrors['harga'])) : ?>
                            <div class="invalid-feedback">
                                <?= $validationErrors['harga'] ?>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputStok" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control <?= (isset($validationErrors['stok'])) ? 'is-invalid' : ''; ?>" id="inputStok" name="stok" value="<?= old('stok') ?>">
                        <?php if (isset($validationErrors['stok'])) : ?>
                            <div class="invalid-feedback">
                                <?= $validationErrors['stok'] ?>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputSampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= (isset($validationErrors['sampul'])) ? 'is-invalid' : ''; ?>" id="inputSampul" name="sampul" value="<?= old('sampul') ?>">
                        <?php if (isset($validationErrors['sampul'])) : ?>
                            <div class="invalid-feedback">
                                <?= $validationErrors['sampul'] ?>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>

</div>
<?php $this->endSection(); ?>