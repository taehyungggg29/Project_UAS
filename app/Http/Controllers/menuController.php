<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class menuController extends Controller
{
    function index()
    {
        $MenuData = Menu::get();
        return view('backend.menu.index', ['MenuData' => $MenuData]);
    }

    function create()
    {
        return view('backend.menu.create');
    }

    function store(Request $request)
    {
        $MenuData = $request->validate([            
            'nama_menu' => 'required',
            'harga' => 'required',
            'kontak' => 'required',
            'kategori_menu_id' => 'required' 
        ]);

        Menu::create($MenuData);
        
        return redirect()->to('/menu');
    }
    function edit($id)
    {
    
    $MenuData = Menu::find($id);
    return view('backend.menu.edit', compact('MenuData')); 
    }

    function update($id, Request $request)
    {
        $validasiMenu = $request->validate([
            'nama_menu' => 'required',
            'harga' => 'required',
            'kontak' => 'required',
            'kategori_menu_id' => 'required' 
        ]);

        $MenuData = Menu::find($id);
        $MenuData->update($validasiMenu);

        return redirect()->to('/menu');
    }
    
    function delete($id)
    {
        $MenuData = Menu::find($id);
        $MenuData->delete();
        return redirect()->to('/menu');
    }
}
