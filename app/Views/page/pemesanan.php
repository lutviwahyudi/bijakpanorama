<!DOCTYPE html>
<html>

<head>
    <title>Rincian Pemesanan Kamar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
        }

        h3 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #000;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Rincian Pemesanan Kamar</h3>
        <table>
            <tr>
                <th>Nama Pemesan</th>
                <td><?= $nama; ?></td>
            </tr>
            <tr>
                <th>Nomor Handphone</th>
                <td><?= $no_hp; ?></td>
            </tr>
            <tr>
                <th>Waktu Awal</th>
                <td>Jam <?= $waktu_mulai; ?> WIB</td>
            </tr>
            <tr>
                <th>Waktu Berakhir</th>
                <td>Jam <?= $waktu_berakhir; ?> WIB</td>
            </tr>
            <tr>
                <th>Durasi Menginap</th>
                <td><?= $durasi; ?></td>
            </tr>
            <tr>
                <th>Tanggal Check-in</th>
                <td><?= date('d-m-Y', strtotime($tanggal_checkin)); ?></td>
            </tr>
        </table>
    </div>
    <br>
    <br>
    <br>
    <h3>Ketentuan Berlaku</h3>

    <div class="container mt-5">
        <h4 class="mb-4">Ketentuan Pembayaran dan Konfirmasi Pemesanan</h4>
        <ol>
            <li>
                <strong>Bukti Pemesanan:</strong> Setelah melakukan pemesanan, harap unduh atau tangkap layar (screenshot) bukti pemesanan ini sebagai tanda validasi.
            </li>
            <li>
                <strong>Pengiriman Bukti Pemesanan:</strong> Kirimkan bukti pemesanan tersebut melalui WhatsApp ke nomor kami: <a href="https://wa.me/6281286993335" target="_blank">081286993335</a>.
            </li>
            <li>
                <strong>Pembayaran Transfer:</strong> Apabila pembayaran dilakukan melalui transfer bank, Anda dapat mengirimkan pembayaran ke rekening berikut:
                <ul>
                    <li><strong>Nama Bank:</strong> [Nama Bank]</li>
                    <li><strong>Nomor Rekening:</strong> [Nomor Rekening]</li>
                    <li><strong>Nama Pemilik Rekening:</strong> [Nama Pemilik Rekening]</li>
                </ul>
            </li>
        </ol>
    </div>

</body>

</html>