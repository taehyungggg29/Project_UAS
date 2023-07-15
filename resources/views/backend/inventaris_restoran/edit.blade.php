@extends('layouts.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Inventaris Restoran</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Edit Data Inventaris Restoran</li>
            </ol>
            <a href="/inventarisData" class="btn btn-warning">kembali</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/inventarisrestoran/update/{{$inventarisData->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{$inventarisData->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="">Kode</label>
                        <input type="text" class="form-control" name="kode" value="{{$inventarisData->kode}}">
                    </div>
                    <div class="form-group">
                        <label for="">jumlah Barang</label>
                        <input type="text" class="form-control" name="jumlah_barang" value="{{$inventarisData->nama}}">
                    </div>
                    <div class="form-group mt-3">
                        <button class="form-control btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection