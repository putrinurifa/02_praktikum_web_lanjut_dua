<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'NIM : 1941720036, NAMA : PUTRI NURIFA FIRDAUSIA';
    }

    public function articles($id) {
        return '/Halaman Artikel Dengan Id /{$id}'.$id;
    }
}
