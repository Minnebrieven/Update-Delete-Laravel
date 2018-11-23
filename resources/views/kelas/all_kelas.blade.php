@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Kelas <a class="btn btn-primary" style="float: right;" href="{{url('kelas/add_kelas')}}">Tambah Kelas</a></div>

                <div class="card-body">
                    <table class="table table-hover">
                    	<thead>
                    		<tr>
                    			<th scope="col">Nama</th>
                    			<th scope="col">Jurusan</th>
                    			<th scope="col">Edit</th>
                    			<th scope="col">Delete</th>
                    		</tr>
                    	</thead>
                    	<tbody>
                    		@foreach($kelas as $row)
                    		<tr>
                    			<td>{{$row->nama}}</td>
                    			<td>{{$row->jurusan_id}}</td>
                    			<td><a href="{{url('kelas/edit/'.$row->id)}}">Edit</a></td>
                    			<td><a onclick="return confirm('Apakah Anda Yakin ingin menghapus kelas {{$row->nama}}?')" href="{{url('kelas/delete/'.$row->id)}}">Delete</a></td>
                    		
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