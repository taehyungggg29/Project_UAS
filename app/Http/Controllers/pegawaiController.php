<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use App\Models\PosisiPekerjaan;

class pegawaiController extends Controller
{
    function index()
    {
        $PegawaiData = Pegawai::get();
        return view('backend.pegawai.index', ['PegawaiData' => $PegawaiData]);
    }

    
    function create()
    {
        $posisiPekerjaan = posisiPekerjaan::get();
        return view('backend.pegawai.create', compact('posisiPekerjaan'));

    }

    function store(Request $request)
    {
        $PegawaiData = $request->validate([            
            'nama' => 'required',
            'nip' => 'required',
            'posisi_pekerjaan_id' => 'required',
            'kontak' => 'required',
            'alamat' => 'required'
        ]);
        
        Pegawai::create($PegawaiData);
        
        return redirect()->to('/pegawai');
    }
    function edit($id)
    {
    
    $posisiPekerjaan = posisiPekerjaan::get();
    $PegawaiData = Pegawai::find($id);
    return view('backend.pegawai.edit', compact('PegawaiData','posisiPekerjaan')); 
    }

    function update($id, Request $request)
    {
        $validasipegawai = $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'posisi_pekerjaan_id' => 'required',
            'kontak' => 'required',
            'alamat' => 'required'  
        ]);

        $PegawaiData = Pegawai::find($id);
        $PegawaiData->update($validasipegawai);

        return redirect()->to('/pegawai');
    }
    
    function delete($id)
    {
        $PegawaiData = Pegawai::find($id);
        $PegawaiData->delete();
        return redirect()->to('/pegawai')->with('success','Data Berhasil Di Hapus');
    }
}
