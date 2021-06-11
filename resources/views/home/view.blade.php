@extends("layout.user")

@section("contain")
  <style>
  

.float-right{
	float:right;
	width:100%;
	hight:100%;
}

#img1{
	height:300px;
	width:auto;
	margin-left:0px;
}

#img1:hover{
	padding:10px 10px 10px 10px;
	border:3px solid #00BFFF;
}

#btn3{
	margin-top:40px;
	width: auto;
	padding: 5px 5px 5px 5px;
	font-size:18px;
	margin-right:20px;
	color:white;
	font-weight:bold;
	background-color:#696969;
}
#btn3:hover{
	opacity:0.8;
}

.float-right{
	margin-left:20px;
}
p{
	font-size:16px;
}
</style>

    <div class="files-new">
				<ul>
					<li>
						<div class="row" id="row1">
							<div class="col-md-3">
								<div class="file-left">
									<a href="/living-in-the-light-a-guide-to-personal-transformation-e10172273.html" data-id="10172273">
										<img class="img-zoom file-img" src="{{'http://127.0.0.1:8000/bookimages/' . $book->bcover}}" id="img1">
									</a>
									
								</div>
							</div>
						
							<div class="col-md-6">
								<div class="float-right">
									
										<h1>{{$book->bname}}</h1><br>
								
								<p><b>Author Name :-</b> {{$book->bauthor}}</p>
								<p><b>Pages & Size :- </b>{{$book->bpage}} & {{$book->bsize}}</p>
								<p><b>Language :- </b>{{$book->blanguage}}</p>
								<p><b>Publish Date :-</b> {{$book->bpubdate}}</p>
								&nbsp;...<br>
								
								
								<a href="http://127.0.0.1:8000/bookpdf/{{$book->bpdf}}" Download >
								<button type="button" value="Download" id="btn3">Download</button>
								</a>
								

								<a href="http://127.0.0.1:8000/home/{{$book->id}}/preview">
								<button type="button" value="preview" id="btn3">Preview</button></a>
								<a href="http://127.0.0.1:8000/home/buy">
								<button type="button" value="Buy" id="btn3">Buy</button>
								</a>
								</div>
								
							</div>
						</div>
					</li>
				</ul>
			</div>
		  
   
@stop