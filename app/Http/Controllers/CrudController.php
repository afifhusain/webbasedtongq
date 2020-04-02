<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    //
    public function index()
    {
    	$crudSend = DB::table('crud')->paginate(5);
    	
    	return view('crud.index', ['data' => $crudSend]);   
    }

    public function search(Request $request)
    {
    	$search = $request->search;

    	$crudSend = DB::table('crud')
    			->where('nama', 'LIKE', "%".$search."%")
    			->paginate();
    	return view('crud.index', ['data' => $crudSend]);
    }

    public function add()
    {
    	return view('crud.add');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'nama' => 'required',
    		'pekerjaan' => 'required',
    		'umur' => 'required|numeric',
    		'alamat' => 'required'
    	]);

    	DB::table('crud')->insert([
    		'nama' => $request->nama,
    		'pekerjaan' => $request->pekerjaan,
    		'umur' => $request->umur,
    		'alamat' => $request->alamat
    	]);

    	return redirect('/crud');
    }

    public function edit($id)
    {
    	$crudSend = DB::table('crud')->where('id', $id)->get();
    	return view('crud.edit', ['data' => $crudSend]);
    }

    public function update(Request $request)
    {
    	DB::table('crud')->where('id', $request->id)->update([
    		'nama' => $request->nama,
    		'pekerjaan' => $request->pekerjaan,
    		'umur' => $request->umur,
    		'alamat' => $request->alamat
    	]);

        return redirect('/crud');
    }

    public function delete($id)
    {
    	DB::table('crud')->where('id', $id)->delete();
    	return redirect('/crud');
    }

}






