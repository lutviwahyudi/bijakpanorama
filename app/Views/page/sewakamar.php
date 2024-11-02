<?= $this->include('layout/header') ?>
<?= $this->include('layout/navbar') ?>

<div class="container" style="margin-top: 10%;">
    <h2 class="font-weight-bold text-primary heading text-center">
        Pilih Kamar
    </h2>
</div>

<table class="table table-striped w-80 mx-auto" style="width: 80%;">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Jenis Kamar</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($kamar as $index => $km): ?>
            <tr>
                <th scope="row"><?= $index + 1; ?></th> <!-- Nomor urut otomatis -->
                <td><?= $km['j_kamar']; ?></td>
                <td><?= ($km['harga']); ?></td> <!-- Format harga -->
                <td>
                    <a href="<?= base_url('kamar/pesan/' . $km['id_kamar']); ?>" class="btn btn-primary">Pesan</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?= $this->include('layout/footer') ?>