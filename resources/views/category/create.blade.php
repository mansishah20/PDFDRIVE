@extends("layout.adminmaster")

@section("contain")


<h1>Category Details</h1>
<form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
@csrf
Enter Category Name :-<br>
<input type="text" name="cat_name"><br><br>
Enter Category Icon :-<br>
<input type="file" name="cat_icon"><br><br>

<input type="submit" value="submit" >
</form>
@stop;