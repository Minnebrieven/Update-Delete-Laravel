@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="row">
                <div class="card"><br><span class="card-title" style="margin: 30px">Edit Gudang</span>

                <div class="card-content">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{route('update_gudang')}}">
                        <input type="hidden" name="id" value="{{$gudang->id}}">
                        {{csrf_field()}}
                        <div class="input-field col s12">
                            <input name="alamat" value="{{$gudang->alamat}}" id="alamat" type="text" class="validate" required>
                            <label for="alamat">Alamat</label>
                        </div>
                        <div class="input-field col s12">
                            <input name="kapasitas" value="{{$gudang->kapasitas}}" id="kapasitas" type="number" class="validate" required>
                            <label for="kapasitas">Kapasitas</label>
                        </div>
                        <div>
                         <div class="input-field col s12">
                            <label>Picture</label><br><br>
                            <input name="pic" type="file" class="validate" value="{{$gudang->pic}}">
                        </div>
                        <br><br>
                        </div>
                        <button class="waves-effect waves-light btn" type="text"><i class="material-icons right">send</i>Update</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
