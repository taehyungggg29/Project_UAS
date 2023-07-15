@extends('layouts.master') 
@section('content') 
    <div class="container"> 
        <h1 class="text-center">Edit Posisi Pegawai</h1> 
        <br> 
        <a href="/pegawai" class="btn btn-primary"> 
            < Back</a> 
                @if ($errors->any()) 
                    <div class="alert alert-danger"> 
                        <strong>Whoops!</strong> Ada kesalahan input data! <br><br> 
                        <ul> 
                            @foreach ($errors->all() as $error) 
                                <li>{{ $error }} </li> 
                            @endforeach 
                        </ul> 
                    </div> 
                @endif 
 
                <form action="/posisipekerjaan/update/{{$PosisiPekerjaanData->id}}" method="POST" class="mx-2"> 
                    @csrf 
                    <div class="form-group mt-3"> 
                        <label for="nama_posisi">Nama Posisi</label> 
                        <input type="text" class="form-control" name="nama_posisi" value="{{$PosisiPekerjaanData->nama_posisi}}"> 
                    </div> 
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Simpan</button> 
                    </div> 
                </form> 
 
    </div> 
    @endsection