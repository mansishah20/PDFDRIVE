<!DOCTYPE html>
<head>
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
  font: normal 18px Roboto,arial,sans-serif;
  font-family: 'Dancing Script', cursive!important;

}
#logo-img{
	padding-top:0px;
    margin:50px 10px 10px 10px;
	height:50px;
}

h2{width:auto;color:#12a70c;margin:5px 5px 5px 0px;}

footer {
      background-color: #fff;
      color: #000;
      padding: 15px;
	  width:auto;
    }
</style>
</head>
<body>
<center>
<img src="http://127.0.0.1:8000/img/logo-1.png" id="logo-img" border="0" title="" alt="" /><br><br>
<h2><u>{{$book->bname}} Book</u></h2>
<br>
<br>
<embed src="http://127.0.0.1:8000/bookpdf/{{$book->bpdf}}" width="900px" height="600px">
</center>
<br><br><br>

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
