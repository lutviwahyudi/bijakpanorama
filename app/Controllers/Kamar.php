<?php

namespace App\Controllers;
use App\Models\KamarModel;
use Dompdf\Dompdf;
use Dompdf\Options;

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
            return view('page/pesan1', $data);    
        }
        else {
            return view('page/pesan2', $data);
        }
    }

    public function submit_pemesanan()
    {

        $data_pemesanan = [
            'id_kamar' => $this->request->getPost('id_kamar'),
            'nama' => $this->request->getPost('nama'),
            'no_hp' => $this->request->getPost('no_hp'),
            'waktu_mulai' => $this->request->getPost('waktu_mulai'),
            'waktu_berakhir' => $this->request->getPost('waktu_berakhir'),
            'durasi' => $this->request->getPost('durasi'),
            'tanggal_checkin' => $this->request->getPost('tanggal_checkin'),
        ];

        $html = view('page/pemesanan', $data_pemesanan);

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $dompdf = new Dompdf($options);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $dompdf->stream("rincian_pemesanan.pdf", ["Attachment" => false]);
    }
    
}
