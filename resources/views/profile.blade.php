<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
<H1>Hello Views</H1>
<p>
Nama : {{$nama}}<br>
Kelas : {{$kelas}}<br>

@foreach($matpel as $row)

	{{$row}}<br>

@endforeach

<br>

@forelse($tugas as $row)
	{{$row}}
@empty
	No Data
@endforelse

<br>

@for($i=0;$i<sizeof($matpel);$i++)
	{{$matpel[$i]}}<br>
@endfor

<br>
</p>
</body>
</html>