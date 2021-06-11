@extends("layout.adminmaster")

@section("contain")


<center><h1>User Data :-</h1>
<a href="usermaster/create"> Add New Data</a><br><br>
<table border="2" class="table table-hover" height="100%" width="100%">
	<tr>
	<th>User Name</th>
	<th>Email Id</th>
	<th>User Type</th>
	<th>Action</th>
	</tr>
	@foreach($usermaster as $user)
	<tr>
	<td>{{$user->uname}}</td>
	<td>{{$user->uemail}}</td>
	<td>{{$user->utype}}</td>
	
	<td>
	<a href="usermaster/{{$user->id}}/edit">Edit</a> / <a href="usermaster/{{$user->id}}/destroy">Delete</a>
	<!-- <form method="post" action="{{ route('usermaster.destroy', $user->id) }}">
	@method('DELETE')
	@csrf
	<input type="submit" value="Delete" />	
	</form>-->
	</td>
	</tr>
	@endforeach
</table></center>
@stop;