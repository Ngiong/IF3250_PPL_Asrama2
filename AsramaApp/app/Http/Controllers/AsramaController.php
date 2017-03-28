<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsramaController extends Controller
{
	public function index() {
		$data_asrama = DB::table('asrama')
						->get();
		foreach ($data_asrama as $data) {
			$kamar = DB::table('kamar')
						->select('*')
						->where('id_asrama', $data->id_asrama);
			$data->jumlah_kamar = $kamar->count();
			$data->kapasitas = $kamar->sum('kapasitas');
			$data->jumlah_penghuni = $kamar->sum('jumlah_penghuni');
		}
		return view('asrama.index', compact('data_asrama'));
	}

	public function showCreateForm() {
		return view('asrama.create');
	}

	public function create(Request $request) {
		DB::table('asrama')
			->insert(['nama' => $request->nama,
						'deskripsi' => $request->deskripsi,
						'alamat' => $request->alamat]);
		return redirect('/asrama');
	}

	public function showEditForm($id_asrama) {
		$data = DB::table('asrama')
				->select('*')
				->where('id_asrama', $id_asrama)
				->first();
		return view('asrama.edit', compact('data'));
	}

	public function edit(Request $request) {
		DB::table('asrama')
			->where('id_asrama', $request->id)
			->update(['nama' => $request->nama,
						'deskripsi' => $request->deskripsi,
						'alamat' => $request->alamat]);
		return redirect('/asrama');
	}

	public function delete($id_asrama) {
		DB::table('kamar')
			->where('id_asrama', $id_asrama)
			->delete();
		DB::table('asrama')
			->where('id_asrama', $id_asrama)
			->delete();
		return redirect('/asrama');
	}
}
