@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col s12">
            <div class="card">
                <br>
                <div class="card-content">
                    <span class="card-title">Barang<a href="{{route('add_barang')}}" class="btn-floating btn-medium waves-effect waves-light red" style="float: right;"><i class="material-icons">add</i></a></span>

                <div class="card-content">
                    <table class="highlight responsive-table">
                    	<thead>
                    		<tr>
                    			<th>Gudang</th>
                    			<th>Nama</th>
                    			<th>Berat</th>
                    			<th>Edit</th>
                    			<th>Delete</th>
                    		</tr>
                    	</thead>
                    	<tbody>
                    		@foreach($barang as $row)
                    		<tr>
                    			<td>{{$row->gudang_id}} - {{$row->gudang->alamat}}</td>
                    			<td>{{$row->nama}}</td>
                    			<td>{{$row->berat}} kg</td>
                    			<td><a href="{{url('barang/edit/'.$row->id)}}">Edit</a></td>
                    			<td><a onclick="return confirm('Apakah Anda Yakin ingin menghapus barang {{$row->nama}}?')" href="{{url('barang/delete/'.$row->id)}}">Delete</a></td>
                    		
                    		</tr>
                    		@endforeach
                    	</tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection