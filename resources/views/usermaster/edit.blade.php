@extends("layout.adminmaster")

@section("contain")


<h1> Edit User Details</h1>
<form action="{{ route('usermaster.update', $user->id) }}" method="post">
@method('PATCH')
@csrf
Enter User Name :-<br>
<input type="text" name="uname" value="{{$user->uname}}"><br><br>
Enter Email Id :-<br>
<input type="text" name="uemail" value="{{$user->uemail}}"><br><br>
Enter Password :-<br>
<input type="password" name="upassword" value="{{$user->upassword}}"><br><br>
Confirm Password :-<br>
<input type="password" name="cpassword" value="{{$user->upassword}}"><br><br>
User Type :-<br>
<input type="text" name="utype" value="{{$user->utype}}"><br><br>

<input type="submit" value="submit" >
</form>
@stop;