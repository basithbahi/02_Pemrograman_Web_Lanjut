<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasithController extends Controller
{
    /*
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return '2141720177 <br> Abdul Basith Bahi <br> TI-2H';
    }

    public function articles($id) {
        return 'Menampilkan Output Halaman Artikel dengan ID ' . $id;
    }
    */

    public function index()
    {
        return '<iframe src="https://www.educastudio.com/contact-us" width="100%" height="100%"></iframe>';
    }

    public function create()
    {
        return view('contact-form');
    }
    
    public function store(Request $request)
    {
        return "<pre><h3>Judul : $request->title</h3><h3>Deskripsi : $request->description</h3></pre>";
    }
}

