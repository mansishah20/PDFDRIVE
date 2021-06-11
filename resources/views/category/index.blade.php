@extends("layout.adminmaster")

@section("contain")


<center><h1>Category Data :-</h1>
<a href="category/create"> Add New Data</a><br><br>
<table border="2" class="table table-hover"  height="70%" width="70%">
	<tr>
	<th>Category Name</th>
	<th>Category Icon </th>
	<th>Action</th>
	</tr>
	@foreach($cat->sortByDesc('id') as $c)
	<tr>
	<td>{{$c->catname}}</td>
	<td>
		<img src="{{'catimages/' . $c->caticon}}" width="100px" height="100px"/>
		</td>
	<td>
	<a href="category/{{$c->id}}/edit">Edit</a> / <a href="category/{{$c->id}}/destroy">Delete</a>
	<!-- <form method="post" action="{{ route('category.destroy', $c->id) }}">
	@method('DELETE')
	@csrf
	<input type="submit" value="Delete" />	
	</form>-->
	</td>
	</tr>
	@endforeach
</table></center>

@stop;
