<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create an Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!--<link href="favicon.ico" rel="shortcut icon"/>-->

<style>
  
body{
	background-color:#e9ebee;
	position:absolute;
	overflow:auto;
    width:100%;
    -webkit-font-smoothing: antialiased;
  font: normal 16px Roboto,arial,sans-serif;
  font-family: 'Dancing Script', cursive!important;

}
#logo-img{
	padding-top:0px;
	height:27px;
}

#top-menu-bg{
	background-color:#fff;
	height:auto;
	width:100%;
	position:fixed;
	z-index:11;
	
}

#seabtn{
	background-color:DodgerBlue;
	margin-left:10px;
	
}

#div1{
	margin-top:70px;
}

.form-inline{
	padding-top:10px;
}


h2{width:auto;color:#12a70c;margin:5px 5px 5px 0px;}
div{display:block;}


#f1 {
  border: 2px solid black;
  padding:20px 10px 20px 10px;
  margin:50px 50px 50px 50px;
  width:100%;
  border-radius: 15px;
  box-shadow:0 1px 0 #cfcfcf;
  background:transparent!important;
    font-size: 18px!important;

}

input[type=text], input[type=password] {
  width: 25%;
  padding: 5px 5px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid black;
  box-sizing: border-box;
  border-radius: 10px;
}

input[type=submit]{
  background-color:lightgreen;
  color: black;
  font-weight:bold;
  font-size:14px;
  padding: 14px 20px;
  margin: 8px 0;
  
}

input[type=submit]:hover {
  opacity: 0.8;
}

span.psw {
  float: right;
  padding-top: 16px;
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}




    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color:#e9ebee;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #fff;
      color: #000;
      padding: 15px;
	  width:auto;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    
	}
	
	@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<div id="top-menu-bg">
<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="http://127.0.0.1:8000/img/logo-1.png" id="logo-img" border="0" title="" alt="" /></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
		<li><form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="seabtn">Search</button>
  </form></li>
      </ul>

    </div>
  </div>
  
</nav>
</div>

<div id="div1">

<div class="container-fluid">    
    
<div class="row">
  <div class="col-md-4">

  </div>
  <div class="col-md-4">
     <center>	<h2>Create an Account</h2></center><hr/>
    <form action="{{ route('usermaster.store') }}" method="post" id="f1">
    @csrf
    <div class="container">
    <b>Enter Username :-</b><br>
    <input type="text" name="uname" required><br><br>
	  <b>Enter Email-id :-</b><br>
    <input type="text" name="uemail" required><br><br>
    <b>Enter Password :-</b><br>
    <input type="password" name="upassword" required><br><br>
	  <b>Confirm Password :-</b><br>
    <input type="password" name="cpassword" required><br><br>
      <input type="checkbox" name="remember" required> Remember me
     <br><br> 
    <input type="submit" value="Register" id="submit"><br>
    </div>
  
    </form>

  </div>
  <div class="col-md-4">

  </div>
</div>
</div>
</div>

<footer class="container-fluid text-center">
  <div class="footer" id="footer">
		<div class="row">
		<div class="col-md-12">
		<div class="row">
			<div class="footer-section col-md-3" style="text-align:center" id="footer-logo">
				<a href="/">
					<img src="http://127.0.0.1:8000/img/logo-1.png" width="175" border="0" title="PDF Search Engine" alt="PDF Search Engine" style="padding-top: 45px;" />
				</a>
			</div>
				<div class="footer-section col-md-3">
				<div class="footer-title" title="0.0142 / 30-12-2020 11:18:51 / 195.201.87.181">
					<p style="font-size:20px;color:grey;">Company</p>
				</div> 
					<br />
					<a href="/home/about" rel="nofollow">About</a><br />
					<a href="/app">Mobile App</a><br />
					<a href="/home/terms" rel="nofollow">Terms & Privacy</a><br />
				</div>
				
			<div class="footer-section col-md-3">
				<div class="footer-title"><p style="font-size:20px;color:grey;">Social</p></div><br />
					<a href="https://twitter.com/pdfdrive" target="_blank">Twitter</a><br />
					<a href="https://www.facebook.com/pdfdrive" target="_blank">Facebook</a><br />
					<a href="/donate">Donate ♥</a><br />
			</div>
				
			<div class="footer-section col-md-3">
				<div class="footer-title"><p style="font-size:20px;color:grey;">Help</p></div><br />
				<a href="/home/contact" rel="nofollow">Contact us</a><br />
				<a href="/home/contact" rel="nofollow">Feedback</a><br />
				<a href="/home/dmca" rel="nofollow">DMCA & Copyright</a><br />
			</div>
		</div>
		</div>
		</div>
		</div>

  
</footer>
</body>
</html>
