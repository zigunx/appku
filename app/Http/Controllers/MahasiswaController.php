<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Http\Requests;

class MahasiswaController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

}
