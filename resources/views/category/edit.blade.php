@extends("layout.adminmaster")

@section("contain")

<h1> Edit Category Details</h1>
<form action="{{ route('category.update', $cat->id) }}" method="post">
@method('PATCH')
@csrf
Enter Category Name :-<br>
<input type="text" name="cat_name" value="{{$cat->catname}}"><br><br>
Enter Category Icon :-<br>
<input type="file" name="cat_icon" value="{{$cat->caticon}}"><br><br>

<input type="submit" value="submit" >
</form>
@stop;