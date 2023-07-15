@extends('layouts.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Kategori Menu</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Edit Data Kategori Menu</li>
            </ol>
            <a href="/kategorimenu" class="btn btn-warning">kembali</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/kategorimenu/update/{{$KategoriMenuData->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Kategori Menu</label>
                        <input type="text" class="form-control" name="nama_kategori" value="{{$KategoriMenuData->nama}}">
                    </div>
                    <div class="form-group mt-3">
                        <button class="form-control btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection