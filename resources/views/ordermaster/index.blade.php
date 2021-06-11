@extends("layout.adminmaster")

@section("contain")


<center><h1>Order Data :-</h1><br><br>
<table border="2" class="table table-hover" height="100%" width="100%">
	<tr>
	<th>Book Id</th>
	<th>User Id</th>
	<th>User Email</th>
	</tr>
	@foreach($order as $ord)
	<tr>
	<td>{{$ord->bname}}</td>
    <td>{{$ord->uname}}</td>
    <td>{{$ord->email}}</td>
	</tr>
	@endforeach
</table></center>
@stop;