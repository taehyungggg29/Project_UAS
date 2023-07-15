@extends('layouts.master') 
@section('content') 
    <div class="container"> 
        <h1>Daftar Inventaris Restoran</h1> 
        <br> 
        <a href="/inventarisrestoran/create" class="btn btn-primary">+ Tambah Inventaris Restoran</a> 
        <hr> 
 
        @if (session('success')) 
            <div class="alert alert-success"> 
                {{ session('success') }} 
            </div> 
        @endif 
 
        <table class="table table-bordered table-striped"> 
            <thead> 
                <tr> 
                    <th>Id</th> 
                    <th>Nama</th> 
                    <th>Kode</th> 
                    <th>Jumlah Barang</th> 
                    <th>Aksi</th>
                </tr> 
            </thead> 
            <tbody> 
                @php $iteration = 1 @endphp 
                @foreach ($InventarisData as $item) 
                
                <tr> 
                    <td>{{$iteration++}}</td> 
                    <td>{{$item['nama']}}</td> 
                    <td>{{$item['kode']}}</td> 
                    <td>{{$item['jumlah_barang']}}</td> 
                    <td> 
                        <a href="/inventarisrestoran/edit/{{ $item->id }}" class="btn btn-warning btn-sm">Edit</a> 
                        <form action="/inventarisrestoran/delete/{{ $item->id }}" method="GET" class="d-inline"> 
                            @csrf 
                            @method('delete') 
                            <input type="hidden" name="id" value="{{ $item->id }}"> 
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button> 
                        </form> 
                    </td> 
                    @endforeach 
            </tbody> 
        </table> 
    </div> 
@endsection