<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = [
            "Aventina",
            "Ventina",
            "Ventin",
            "Ventennnnnn"
        ];

        return view('dosen', compact('dosen'));
    }
}
