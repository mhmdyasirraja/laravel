<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //$data = [
          //  'nama' => 'Muhammad Yasir',
            //'pekerjaan' => 'Developer',
        //];
        $nama = "muhammad yasir";
        $pekerjaan = "kkn";
        return view('home', compact('nama','pekerjaan'));
    }

    public function contact()
    {
        $data = [
            'whatsApp' => '+62 812-2168-6519',
            'email'    => 'mhmdyasir00@gmail.com',
        ];

        return view('contact')->with($data);
    }
}
