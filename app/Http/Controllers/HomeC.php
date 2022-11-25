<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barangM;
use App\Models\konsumenM;

class HomeC extends Controller
{
    public function index(){
        $user = ['name' => 'DAVID', 'role' => 'teller'];
        return view('pages.home', $user);
    }

    public function about(){
        $user = ['name' => 'Nanda', 'role' => 'admin'];
        return view('pages.about', $user);
    }

    public function barang(){
        $data = barangM::all();
        return view('pages.barang', ['data' => $data]);
    }

    public function konsumen(){
        $data = konsumenM::all();
        return view('pages.konsumen', ['data' => $data]);
    }
}
