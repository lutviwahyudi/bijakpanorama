<?= $this->include('layout/header') ?>

<div class="d-flex justify-content-center align-items-center vh-100">
    <form style="width: 30%;">
        <div class="mb-3">
            <label for="name" class="form-label">Username</label>
            <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


<?= $this->include('layout/footer') ?>