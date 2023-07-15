@extends('layouts.master') 
@section('content') 
    <div class="container"> 
        <h1 class="text-center">Tambah Inventaris Restoran</h1> 
        <br> 
        <a href="/inventarisData" class="btn btn-primary"> 
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
 
                <form action="/inventarisrestoran/simpan-data" method="post" class="mx-2"> 
                    @csrf 
                    <div class="form-group mt-3"> 
                        <label for="nama">Nama</label> 
                        <input type="text" class="form-control" name="nama" value=""> 
                    </div> 
                    <div class="form-group mt-3"> 
                        <label for="nama">Kode</label> 
                        <input type="text" class="form-control" name="kode" value=""> 
                    </div> 
                    <div class="form-group mt-3"> 
                        <label for="nama">Jumlah Barang</label> 
                        <input type="text" class="form-control" name="jumlah_barang" value=""> 
                    </div> 
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Simpan</button> 
                    </div> 
                </form> 
 
    </div> 
    @endsection