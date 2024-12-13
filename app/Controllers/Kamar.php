<?php

namespace App\Controllers;
use App\Models\KamarModel;
use App\Models\AuthModel;
use App\Models\TamuModel;
use Dompdf\Dompdf;
use Dompdf\Options;
use Twilio\Rest\Client;

class Kamar extends BaseController
{

    protected $KamarModel;
    protected $AuthModel;
    protected $TamuModel;
    public function __construct()
    {
        $this->KamarModel = new KamarModel();
        $this->AuthModel = new AuthModel();
        $this->TamuModel = new TamuModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Sewa Kamar | Page',
            'kamar' => $this->KamarModel->findAll()
        ];
        return view('page/sewakamar', $data);
    }

    public function pesan($id_kamar)
    {
        
        $data = [
            'title' => 'Form Pemesanan | Page',
            'kamar' => $this->KamarModel->getKamarById($id_kamar)
        ];

        if (!$data) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Kamar dengan ID $id_kamar tidak ditemukan");
        }

    
        if ($id_kamar == 3 || $id_kamar == 4) {

            if ($id_kamar == 3) {
                $harga = 35000;
            } else {
                $harga = 25000;
            }
            // Masukkan harga ke dalam data yang akan dikirim ke view
            $data['harga'] = $harga;
            return view('page/pesan1', $data);    
        }
        else {

            if ($id_kamar == 1) {
                $harga = 250000;
            } else {
                $harga = 200000;
            }
            // Masukkan harga ke dalam data yang akan dikirim ke view
            $data['harga'] = $harga;

            return view('page/pesan2', $data);
        }
    }

    public function submit_pemesanan()
    {

        $data_pemesanan = [
            'id_user' => $this->AuthModel->where('id_user')->first(),
            'nama' => htmlspecialchars($this->request->getPost('nama'), ENT_QUOTES, 'UTF-8'),
            'no_hp' => htmlspecialchars($this->request->getPost('no_hp'), ENT_QUOTES, 'UTF-8'),
            'waktu_mulai' => htmlspecialchars($this->request->getPost('waktu_mulai'), ENT_QUOTES, 'UTF-8'),
            'waktu_berakhir' => htmlspecialchars($this->request->getPost('waktu_berakhir'), ENT_QUOTES, 'UTF-8'),
            'durasi' => $this->request->getPost('durasi'),
            'harga' => $this->request->getPost('harga'),
            'tanggal_checkin' => htmlspecialchars($this->request->getPost('tanggal_checkin'), ENT_QUOTES, 'UTF-8'),
        ];

        // Memasukkan data tamu ke tb_tamu melalui KamarModel
        $data_tamu = [
            'nama' => $data_pemesanan['nama'],
            'no_hp' => $data_pemesanan['no_hp'],
            'waktu_mulai' => $data_pemesanan['waktu_mulai'],
            'waktu_berakhir' => $data_pemesanan['waktu_berakhir'],
            'durasi' => $data_pemesanan['durasi']
        ];

        $this->TamuModel->getTamu($data_tamu);
        
        
        $html = view('page/pemesanan', $data_pemesanan);

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $dompdf = new Dompdf($options);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // Simpan PDF ke file di direktori publik agar dapat diakses publik
        $pdfOutput = $dompdf->output();
        $pdfFilePath = FCPATH . 'uploads/rincian_pemesanan.pdf'; // Path ke public/uploads
        file_put_contents($pdfFilePath, $pdfOutput);

        $sid = getenv("TWILIO_SID");
        $token = getenv("TWILIO_TOKEN");
        $twilio = new Client($sid, $token);

        $message = $twilio->messages->create(
            "whatsapp:+6281346666467", // To
                [
                    "from" => "whatsapp:+14155238886",
                    "mediaUrl" => ["https://2b4d-116-254-125-253.ngrok-free.app/bijakpanorama/public/uploads/Rincian_pemesanan.pdf"]
                ]
            );

        // Ambil username dari sesi
        $username = session()->get('username');

        // Cari data pengguna berdasarkan username
        $user = $this->AuthModel->where('username', $username)->first();

        if ($message->status == 'queued' || $message->status == 'sent') {
            
            $nama = $user['username'];
            $successMessage = "Terima kasih, $nama. Rincian pemesanan berhasil terkirim.";

            return redirect()->back()->with('success', $successMessage);
        }
        else {

            return redirect()->back()->with('error', 'Gagal mengirim rincian pemesanan.');
        }
    }

    
}
