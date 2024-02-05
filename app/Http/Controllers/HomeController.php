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

    public function search(Request $request)
    {
        $output = "";

        $search = Konten::where('judul', 'like', "%" . $request->search . "%")->get();

        foreach ($search as $isi) {
            $output .=
                "<a href=\"" . asset('gambar-konten/' . $isi->gambar) . "\" data-lightbox=\"" . $isi->jenis . "\" data-title=\"" . $isi->judul . "\" class=\"card mx-2\">
                <img src=\"" . asset('gambar-konten/' . $isi->gambar) . "\" class=\"card__image\" alt=\"\" />
                <div class=\"card__overlay\">
                    <div class=\"card__header\">
                        <svg class=\"card__arc\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path />
                        </svg>
                        <img class=\"card__thumb\" src=\"" . url('img/logo.png') . "\" alt=\"\" />
                        <div class=\"card__header-text\">
                            <h3 class=\"card__title\">" . $isi->judul . "</h3>
                            <span class=\"card__status\">Lebih lanjut <i class='bx bx-chevrons-right'></i></span>
                        </div>
                    </div>
                    <p class=\"card__description\">" . $isi->deskripsi . "</p>
                </div>
            </a>";
        }

        return response($output);
    }
}
