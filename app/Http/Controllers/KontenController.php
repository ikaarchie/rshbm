<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class KontenController extends Controller
{
    public function index()
    {
        return view('konten.index');
    }

    public function getData()
    {
        $konten = Konten::latest('id')->paginate(10);

        return view('konten.index')->with('konten', $konten);
    }

    public function save(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'jenis' => 'required',
        //     'judul' => 'required',
        //     'deskripsi' => 'required',
        //     'gambar' => 'required|mimes:png,jpg,jpeg',
        // ]);

        // if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        // // dd($request->all());
        // $photo = $request->file('gambar');
        // $filename = $photo->getClientOriginalName();
        // $path = 'gambar-konten/' . $filename;

        // Storage::disk('public')->put($path, file_get_contents($photo));

        // $data['jenis'] = $request->jenis;
        // $data['judul'] = $request->judul;
        // $data['deskripsi'] = $request->deskripsi;
        // $data['gambar'] = $filename;

        // Konten::create($data);

        // return redirect('/konten')->with('success', 'Dokumen berhasil diupload!');

        $request->validate([
            'jenis' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:png,jpg,jpeg',
        ]);

        $gambar = $request->file('gambar');
        $nama_gambar = $gambar->getClientOriginalName();
        $gambar->move('gambar-konten/', $nama_gambar);

        $data = new Konten();
        $data->jenis = $request->input('jenis');
        $data->judul = $request->input('judul');
        $data->deskripsi = $request->input('deskripsi');
        $data->gambar = $nama_gambar;
        $data->save();

        return redirect('/konten')->with('success', 'Dokumen berhasil diupload!');
    }

    public function update(Request $request, string $id)
    {
        $konten = Konten::find($id);
        $konten->jenis = $request->input('jenis');
        $konten->judul = $request->input('judul');
        $konten->deskripsi = $request->input('deskripsi');

        if ($request->file('gambar')) {
            $lokasi_gambar = 'gambar-konten/' . $konten->gambar;
            if (File::exists($lokasi_gambar)) {
                File::delete($lokasi_gambar);
            }
            $gambar = $request->file('gambar');
            $nama_gambar = $gambar->getClientOriginalName();
            $gambar->move('gambar-konten/', $nama_gambar);
            $konten->gambar = $nama_gambar;
        }

        $konten->update();

        // $konten = Konten::find($id);
        // $konten->jenis = $request->input('jenis');
        // $konten->judul = $request->input('judul');
        // $konten->deskripsi = $request->input('deskripsi');

        // if ($request->gambar != '') {
        //     $path = public_path() . 'gambar-konten/';

        //     //code for remove old gambar
        //     if ($konten->gambar != ''  && $konten->gambar != null) {
        //         $gambar_old = $path . $konten->gambar;
        //         unlink($gambar_old);
        //     }

        //     //upload new gambar
        //     $gambar = $request->gambar;
        //     $gambarname = $gambar->getClientOriginalName();
        //     $gambar->move($path, $gambarname);

        //     //for update in table
        //     $konten->update(['gambar' => $gambarname]);
        // }

        return redirect('/konten')->with('success', 'Dokumen berhasil diubah!');
    }

    public function destroy(string $id)
    {
        $data = Konten::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect('/konten')->with('success', 'Dokumen berhasil dihapus!');
    }
}
