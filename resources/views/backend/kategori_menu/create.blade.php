@extends('layouts.master') 
@section('content') 
    <div class="container"> 
        <h1 class="text-center">Tambah Kategori Menu</h1> 
        <br> 
        <a href="/kategorimenu" class="btn btn-primary"> 
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
 
                <form action="/kategorimenu/simpan-data" method="post" class="mx-2"> 
                    @csrf 
                    <div class="form-group mt-3"> 
                        <label for="nama">Nama Kategori Menu</label> 
                        <input type="text" class="form-control" name="nama_kategori" value=""> 
                    </div> 
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Simpan</button> 
                    </div> 
                </form> 
 
    </div> 
    @endsection