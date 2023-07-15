@extends('layouts.master') 
@section('content') 
    <div class="container"> 
        <h1>Daftar Posisi Pekerjaan</h1> 
        <br> 
        <a href="/posisipekerjaan/create" class="btn btn-primary">+ Tambah Posisi Pekerjaan</a> 
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
                    <th>Nama Posisi</th>  
                    <th>Aksi</th>
                </tr> 
            </thead> 
            <tbody> 
            
                @php $iteration = 1 @endphp 
                @foreach ($PosisiPekerjaanData as $item) 
                
                <tr>
                    <td>{{$iteration++}}</td> 
                    <td>{{$item['nama_posisi']}}</td> 
                    <td>
                        <a href="/posisipekerjaan/edit/{{ $item->id }}" class="btn btn-warning btn-sm">Edit</a> 
                        <form action="/posisipekerjaan/delete/{{ $item->id }}" method="GET" class="d-inline"> 
                            @csrf 
                            @method('delete') 
                            <input type="hidden" name="id" value="{{ $item->id }}"> 
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button> 
                        </form> 
                    </td> 
                    </td>
                    @endforeach 
                </tr>
            </tbody> 
        </table> 
    </div> 
@endsection