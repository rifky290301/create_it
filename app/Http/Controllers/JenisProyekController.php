<?php

namespace App\Http\Controllers;

use App\Models\JenisProyek;
use Illuminate\Http\Request;

class JenisProyekController extends Controller
{

    public function index()
    {
        // dd("tes");
        return JenisProyek::get();
    }
}
