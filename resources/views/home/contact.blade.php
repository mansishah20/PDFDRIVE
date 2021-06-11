<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Us-PDF Drive</title>
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
	height:30px;
}
#logo-img2{
	padding-top:0px;
	height:70px;
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


h2,h1{width:auto;color:#12a70c;margin:5px 5px 5px 0px;}
div{display:block;}

#f2 {
  border: 2px solid black;
  padding:20px 0px 50px 20px;
  margin:100px 0px 100px 50px;
  width:100%;
  border-radius: 0px;
  box-shadow:0 1px 0 #cfcfcf;
  background:transparent!important;
    font-size: 18px!important;

}

input[type=text], input[type=password],textarea {
  width: 50%;
  padding: 5px 5px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid black;
  box-sizing: border-box;
  border-radius: 10px;
}
textarea {
  width: 70%;
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
  font-size:16px;
  padding: 5px 5px;
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
        <li class="active"><a href="index">Home</a></li>
        <li><a href="about">About</a></li>
		<li><form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="seabtn">Search</button>
  </form></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
		
        <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
  
</nav>
</div>

<div class="row">
    <div class="col-md-6">
    <br>
        <form action="{{ route('contact.store','') }}" method="post"id="f2">
        @csrf

        <b><h1 style="padding-left:100px;">Contact Us</h1></b><hr><br>
            Enter Full Name :-<br>
            <input type="text" name="conname" required><br>
            Enter Email Address :-<br>
            <input type="text" name="conemail" required><br>
            Enter Contact No. :-<br>
            <input type="text" name="contact" required><br>
            Message :-<br>
            <textarea name="message" name="message" cols="30" rows="4" required></textarea><br>
            <input type="submit" style="margin-left:100px;" value="Submit" id="submit">

        </form>

    </div>

    <div class="col-md-6 text-center">
    <br><br><br><br><br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.0527182647775!2d71.62901224953221!3d22.726281832968493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395941a4ddc51fff%3A0xd6a1b80d526b969d!2sShiv%20Computers!5e0!3m2!1sen!2sin!4v1621235373933!5m2!1sen!2sin" width="500" height="650" style="border:0;" allowfullscreen="" loading="lazy" class="d-flex align-items-stretch"></iframe>
    </div>
    
</div>

<div class="row">
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
                  <img src="http://127.0.0.1:8000/img/location.png" id="logo-img2" border="0" title="" class="img-circle" alt="" />
			        		</div>
			        		<div class="text">
				            <br><p><span>Address : </span><p style="color:blue;"> Shiv Computer,<br> Ajay Arcade Complex,<br>Surendranagar-363002</p></p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
                  <img src="http://127.0.0.1:8000/img/phone.png" id="logo-img2" border="0" title="" class="img-circle" alt="" />
			        		</div>
			        		<div class="text">
                  <br><br><p><span>Phone:</span> <a href="tel://7434070542">+91 7434070542</a></p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
                  <img src="http://127.0.0.1:8000/img/mail.png" id="logo-img2" border="0" title="" class="img-circle" alt="" />
			        		</div>
			        		<div class="text">
                  <br><br><p><span>Email:</span> <a href="mailto:pshah2806@gmail.com">princyshah2806@gmail.com</a></p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
                  <img src="http://127.0.0.1:8000/img/website.png" id="logo-img2" border="0" title="" class="img-circle" alt="" />
			        		</div>
			        		<div class="text">
                  <br><br><p><span>Website</span> <a href="https://www.pdfdrive.com/" target="_blank">pdfdrive.com</a></p>
				          </div>
			          </div>
							</div>
						</div>
</body>
</html>