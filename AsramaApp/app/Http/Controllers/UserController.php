<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\UserPenghuni;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show the edit penghuni info page
     *
     * @return \Illuminate\Http\Response
     */
    public function edit_penghuni_info()
    {
        return view('edit_penghuni_info')
        ->with(['info_penghuni' => Auth::user()->user_penghuni]);
    }

    /**
     * Save penghuni info to DB
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function save_penghuni_info(Request $request)
    {
        $user = Auth::user();
        $user_penghuni = ($user->user_penghuni == null) ? new UserPenghuni : $user->user_penghuni;

        $user_penghuni->id_user = $user->id;
        $user_penghuni->nomor_identitas = $request->nomor_identitas;
        $user_penghuni->jenis_identitas = $request->jenis_identitas;
        $user_penghuni->tempat_lahir = $request->tempat_lahir;
        $user_penghuni->tanggal_lahir = $request->tanggal_lahir;
               
        $user_penghuni->gol_darah = $request->gol_darah == 'Tidak tahu' ? '-' : $request->gol_darah;
        $user_penghuni->jenis_kelamin = $request->jenis_kelamin == 'Pria' ? 'P' : 'W';
        $user_penghuni->alamat = $request->alamat;
        $user_penghuni->agama = $request->agama;
               
        $user_penghuni->pekerjaan = $request->pekerjaan;
        $user_penghuni->warga_negara = $request->warga_negara;
        $user_penghuni->telepon = $request->telepon;
        $user_penghuni->instansi = $request->instansi;
               
        $user_penghuni->nama_ortu_wali = $request->nama_ortu_wali;
        $user_penghuni->pekerjaan_ortu_wali = $request->pekerjaan_ortu_wali;
        $user_penghuni->alamat_ortu_wali = $request->alamat_ortu_wali;
        $user_penghuni->telepon_ortu_wali = $request->telepon_ortu_wali;
               
        $user_penghuni->kontak_darurat = $request->kontak_darurat;

        $user_penghuni->save();

        return redirect('home');
    }
}
