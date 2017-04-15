<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('includes.partials.head')
</head>
<body>
    <div id="app">
        @include('includes.partials.navbar')

        <!-- Title -->
		<div class="page-title text-center">
			<h1>Skebbook Store</h1>
		</div>
		<!-- End of Title -->

		<!-- Breadcrumbs -->
		<div class="breadcrumbs container-fluid">
			<a href="{{ url('/') }}">Home</a> / Shop
		</div>
		<!-- End of Breadcrumbs -->

		<!-- Energy -->
		<div class="energy container-fluid container-addon">
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

        <div class="container-fluid container-addon content">
        	<div class="row">
	    		<div class="col-md-3">@include('includes.modules.shop-sidebar')</div>
	    		<div class="col-md-9">@yield('content')</div>
	    	</div>	
        </div>
        
    </div>

    @include('includes.partials.footer')
</body>
</html>