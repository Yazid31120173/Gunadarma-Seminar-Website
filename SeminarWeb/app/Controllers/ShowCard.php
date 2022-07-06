<?php

namespace App\Controllers;

class ShowCard extends Admin
{
    // Start Card find
    public function card_find(){
        $db = \Config\Database::connect();
        $card = $db->query("SELECT * FROM card ORDER BY id DESC");
        // $card = $this->cardsModel->findAll(); ('SELECT' ANOTHER WAY)
        $data = [
            'title' => 'Seminar',
            'card' => $card
        ];
        return view('card/seminar', $data);
    }
    // end Card find

    // Start Detail of Cards
    public function detail($id){
        $card = $this->cardsModel->where(['id' => $id])->first();
        $data = [
            'title' => 'Detail Seminar',
            'card' => $card
        ];
        return view('card/detail', $data);
    }
    // End Detail of Cards
}