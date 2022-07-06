<?php

namespace App\Controllers;

use App\Models\SeminarModel;
use App\Models\CardModel;

class Admin extends BaseController
{   
    protected $contactModel;
    protected $cardsModel;

    public function __construct(){
        $this->contactModel = new SeminarModel();
        $this->cardsModel = new CardModel();
    }

    // Start Contact
    public function contact()
    {
        $db = \Config\Database::connect();
        $contact = $db->query("SELECT * FROM contact ORDER BY id DESC");
        $data = [
            'title' => 'Contact',
            'contact' => $contact
        ];
        return view('admin/contact', $data);
    }
    public function save_Contact(){
        $data = [
            'title' => 'Contact'
        ];
        $this->contactModel->save([
            'name' => $this->request->getVar('name'),
            'subject' => $this->request->getVar('subject'),
            'email' => $this->request->getVar('email'),
            'message' => $this->request->getVar('message')
        ]);
        return view('pages/thankyou', $data);
    }
    // End Contact

    // Start Card
    public function card(){
        $data = [
            'title' => 'Card'
        ];
        return view('admin/formCard', $data);
    }
    // for show card: at ShowCard controller with card_find method
    public function save_card(){
        $data = [
            'title' => 'Seminar'
        ];
        // File
        $filePdf = $this->request->getFile('file');
        // Move File to folder
        $filePdf->move('assets/img/scenery/file');
        // get file name
        $nameFile = $filePdf->getName();
        // Image
        $fileImage = $this->request->getFile('gambar');
        // Move image to folder
        $fileImage->move('assets/img/scenery/cover');
        // get file name
        $nameImage = $fileImage->getName();
        $this->cardsModel->save([   
            'nama' => $this->request->getVar('nama'),
            'periode' => $this->request->getVar('periode'),
            'narasumber' => $this->request->getVar('narasumber'),
            'mc' => $this->request->getVar('mc'),
            'kontak' => $this->request->getVar('kontak'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'kuota' => $this->request->getVar('kuota'),
            'mulai' => $this->request->getVar('mulai'),
            'selesai' => $this->request->getVar('selesai'),
            'file' => $nameFile,
            'gambar' => $nameImage
        ]);
        return view('pages/thankyou', $data);
    }
    // End Card

    // Start Admin Home
    public function adminHome(){
        $data = [
            'title' => 'Admin'
        ];
        return view('admin/admin', $data);
    }
    // End Admin Home

    // Start Show Pendaftar
     public function showPendaftar(){
        $db = \Config\Database::connect();
        $daftar = $db->query("SELECT * FROM pendaftar ORDER BY id DESC");
        $data = [
            'title' => 'Pendaftar',
            'daftar' => $daftar
        ];
        return view('admin/showPendaftar', $data);
    }
    // End Show Pendaftar
}