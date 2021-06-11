@extends("layout.user")

@section("contain")
    <div class="files-new">
				<ul>
				@foreach($book->sortByDesc('id') as $b)
                    @if(str_contains($b->bname,$bname))
					<li>
						<div class="row" id="row1">
							<div class="col-md-2">
								<div class="file-left">
									<a href="#" >
										<img class="img-zoom file-img" src="{{'http://127.0.0.1:8000/bookimages/' . $b->bcover}}" alt="{{$b->bname}}" title="{{$b->bname}}" id="img1">
									</a>
									
								</div>
							</div>
						
							<div class="col-md-7">
								<div class="float-right">
									<a href="#" data-loc="1">
										<h2>{{$b->bname}}</h2>
									</a>
								
								<div>
									<span class="fi-pagecount ">{{$b->bpage}}  Pages</span><span class="ml-1 mr-1">--</span><span class="fi-size hidemobile">{{$b->bsize}}</span><span class="ml-1 mr-1 hidemobile"></span>--<span class="fi-year ">{{$b->bpubdate}}</span><span class="ml-1 mr-1">--</span><span class="fi-hit">00 Downloads</span></span> <br />
								</div>
								{{$b->bdescribe}}
								 &nbsp;...
								</div>
								<h5><a href="http://127.0.0.1:8000/home/{{$b->id}}/view">Details</a></h5>
							
							</div>
						</div>

					</li>

				@endif				
				@endforeach
				</ul>
					<hr/>
				<span>
					{{$book->links()}}
				</span>
					<hr/>
				
			</div>
		  
@stop
	
