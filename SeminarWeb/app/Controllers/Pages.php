<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('pages/home', $data);
    }

    public function thankyou()
    {
        $data = [
            'title' => 'Big Thanks'
        ];
        return view('pages/thankyou', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact'
        ];
        return view('pages/contact', $data);
    }
}