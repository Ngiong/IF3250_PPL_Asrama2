<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model_Pengumuman;

class MiscController extends Controller
{
    public function load_all_pengumuman() {
      $pengumuman = Model_Pengumuman::all()->sortByDesc("updated_at");
      return view('/pengumuman', ['pengumuman'=> $pengumuman]);
    }
}
