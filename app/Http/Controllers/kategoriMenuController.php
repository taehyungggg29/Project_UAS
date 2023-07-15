<?php

namespace App\Http\Controllers;

use App\Models\KategoriMenu;
use Illuminate\Http\Request;

class kategoriMenuController extends Controller
{
    function index()
    {
        $KategoriMenuData = KategoriMenu::get();
        return view('backend.kategori_menu.index', ['KategoriMenuData' => $KategoriMenuData]);
    }

    function create()
    {
        return view('backend.kategori_menu.create');
    }

    function store(Request $request)
    {
        $KategoriMenuData = $request->validate([            
            'nama_kategori' => 'required' 
        ]);
        
        
        KategoriMenu::create($KategoriMenuData);
        
        return redirect()->to('/kategorimenu');
    }
    function edit($id)
    {
    $KategoriMenuData = KategoriMenu::find($id);
    return view('backend.kategori_menu.edit', compact('KategoriMenuData')); 
    }

    function update($id, Request $request)
    {
        $validasikategori = $request->validate([
            'nama_kategori' => 'required'
        ]);

        $KategoriMenuData = KategoriMenu::find($id);
        $KategoriMenuData->update($validasikategori);

        return redirect()->to('/kategorimenu');
    }
    
    function delete($id)
    {
        $KategoriMenuData = KategoriMenu::find($id);
        $KategoriMenuData->delete();
        return redirect()->to('/kategorimenu');
    }
}
