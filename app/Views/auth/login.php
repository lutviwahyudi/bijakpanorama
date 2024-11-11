<?= $this->include('layout/header') ?>
<?= $this->include('layout/navbar') ?>
<div class="d-flex justify-content-center align-items-center vh-100">
    <form action="<?= base_url('auth/login') ?>" method="post" enctype="multipart/form-data">
        <p style="color: crimson;">Peringatan halaman ini hanya untuk Admin</p>
        <div class="mb-3">
            <label for="name" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Masuk</button>
    </form>
</div>
<?= $this->include('layout/footer') ?>