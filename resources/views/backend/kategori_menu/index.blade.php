@extends('layouts.master') 
@section('content') 
    <div class="container"> 
        <h1>Daftar Kategori Menu</h1> 
        <br> 
        <a href="/kategorimenu/create" class="btn btn-primary">+ Tambah Kategori Menu</a> 
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
                    <th>Nama Kategori</th>  
                    <th>Aksi</th>
                </tr> 
            </thead> 
            <tbody> 
                @php $iteration = 1 @endphp 
                @foreach ($KategoriMenuData as $item) 
                
                <tr> 
                    <td>{{$iteration++}}</td> 
                    <td>{{$item['nama_kategori']}}</td>
                    <td> 
                        <a href="/kategorimenu/edit/{{ $item->id }}" class="btn btn-warning btn-sm">Edit</a> 
                        <form action="/kategorimenu/delete/{{ $item->id }}" method="GET" class="d-inline"> 
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