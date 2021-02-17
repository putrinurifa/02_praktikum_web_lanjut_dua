<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        echo "NIM : 1941720036";
        echo "<br> NAMA : PUTRI NURIFA FIRDAUSIA";
    }

    public function articles ($id) {
        echo "Halaman Artikel Dengan Id".$id;
    }
}
