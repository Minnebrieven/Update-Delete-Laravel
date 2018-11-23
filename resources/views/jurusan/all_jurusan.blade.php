@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All jurusan <a class="btn btn-primary" style="float: right;" href="{{url('jurusan/add_jurusan')}}">Tambah jurusan</a></div>

                <div class="card-body">
                    <table class="table table-hover">
                    	<thead>
                    		<tr>
                    			<th scope="col">Nama</th>
                    			<th scope="col">Jumlah Siswa</th>
                                <th scope="col">Kajur</th>
                    			<th scope="col">Edit</th>
                    			<th scope="col">Delete</th>
                    		</tr>
                    	</thead>
                    	<tbody>
                    		@foreach($jurusan as $row)
                    		<tr>
                    			<td>{{$row->nama}}</td>
                    			<td>{{$row->jumlah_siswa}}</td>
                                <td>{{$row->kajur}}</td>
                    			<td><a href="{{url('jurusan/edit/'.$row->id)}}">Edit</a></td>
                    			<td><a onclick="return confirm('Apakah Anda Yakin ingin menghapus jurusan {{$row->nama}}?')" href="{{url('jurusan/delete/'.$row->id)}}">Delete</a></td>
                    		
                    		</tr>
                    		@endforeach
                    	</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection