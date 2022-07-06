<?php

namespace App\Controllers;

use App\Models\PendaftarModel;

class Pendaftar extends BaseController
{
    protected $daftarModel;

    public function __construct(){
        $this->daftarModel = new PendaftarModel();
    }

    public function daftar()
    {
        $data = [
            'title' => 'Pendaftar'
        ];
        return view('pendaftar/formPendaftar', $data);
    }

    // Start Pendaftar
    public function save_pendaftar(){
        $data = [
            'title' => 'Pendaftar'
        ];
        $this->daftarModel->save([
            'nama_seminar' => $this->request->getVar('nama_seminar'),
            'nama_pendaftar' => $this->request->getVar('nama_pendaftar'),
            'no_pendaftar' => $this->request->getVar('no_pendaftar'),
            'email_pendaftar' => $this->request->getVar('email_pendaftar'),
            'instansi_pendaftar' => $this->request->getVar('instansi_pendaftar'),
            'jurusan_pendaftar' => $this->request->getVar('jurusan_pendaftar'),
            'status_pendaftar' => $this->request->getVar('status_pendaftar')
        ]);
        return view('pages/thankyou', $data);
    }
    // End Pendaftar
}