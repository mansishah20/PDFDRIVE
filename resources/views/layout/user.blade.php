<!DOCTYPE html>
<html lang="en">
<head>
  <title>PDF DRIVE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="favicon.ico" rel="shortcut icon"/>

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
.float-right{
	float:right;
	width:100%;
	height:100%
}

#div1{
	margin-top:70px;
}

.form-inline{
	padding-top:10px;
}

#row1{
	background-color:white;
	padding-left:5px;
	margin-top:15px;
	height:auto;
	width:auto;
	font-size:12px;
}
#img1{
	vertical-align: middle;
	height:100px;
	margin-left:0px;
}

#text1{
	color:black;
	font-size:25px;
	margin-bottom:20px;
	margin-top:70px;
	text-decoration:underline;
}

h2{font-size:17px;width:auto;color:#12a70c;margin:5px 5px 5px 0px;}div{display:block}
h1{font-size:22px;width:auto;color:#12a70c;margin:5px 5px 5px 0px;}
#img2{
	border-radius:50%;
}
.files-new ul li{
	list-style-type:none;
}
.categories-list ul li{
	list-style-type:none
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
        <li class="active"><a href="home/index">Home</a></li>
        <li><a href="home/about">About</a></li>
        <li><a href="home/contact">Contact</a></li>
		<li><form class="form-inline" action="/home/search">
    <input class="form-control mr-sm-2" name="searchtext" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="seabtn">Search</button>
  </form></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	  @if(session()->has('uname'))
	  <li>
	  {{session()->get('uname')}}
	  <a href="home/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
	 
	@else 

    <li><a href="home/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	 
	@endif
	  	 </ul>
    </div>
  </div>
  
</nav>
</div>

<div id="div1">

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-md-9"> 
	  @yield("contain")
    </div>
	
	<div class="col-md-3"> 
		<div class="dialog-right">
		<div class="box" id="categories">
		<div class="categories-list">
		<h4 id="h4"><a href="#">Pdfdrive:hope</a> Give books away. Get books you want.</h4>
		<ul>
		@foreach($cat->sortByDesc('id') as $c)
		
		<li>
		<a href="http://127.0.0.1:8000/home/{{$c->id}}/catview">
		<img class="img-polaroid" src="http://127.0.0.1:8000/{{'catimages/' . $c->caticon}}" height="50px" width="50px" alt="category"  id="img2"/>
		<p id="pragraph">{{$c->catname}}</p>
		</a>
		
		</li>

		@endforeach
		
		<hr/>
		</ul>
		<span id="subscribe-heading" style="color:blue">Get Top Trending Free Books in Your Mail Box  </span><br><br>
		<input style="padding:5px 5px 5px 5px" type="text" id="mail" placeholder="Enter your Email-Id" size="20%">&nbsp;
		<input type="submit" value="Subscribe" />
		</div>
		</div>
		</div>
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
					<a href="/home/tac" rel="nofollow">Terms & Privacy</a><br />
				</div>
				
			<div class="footer-section col-md-3">
				<div class="footer-title"><p style="font-size:20px;color:grey;">Social</p></div><br />
					<a href="https://twitter.com/pdfdrive" target="_blank">Twitter</a><br />
					<a href="https://www.facebook.com/pdfdrive" target="_blank">Facebook</a><br />
					<a href="/donate">Donate ♥</a><br />
			</div>
				
			<div class="footer-section col-md-3">
				<div class="footer-title"><p style="font-size:20px;color:grey;">Help</p></div><br />
				<a href="http://127.0.0.1:8000/home/contact" rel="nofollow">Contact us</a><br />
				<a href="/home/feedback" rel="nofollow">Feedback</a><br />
				<a href="/home/dmca" rel="nofollow">DMCA & Copyright</a><br />
			</div>
		</div>
		</div>
		</div>
		</div>

  
</footer>

</body>
</html>