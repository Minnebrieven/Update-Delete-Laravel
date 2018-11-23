@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah kelas</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{url('kelas/save')}}">
                        {{csrf_field()}}
                        <label>Nama</label>
                        <div class="form-group">
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <label>Jurusan</label>
                        <div class="form-group">
                            <select>
                                @foreach($jurusan as $row)
                                <option value="{{$row->id}}">{{$row->name}}</option>
                                @endforeach

                            </select>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
