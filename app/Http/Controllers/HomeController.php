<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $nama = "Muhammad Yasir";
        $pekerjaan = "Developer";

        return view('home', compact('nama', 'pekerjaan'));
    }

    public function contact()
    {
        $whatsApp = '+62 812-2168-6519';
        $email = 'mhmdyasir00@gmail.com';

        return view('contact', compact('whatsApp', 'email'));
    }

    public function about()
    {
        return view('about');
    }

    public function produk()
    {
        $produk = [
            "Baju Pesta",
            "Baju Adat",
            "Baju Wisuda",
            "Baju Dinas"
        ];

        return view('produk', compact('produk'));
    }
}
