<?= $this->include('layout/header') ?>
<?= $this->include('layout/navbar') ?>
<!-- ini adalah alert pengiriman pesan -->
<?php if (session()->getFlashdata('success')) : ?>
    <div id="alert" class="alert alert-success col-md-6 col-lg-5 mx-auto" style="margin-top: 10%; margin-bottom: 0px;">
        <?= session()->getFlashdata('success'); ?>
    </div>
<?php elseif (session()->getFlashdata('error')) : ?>
    <div id="alert" class="alert alert-danger col-md-6 col-lg-5 mx-auto" style="margin-top: 10%; margin-bottom: 0px;">
        <?= session()->getFlashdata('error'); ?>
    </div>
<?php endif; ?>
<!-- akhir code -->
<div class="d-flex justify-content-center align-items-center vh-100">
    <form action="<?= base_url('auth/login') ?>" method="post" enctype="multipart/form-data">
        <p style="color: crimson;">Selamat datang silahkan login</p>
        <div class="mb-3">
            <label for="name" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary w-100 mb-2">Masuk</button>
        <a href="<?= base_url('auth/registrasi') ?>" class="btn btn-secondary w-100">Registrasi</a>
    </form>
</div>
<?= $this->include('layout/footer') ?>