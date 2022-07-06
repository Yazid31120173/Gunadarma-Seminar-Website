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
        $contact = $this->contactModel->findAll();
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
        $this->cardsModel->save([   
            'nama' => $this->request->getVar('nama'),
            'periode' => $this->request->getVar('periode'),
            'narasumber' => $this->request->getVar('narasumber'),
            'mc' => $this->request->getVar('mc'),
            'kontak' => $this->request->getVar('kontak'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'kuota' => $this->request->getVar('kuota'),
            'file' => $this->request->getVar('file'),
            'gambar' => $this->request->getVar('gambar')
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
}