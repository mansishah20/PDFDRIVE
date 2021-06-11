@extends("layout.adminmaster")

@section("contain")


<h1>Book Details</h1>
<form action="{{ route('book.store') }}" method="post"  enctype="multipart/form-data">
@csrf
Enter Book Name :-<br>
<input type="text" name="bname"><br><br>
Enter Author Name :-<br>
<input type="text" name="bauthor"><br><br>
Enter Book Pages :-<br>
<input type="text" name="bpage"><br><br>
Enter Book Size :-<br>
<input type="text" name="bsize" ><br><br>
Enter Book Cover :-<br>
<input type="file" name="bcover" ><br><br>
Enter Book Pdf :-<br>
<input type="file" name="bpdf" ><br><br>
Enter Book Language :-<br>
<input type="text" name="blanguage" ><br><br>
Enter Book Publish Date :-<br>
<input type="date" name="bpubdate" ><br><br>
Enter Category:-<br>
<select name="catid" >
	@foreach($category as $c)
					<option value="{{$c->id}}">{{$c->catname}}</option>
					@endforeach
</select>
<br><br>
<input type="submit" value="submit" >
</form>
@stop;