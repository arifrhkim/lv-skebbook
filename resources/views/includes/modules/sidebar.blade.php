<ul class="list-group">
	<a href="{{ url('profile') }}" class="{{ str_contains(Route::currentRouteName(), 'profile') ? 'active' : '' }}">
		<li><i class="fa fa-user-circle-o fa-fw" aria-hidden="true"></i>&nbsp; Profile</li>
	</a>
	<a href="{{ url('dashboard') }}" class="{{ str_contains(Route::currentRouteName(), 'dashboard') ? 'active' : '' }}">
		<li><i class="fa fa-tachometer fa-fw" aria-hidden="true"></i>&nbsp; Dashboard</li>
	</a>
	<a href="{{ url('shop') }}" class="{{ str_contains(Route::currentRouteName(), ['shop', 'product']) ? 'active' : '' }}">
		<li><i class="fa fa-shopping-bag fa-fw" aria-hidden="true"></i>&nbsp; Toko Buku</li>
	</a>
	<a href="{{ url('wip') }}">
		<li><i class="fa fa-shopping-cart fa-fw" aria-hidden="true"></i>&nbsp; History Belanja</li>
	</a>
	
	<li class="divider"></li>
	
	<a href="{{ url('wip') }}">
		<li><i class="fa fa-bar-chart fa-fw" aria-hidden="true"></i>&nbsp; Order</li>
	</a>
	<a href="{{ url('wip') }}">
		<li><i class="fa fa-newspaper-o fa-fw" aria-hidden="true"></i>&nbsp; Beriklan</li>
	</a>
	
	<li class="divider"></li>
	
	<a href="{{ url('wip') }}">
		<li><i class="fa fa-thumbs-o-up fa-fw" aria-hidden="true"></i>&nbsp; Buat Verifikasi Store</li>
	</a>
	<a href="{{ url('wip') }}">
		<li><i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>&nbsp; Tulis Blog</li>
	</a>
</ul>