<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Siswa;
use App\Hobi;

class HobiController extends Controller
{
    //
    public function index()
    {
    	$siswa = Siswa::All();
    	return view('siswa.index', ['siswa' => $siswa]);
    }
}
