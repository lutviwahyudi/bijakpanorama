<?php

namespace App\Controllers;
use App\Models\KamarModel;
use Dompdf\Dompdf;
use Dompdf\Options;
use Twilio\Rest\Client;

class Kamar extends BaseController
{

    protected $KamarModel;
    public function __construct()
    {
        $this->KamarModel = new KamarModel();
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
            'id_kamar' => htmlspecialchars($this->request->getPost('id_kamar'), ENT_QUOTES, 'UTF-8'),
            'nama' => htmlspecialchars($this->request->getPost('nama'), ENT_QUOTES, 'UTF-8'),
            'no_hp' => htmlspecialchars($this->request->getPost('no_hp'), ENT_QUOTES, 'UTF-8'),
            'waktu_mulai' => htmlspecialchars($this->request->getPost('waktu_mulai'), ENT_QUOTES, 'UTF-8'),
            'waktu_berakhir' => htmlspecialchars($this->request->getPost('waktu_berakhir'), ENT_QUOTES, 'UTF-8'),
            'durasi' => $this->request->getPost('durasi'),
            'harga' => $this->request->getPost('harga'),
            'tanggal_checkin' => htmlspecialchars($this->request->getPost('tanggal_checkin'), ENT_QUOTES, 'UTF-8'),
        ];
        
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
                "whatsapp:+6281386225719", // To
                [
                    "from" => "whatsapp:+14155238886",
                    "mediaUrl" => ["https://7b94-116-206-241-84.ngrok-free.app/bijakpanorama/public/uploads/Rincian_pemesanan.pdf"]
                ]
            );


        if ($message->status == 'queued' || $message->status == 'sent') {

            return redirect()->back()->with('success', 'Rincian pemesanan berhasil terkirim.');
        } else {

            return redirect()->back()->with('error', 'Gagal mengirim rincian pemesanan.');
        }
    }

    
}
