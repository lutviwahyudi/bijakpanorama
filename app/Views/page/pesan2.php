<?= $this->include('layout/header') ?>
<?= $this->include('layout/navbar') ?>
<div class="container" style="margin-top: 10%; margin-bottom: 10%;">
    <div class=" card mx-auto" style="width: 80%;">
        <div class="card-header">
            <h3>Form Pemesanan Kamar</h3>
        </div>
        <div class="card-body">
            <form action="<?= base_url('kamar/submit_pemesanan'); ?>" method="POST" enctype="multipart/form-data">
                <!-- Hidden field untuk id_kamar -->
                <input type="hidden" name="id_kamar" value="<?= $kamar['id_kamar']; ?>">

                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>

                <div class="form-group">
                    <label for="no_hp">Nomor Handphone</label>
                    <input type="tel" class="form-control" id="no_hp" name="no_hp" required>
                </div>

                <div class="form-group">
                    <label for="waktu_mulai">Waktu Mulai</label>
                    <select class="form-control" id="waktu_mulai" name="waktu_mulai" required onchange="hitungDurasi()">
                        <option value="">Pilih Jam Mulai</option>
                        <?php for ($i = 0; $i < 24; $i++): ?>
                            <option value="<?= sprintf("%02d:00", $i); ?>"><?= sprintf("%02d:00", $i); ?></option>
                        <?php endfor; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="waktu_berakhir">Waktu Berakhir</label>
                    <select class="form-control" id="waktu_berakhir" name="waktu_berakhir" required>
                        <option value="12:00">12:00 (Siang)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="durasi">Durasi Menginap</label>
                    <input type="text" class="form-control" id="durasi" name="durasi" readonly value="Fullday">
                </div>

                <div class="form-group">
                    <label for="no_hp">Harga Sewa</label>
                    <input type="tel" class="form-control" id="no_hp" name="no_hp" value="<?= $harga ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="tanggal_checkin">Tanggal Check-in</label>
                    <input type="date" class="form-control" id="tanggal_checkin" name="tanggal_checkin" required>
                </div>

                <button type="submit" class="btn btn-primary" style="margin-top: 15px;">Lanjutkan Pemesanan</button>
            </form>
        </div>
    </div>
</div>

<?= $this->include('layout/footer') ?>