@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="row">
                <div class="card">
                    <br>
                    <div class=""><span class="card-title" style="margin:30px" ;">Tambah Gudang</span></div>

                    <div class="card-content">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{route('save_gudang')}}">
                            {{csrf_field()}}
                            <div class="input-field col s12">
                                <input name="alamat" id="alamat" type="text" class="validate" required>
                                <label for="alamat">Alamat</label>
                            </div>
                            <div class="input-field col s12">
                                <input name="kapasitas" id="kapasitas" type="number" class="validate" required>
                                <label for="kapasitas">Kapasitas</label>
                            </div>
                            <div class="input-field col s12">
                                <label>Picture</label><br><br>
                                <input name="pic" type="file" class="validate">
                            </div>
                            <br><br>
                            <button class="waves-effect waves-light btn" type="submit"><i class="material-icons right">send</i>Submit</button>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
