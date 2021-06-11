<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0px">
<div class="row">
	<div class="col-md-6  text-right">

		<img src="{{'http://127.0.0.1:8000/catimages/' . 'logo.png'}}" class="img-circle" width="100px" height="100px">
	</div>
	
	<div class="col-md-6 text-left">
  <br>
	<h1 style="color:red"><b>PDF DRIVE</b> </h1><br>

	</div>
 </div>
 <br><br>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/category">Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/book">Books</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="/usermaster">Users</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="/ordermaster">Orders</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="/download">Downloads</a>
      </li>
      
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
   
    <div class="col-sm-12">
    <br>
			@yield("contain")
			<br><br><br>
	  </div>
  </div>
</div>
<br><br><br><br><br><br><br>
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>
