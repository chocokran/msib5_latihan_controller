<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KampusController extends Controller
{
    public function index(){
        $kampus = 'UNIVERSITAS SINGAPERBANGSA KARAWANG';
        $data['kampus'] = $kampus;
        return view('kampus',$data);
    }
}
