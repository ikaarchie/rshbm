<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function getData()
    {
        $konten = Konten::all();

        $gizi = Konten::where('jenis', 'Gizi')
            ->latest('id')
            ->get();

        $info = Konten::where('jenis', 'Informasi lainnya')
            ->latest('id')
            ->get();

        $penyakit = Konten::where('jenis', 'Penyakit')
            ->latest('id')
            ->get();

        $alat = Konten::where('jenis', 'Tindakan dan Alat')
            ->latest('id')
            ->get();

        return view('home', compact('konten', 'gizi', 'info', 'penyakit', 'alat'));
    }
}
