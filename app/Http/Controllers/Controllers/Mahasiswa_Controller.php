<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            ['nama' => 'Risa Lestari', 'foto' => 'fto1.jpg'],
            ['nama' => 'Rudi Hermawan', 'foto' => 'fto2.jpg'],
            ['nama' => 'Lisa Permata', 'foto' => 'fto3.jpg'],
        ];

        return view('mahasiswa.index', compact('mahasiswa'));
    }
}
