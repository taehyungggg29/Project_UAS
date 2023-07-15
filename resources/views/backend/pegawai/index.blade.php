@extends('layouts.master') 
@section('content') 
    <div class="container"> 
        <h1>Daftar Pegawai</h1> 
        <br> 
        <a href="/pegawai/create" class="btn btn-primary">+ Tambah Pegawai</a> 
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
                    <th>Nip</th> 
                    <th>Posisi Pekerjaan</th> 
                    <th>Kontak</th> 
                    <th>Alamat</th> 
                    <th>Aksi</th>
                </tr> 
            </thead> 
            <tbody> 
                @php $iteration = 1 @endphp 
                @foreach ($PegawaiData as $item) 
                
                <tr> 
                    <td>{{$iteration++}}</td> 
                    <td>{{$item['nama']}}</td> 
                    <td>{{$item['nip']}}</td> 
                    <td>{{$item['posisi_pekerjaan_id']}}</td> 
                    <td>{{$item['kontak']}}</td> 
                    <td>{{$item['alamat']}}</td> 
                    <td> 
                        <a href="/pegawai/edit/{{ $item->id }}" class="btn btn-warning btn-sm">Edit</a> 
                        <form action="/pegawai/delete/{{ $item->id }}" method="GET" class="d-inline"> 
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