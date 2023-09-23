<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $nama = 'Ali Dongan Harahap';
        $kampus = 'Universitas Singaperbangsa Karawang';
        $hobi = 'Bermain game';

        $data['nama'] = $nama;
        $data['kampus'] = $kampus;
        $data['hobi'] = $hobi;

        return view('blog', $data);
    }
}
