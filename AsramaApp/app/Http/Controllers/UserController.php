<?php

namespace App\Http\Controllers;

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
        return view('editprofile');
    }

    /**
     * Save penghuni info to DB
     *
     * @return \Illuminate\Http\Response
     */
    public function save_penghuni_info()
    {
        
    }
}
