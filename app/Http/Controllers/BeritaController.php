<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    //
    public function index()
    {
        $beritas = Berita::paginate(6);
        
        return view('page.berita', compact('beritas'));
    }


    public function show($id)

    {
        $berita = Berita::findOrfail($id);

        return view('page.berita-detail', compact('berita'));
    }

}
