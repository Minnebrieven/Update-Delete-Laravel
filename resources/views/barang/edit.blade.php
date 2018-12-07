@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="row">
                <div class="card">
                <br><span class="card-title" style="margin: 30px;">Edit Barang</span>
                <div class="card-content">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{route('update_barang')}}">
                        <input type="hidden" name="id" value="{{$barang->id}}">
                        {{csrf_field()}}
                        <div class="col s12">
                            <label>Gudang</label>
                            <select name="gudang_id" class="browser-default">
                               @foreach($gudang as $row)
                              <option value="{{$row->id}}">{{$row->alamat}}</option>
                              @endforeach
                            </select>
                        </div>
                        <div class="input-field col s12">
                                <input name="nama" id="nama" type="text" value="{{$barang->nama}}" class="validate" required>
                                <label for="nama">Nama</label>
                        </div>
                        <div class="input-field col s12">
                                <input name="berat" id="berat" type="number" value="{{$barang->berat}}" class="validate" required>
                                <label for="berat">Berat</label>
                        </div>
                        <button class="btn btn-primary" type="text"><i class="material-icons right">send</i>Update</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
