<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $notifikasi = [
            "100 data mahasiswa perlu di perbaiki",
            "Hari ini deadline laporan perjalanan dinas!"
        ];

        return view('admin', compact('notifikasi'));
    }
}
