<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengguna;

class PenggunaController extends Controller
{
    //
    public function index()
    {
    	// mengambil data pengguna
    	$pengguna = Pengguna::all();
    	// mengambalikan data ke view

    	return view('pengguna.index', ['pengguna' => $pengguna]);

    }
}
