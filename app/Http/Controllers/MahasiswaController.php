<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            "Aulia Aspi",
            "Putri Padang",
            "SigmaBoy",
            "iput"
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}
