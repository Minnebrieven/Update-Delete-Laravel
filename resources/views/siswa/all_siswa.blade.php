@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Siswa <a class="btn btn-primary" style="float: right;" href="{{url('siswa/add_siswa')}}">Tambah siswa</a></div>

                <div class="card-body">
                    <table class="table table-hover">
                    	<thead>
                    		<tr>
                    			<th scope="col">Nama</th>
                    			<th scope="col">Jurusan</th>
                    			<th scope="col">Kelas</th>
                    			<th scope="col">Edit</th>
                    			<th scope="col">Delete</th>
                    		</tr>
                    	</thead>
                    	<tbody>
                    		@foreach($siswa as $row)
                    		<tr>
                    			<td>{{$row->nama}}</td>
                    			<td>{{$row->jurusan_id}}</td>
                    			<td>{{$row->kelas_id}}</td>
                    			<td><a href="{{url('siswa/edit/'.$row->id)}}">Edit</a></td>
                    			<td><a onclick="return confirm('Apakah Anda Yakin ingin menghapus siswa {{$row->nama}}?')" href="{{url('siswa/delete/'.$row->id)}}">Delete</a></td>
                    		
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