<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('includes.head')
</head>
<body>
    <div id="app">
        @include('includes.header')

        <!-- Carousel -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="{{ asset('images/web/slide-image.jpg') }}" class="img-responsive">
				</div>
				<div class="item">
					<img src="{{ asset('images/web/slide-image.jpg') }}" class="img-responsive">
				</div>
			</div>
		</div>
		<!-- End of Carousel -->

		<!-- Breadcrumbs -->
		<div class="breadcrumbs container-fluid">
			<a href="{{ url('/') }}">Home</a> / Shop
		</div>
		<!-- End of Breadcrumbs -->

		<!-- Energy -->
		<div class="energy container-fluid">
			<h4>Energy untuk kamu</h4>
			<div class="row">
				@for ($i = 0; $i < 4; $i++)
					<div class="col-sm-3">
						<img src="{{ asset('images/web/berita.png') }}" class="img-responsive">
					</div>
				@endfor
			</div>
		</div>
		<!-- End of Energy -->

        <div class="container-fluid content">
        	<div class="row">
	    		<div class="col-md-3">@include('includes.modules.shop-sidebar')</div>
	    		<div class="col-md-9">@yield('content')</div>
	    	</div>	
        </div>
        
    </div>

    @include('includes.footer')
</body>
</html>