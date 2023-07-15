<?php

namespace App\Http\Controllers;

use App\Models\InventarisRestoran;
use Illuminate\Http\Request;

class inventarisRestoranController extends Controller
{
    function index()
    {
        $inventarisData = InventarisRestoran::get();
        return view('backend.inventaris_restoran.index', ['InventarisData' => $inventarisData]);
    }

    function create()
    {
        return view('backend.inventaris_restoran.create');
    }

    function store(Request $request)
    {
        $inventarisData = $request->validate([            
            'nama' => 'required',
            'kode' => 'required',
            'jumlah_barang' => 'required'
        ]);
        
        InventarisRestoran::create($inventarisData);
        
        return redirect()->to('/inventarisrestoran');
    }
    function edit($id)
    {
    $inventarisData = InventarisRestoran::find($id);
    return view('backend.inventaris_restoran.edit', compact('inventarisData')); 
    }

    function update($id, Request $request)
    {
        $validasiinventaris = $request->validate([
            'nama' => 'required',
            'kode' => 'required',
            'jumlah_barang' => 'required'
        ]);

        $inventarisData = InventarisRestoran::find($id);
        $inventarisData->update($validasiinventaris);

        return redirect()->to('/inventarisrestoran');
    }
    
    function delete($id)
    {
        $inventarisData = InventarisRestoran::find($id);
        $inventarisData->delete();
        return redirect()->to('/inventarisrestoran');
    }
}
