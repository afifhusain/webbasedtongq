<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingVariabel extends Controller
{
    //
    public function index() 
    {
    	$name = "Afif Husain";
    	$hobi = ["Programming", "Gaming", "Learning", "Travelling"];
    	return view('variabel', ['name' => $name,
    							'hobi' => $hobi
    						]);
    }
}
