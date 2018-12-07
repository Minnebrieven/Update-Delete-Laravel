@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col s12">
            <div class="card">
                <br>
                <div class="card-content">
                    <span class="card-title">Gudang<a href="{{route('add_gudang')}}" class="btn-floating btn-medium waves-effect waves-light red" style="float: right;"><i class="material-icons">add</i></a></span>
                </div>

                <div class="card-content">
                    <table class="highlight responsive-table">
                    	<thead>
                    		<tr>
                    			<th>Alamat</th>
                    			<th>Kapasitas</th>
                    			<th>Picture</th>
                    			<th>Edit</th>
                    			<th>Delete</th>
                    		</tr>
                    	</thead>
                    	<tbody>
                    		@foreach($gudang as $row)
                    		<tr>
                    			<td>{{$row->alamat}}</td>
                    			<td>{{$row->kapasitas}} kg</td>
                    			<td>{{$row->pic}}</td>
                    			<td><a href="{{url('gudang/edit/'.$row->id)}}">Edit</a></td>
                    			<td><a onclick="return confirm('Apakah Anda Yakin ingin menghapus gudang {{$row->alamat}}?')" href="{{url('gudang/delete/'.$row->id)}}">Delete</a></td>
                    		
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