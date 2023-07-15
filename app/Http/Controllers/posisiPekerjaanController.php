<?php

namespace App\Http\Controllers;

use App\Models\PosisiPekerjaan;
use Illuminate\Http\Request;

class posisiPekerjaanController extends Controller
{
    function index()
    {
        $PosisiPekerjaanData = PosisiPekerjaan::get();
        return view('backend.posisipekerjaan.index', ['PosisiPekerjaanData' => $PosisiPekerjaanData]);
    }

    function create()
    {
        return view('backend.posisipekerjaan.create');
    }

    function store(Request $request)
    {
        $PosisiPekerjaanData = $request->validate([
            'nama_posisi' => 'required'
        ]);
        
        PosisiPekerjaan::create($PosisiPekerjaanData);
        
        return redirect()->to('/posisipekerjaan');
    }
    function edit($id)
    {
    $PosisiPekerjaanData = PosisiPekerjaan::find($id);
    return view('backend.posisipekerjaan.edit', compact('PosisiPekerjaanData')); 
    }

    function update($id, Request $request)
    {
        $validasiPosisiPekerjaan = $request->validate([
            'nama_posisi' => 'required'  
        ]);

        $PosisiPekerjaanData = PosisiPekerjaan::find($id);
        $PosisiPekerjaanData->update($validasiPosisiPekerjaan);

        return redirect()->to('/posisipekerjaan');
    }
    
    function delete($id)
    {
        $PosisiPekerjaanData = PosisiPekerjaan::find($id);
        $PosisiPekerjaanData->delete();
        return redirect()->to('/posisipekerjaan');
    }
}
