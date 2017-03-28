<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KamarController extends Controller
{
    public function index($id_asrama) {
    	$data_kamar = DB::table('kamar')
    					->where('id_asrama', $id_asrama)
    					->get();
    	$data_kamar->id_asrama = $id_asrama;
    	return view('kamar.index', compact('data_kamar'));
    }

    public function showCreateForm($id_asrama) {
    	return view('kamar.create', compact('id_asrama'));
    }

    public function create(Request $request, $id_asrama) {
    	DB::table('kamar')
    		->insert(['id_asrama' => $id_asrama,
    					'nama' => $request->nama,
    					'kapasitas' => $request->kapasitas,
    					'jumlah_penghuni' => $request->jumlah_penghuni]);
    	return redirect()->route('kamar', ['id_asrama' => $id_asrama]);
    }

    public function showEditForm($id_asrama, $id_kamar) {
    	$data = DB::table('kamar')
    				->select('*')
    				->where('id_kamar', $id_kamar)
    				->where('id_asrama', $id_asrama)
    				->first();
    	return view('kamar.edit', compact('data'));
    }

    public function edit(Request $request, $id_asrama) {
    	DB::table('kamar')
    		->where('id_kamar', $request->id)
    		->update(['nama' => $request->nama,
    					'kapasitas' => $request->kapasitas,
    					'jumlah_penghuni' => $request->jumlah_penghuni]);
    	return redirect()->route('kamar', ['id_asrama' => $id_asrama]);
    }

    public function delete($id_asrama, $id_kamar) {
    	DB::table('kamar')
    		->where('id_kamar', $id_kamar)
    		->delete();
    	return redirect()->route('kamar', ['id_asrama' => $id_asrama]);
    }
}
