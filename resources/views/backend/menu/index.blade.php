@extends('layouts.master') 
@section('content') 
    <div class="container"> 
        <h1>Daftar Menu</h1> 
        <br> 
        <a href="/menu/create" class="btn btn-primary">+ Tambah Menu</a> 
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
                    <th>Harga</th> 
                    <th>Kontak</th> 
                    <th>Kategori Menu</th> 
                    <th>Aksi</th>
                </tr> 
            </thead> 
            <tbody> 
                @php $iteration = 1 @endphp 
                @foreach ($MenuData as $item) 
                
                <tr> 
                    <td>{{$iteration++}}</td> 
                    <td>{{$item['nama']}}</td> 
                    <td>{{$item['harga']}}</td> 
                    <td>{{$item['kontak']}}</td> 
                    <td>{{$item['kategori_menu_id']}}</td>  
                    <td> 
                        <a href="/menu/edit/{{ $item->id }}" class="btn btn-warning btn-sm">Edit</a> 
                        <form action="/menu" method="POST" class="d-inline"> 
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