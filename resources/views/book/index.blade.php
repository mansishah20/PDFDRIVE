@extends("layout.adminmaster")

@section("contain")


<center><h1>Book Data :-</h1>
<a href="book/create"> Add New Data</a><br><br>
<table border="2" class="table table-hover" height="100%" width="100%">
	<tr>
	<th>Book Name</th>
	<th>Author Name</th>
	<th>Pages</th>
	<th>Size</th>
	<th>Cover</th>
	<th>Book Pdf</th>
	<th>Language</th>
	<th>Publish Date</th>
	<th>Category Id</th>
	<th>Action</th>
	</tr>
	@foreach($book->sortByDesc('id') as $b)
	<tr>
	<td>{{$b->bname}}</td>
	<td>{{$b->bauthor}}</td>
	<td>{{$b->bpage}}</td>
	<td>{{$b->bsize}}</td>
	<td>
		<img src="{{'bookimages/' . $b->bcover}}" width="100px" height="100px"/>
	</td>
	<td>
		<a target="_blank" href="{{'bookpdf/' . $b->bpdf}}" > View </a>
	</td>
	
	<td>{{$b->blanguage}}</td>
	<td>{{$b->bpubdate}}</td>
	<td>{{$b->catname}}</td>
	<td>
	<a href="book/{{$b->id}}/edit">Edit</a> / <a href="book/{{$b->id}}/destroy">Delete</a>
	<!-- <form method="post" action="{{ route('book.destroy', $b->id) }}">
	@method('DELETE')
	@csrf
	<input type="submit" value="Delete" />	
	</form>-->
	</td>
	</tr>
	@endforeach
</table></center>
@stop;