@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit kelas</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{url('jurusan/update')}}">
                        <input type="hidden" name="id" value="{{$jurusan->id}}">
                        {{csrf_field()}}
                       <label>Nama</label>
                        <div class="form-group">
                            <input type="text" name="nama" value="{{$jurusan->nama}}" class="form-control">
                        </div>
                        <label>Jumlah Siswa</label>
                        <div class="form-group">
                            <input type="number" name="jumlah_siswa" value="{{$jurusan->jumlah_siswa}}" class="form-control">
                        </div>
                        <label>Kajur</label>
                        <div class="form-group">
                            <input type="text" name="kajur" value="{{$jurusan->kajur}}" class="form-control">
                        </div>
                        <button class="btn btn-primary" type="text">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
