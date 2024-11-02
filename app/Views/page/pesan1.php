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
                <select class="form-control" id="waktu_berakhir" name="waktu_berakhir" required onchange="hitungDurasi()">
                    <option value="">Pilih Jam Berakhir</option>
                    <?php for ($i = 0; $i < 24; $i++): ?>
                        <option value="<?= sprintf("%02d:00", $i); ?>"><?= sprintf("%02d:00", $i); ?></option>
                    <?php endfor; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="durasi">Durasi Menginap</label>
                <input type="text" class="form-control" id="durasi" name="durasi" readonly>
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



<script>
    function hitungDurasi() {
        var waktuMulai = document.getElementById('waktu_mulai').value;
        var waktuBerakhir = document.getElementById('waktu_berakhir').value;

        if (waktuMulai && waktuBerakhir) {
            // Mengonversi waktu menjadi jam dan menit
            var mulai = new Date("1970-01-01T" + waktuMulai + ":00");
            var berakhir = new Date("1970-01-01T" + waktuBerakhir + ":00");

            // Menghitung durasi dalam jam
            var durasi = (berakhir - mulai) / (1000 * 60 * 60); // dalam jam

            if (durasi < 0) {
                durasi += 24; // menyesuaikan jika berakhir keesokan harinya
            }

            // Menampilkan durasi
            document.getElementById('durasi').value = durasi + ' Jam';
        } else {
            document.getElementById('durasi').value = ''; // Kosongkan jika salah satu tidak dipilih
        }
    }
</script>

<?= $this->include('layout/footer') ?>