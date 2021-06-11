@extends("layout.adminmaster")

@section("contain")


<center><h1>Download's Data :-</h1><br><br>
<table border="2" class="table table-hover" height="70%" width="70%">
	<tr>
	<th>Book Id</th>
	<th>User Id</th>
	</tr>
	@foreach($download as $down)
	<tr>
	<td>{{$down->bname}}</td>
    <td>{{$down->uname}}</td>
	</tr>
	@endforeach
</table></center>
@stop;