@extends("layout.adminmaster")

@section("contain")


<h1>User Details</h1>
<form action="{{ route('usermaster.store') }}" method="post">
@csrf
Enter User Name :-<br>
<input type="text" name="uname"><br><br>
Enter Email Id :-<br>
<input type="text" name="uemail"><br><br>
Enter Password :-<br>
<input type="password" name="upassword"><br><br>
Confirm Password :-<br>
<input type="passeord" name="cpassword"><br><br>
User Type :-<br>
<input type="text" name="utype" ><br><br>

<br><br>
<input type="submit" value="submit" >
</form>
@stop;