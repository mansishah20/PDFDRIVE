@extends("layout.adminmaster")

@section("contain")


<h1> Edit Book Details</h1>
<form action="{{ route('book.update', $book->id) }}" method="post">
@method('PATCH')
@csrf
Enter Book Name :-<br>
<input type="text" name="bname" value="{{$book->bname}}"><br><br>
Enter Author Name :-<br>
<input type="text" name="bauthor" value="{{$book->bauthor}}"><br><br>
Enter Book Pages :-<br>
<input type="text" name="bpage" value="{{$book->bpage}}"><br><br>
Enter Book Size :-<br>
<input type="text" name="bsize" value="{{$book->bsize}}"><br><br>
Enter Book Cover :-<br>
<input type="file" name="bcover" value="{{$book->bcover}}"><br><br>
Enter Book Pdf :-<br>
<input type="file" name="bpdf" value="{{$book->bpdf}}"><br><br>

Enter Book Language :-<br>
<input type="text" name="blanguage" value="{{$book->blanguage}}" ><br><br>
Enter Book Publish Date :-<br>
<input type="date" name="bpubdate" value="{{$book->bpubdate}}" ><br><br>
Enter Category Id:-<br>
<input type="text" name="catid" value="{{$book->catid}}" ><br><br>
<input type="submit" value="submit" >
</form>
@stop;