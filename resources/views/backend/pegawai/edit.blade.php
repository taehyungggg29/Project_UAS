@extends('layouts.master') 
@section('content') 
    <div class="container"> 
        <h1 class="text-center">Edit Pegawai</h1> 
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
 
                <form action="/pegawai/update/{{$PegawaiData->id}}" method="POST" class="mx-2"> 
                    @csrf 
                    <div class="form-group mt-3"> 
                        <label for="nama">Nama</label> 
                        <input type="text" class="form-control" name="nama" value="{{$PegawaiData->nama}}"> 
                    </div> 
 
                    <div class="form-group mt-3"> 
                        <label for="nip">Nip</label> 
                        <input type="text" class="form-control" name="nip" value="{{$PegawaiData->nip}}"> 
                    </div> 
                    <div class="form-group mt-3"> 
                        <label for="posisi_pekerjaan_id">Posisi Pekerjaan</label> 
                       <select name="posisi_pekerjaan_id" class="form-control">
                        @foreach($posisiPekerjaan as $posisiPekerjaan)
                        <option value="{{$posisiPekerjaan->id}}">{{$posisiPekerjaan->nama_posisi}}</option>
                        @endforeach
                       </select>
                    </div> 

                    <div class="form-group mt-3"> 
                        <label for="kontak">Kontak</label> 
                        <input type="text" class="form-control" name="kontak" value="{{$PegawaiData->kontak}}"> 
                    </div> 
 
                    <div class="form-group mt-3"> 
                        <label for="alamat">Alamat</label> 
                        <textarea class="form-control" name="alamat" value="{{$PegawaiData->alamat}}""></textarea> 
                    </div> 
 
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Simpan</button> 
                    </div> 
                </form> 
 
    </div> 
    @endsection