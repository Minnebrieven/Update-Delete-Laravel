@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card">
                <br>
                <span class="card-title" style="margin: 30px;">Tambah Barang</span>

                <div class="card-content">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{route('save_barang')}}">
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
                                <input name="nama" id="nama" type="text" class="validate" required>
                                <label for="nama">Nama</label>
                        </div>
                        <div class="input-field col s12">
                                <input name="berat" id="berat" type="number" class="validate" required>
                                <label for="berat">Berat</label>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
