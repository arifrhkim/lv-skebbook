@extends('layouts.dashboard')

@section('content')
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="row row-eq-height">
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
			    <ol class="carousel-indicators">
			      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			      <li data-target="#myCarousel" data-slide-to="1"></li>
			      <li data-target="#myCarousel" data-slide-to="2"></li>
			    </ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div style="background-color:#df5242; height:240px;"></div>
						</div>
						<div class="item">
							<div style="background-color:#1A1D24; height:240px;"></div>
						</div>
						<div class="item">
							<div style="background-color:#df5242; height:240px;"></div>
						</div>
					</div>
					<br />
				</div>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 text-center">
								<h4>@lang('titles.profile')</h4>
								<a href="{{ url('profile') }}" class="btn btn-danger btn-sm">@lang('actions.manage')</a>		
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								@if (!Auth::user()->profile)
									<img src="{{ url('images/default/avatar.png') }}" class="img-responsive img-circle pull-right" alt="{{ Auth::user()->name }}">
								@else
									<img src="{{ Auth::user()->profile->avatar ? Cloudder::show(Auth::user()->profile->avatar, ['quality' => 'auto', 'fetch_format' => 'auto']) : url('images/default/avatar.png') }}" class="img-circle img-responsive" alt="">
								@endif
							</div>
						</div>

						<hr>

						<div class="row">
							<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 text-center">
								<h4>@lang('titles.shop')</h4>
								<a href="{{ url('shop') }}" class="btn btn-danger btn-sm">@lang('actions.manage')</a>		
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								@if (!Auth::user()->shop)
									<img src="{{ url('images/default/shop.png') }}" class="img-responsive img-circle pull-right" alt="{{ Auth::user()->name }}">
								@else
									<img src="{{ Auth::user()->shop->photo ? Cloudder::show(Auth::user()->shop->photo, ['quality' => 'auto', 'fetch_format' => 'auto']) : url('images/default/shop.png') }}" class="img-circle img-responsive" alt="">
								@endif
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-10 col-md-offset-1">
		<div class="well well-danger well-compact">
			<div class="row">
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<i class="glyphicon glyphicon-envelope" aria-hidden="true"/></i> Black friday! 20% off pendaftar sebagai verified store minggu ini!
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<a href="#" class="btn btn-sm btn-outline btn-block pull-right">JADI TOKO TERPERCAYA</a>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-10 col-md-offset-1">
		<div class="row row-compact">
			<div class="col-md-6" id="pengetahuan">
				<center>
					<h3><strong>Skeb book</strong> inbound</h3>
					<p>kirim email bikin jadwal promosi & kelola konsumen</p>
					<a href="#" class="btn btn-outline">Buat strategi pemasaran</a>
				</center>
			</div>

			<div class="col-md-3" id="upload">
				<a href="toko-buku.html#upload-buku">
					<span class="glyphicon glyphicon-upload fa-5x" aria-hidden="true" style="color:white;"></span><br />
					<a href="http://store.skebbook.com/product/create" class="btn btn-outline">Upload buku</a>
				</a>
			</div>

			<div class="col-md-3">
				<div class="row text-center" id="pembayaran">
					<a href="#" class="btn btn-outline">Lihat status pembayaran</a>
				</div>
				
				<br>

				<div  class="row" id="order">
					<p>0 orderan buku</p>
					<a href="#" class="btn btn-outline">Proses order</a>
					</div>
				</div>
			</div>
	</div>
</div>
@endsection
