@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Siswa</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{url('siswa/update')}}">
                        <input type="hidden" name="id" value="{{$siswa->id}}">
                        {{csrf_field()}}
                        <label>Nama</label>
                        <div class="form-group">
                            <input type="text" name="nama" value="{{$siswa->nama}}" class="form-control">
                        </div>
                        <label>Kelas</label>
                        <div class="form-group">
                            <select>
                                @foreach($jurusan as $row)
                                <option value="{{$row->id}}">{{$row->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select>
                                @foreach($kelas as $row)
                                <option value="{{$row->id}}">{{$row->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-primary" type="text">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
