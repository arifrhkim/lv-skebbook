@extends('layouts.landing')

@section('content')

<section id="featured-slider">
	{{-- <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			<li data-target="#carousel-example-generic" data-slide-to="3"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active" id="item-1">
				<img src="{{ asset('images/web/background-carousel.jpg') }}" alt="1">
				<div class="carousel-caption">
					<h1>30 Hari Membuka <br>Imajinasi Baru</h1>
					<p>Temukan referensi buku menarik yang dapat mengembangkan potensi & kemampuan kamu.</p>
					<a href="#" class="btn btn-info btn-rounded">Cari Tau  <i class="fa fa-angle-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="item" id="item-2">
				<img src="{{ asset('images/web/background-carousel2.jpg') }}" alt="2">
				<div class="carousel-caption">
					<div class="row">
						<div class="col-sm-6 text-left">
							<h1>Pilihan buku terbaik untuk kamu bulan ini!</h1>
							<p>20 buku terbaik edisi editor Skeb Book, Mulai dari buku nasional sampai internasional!</p>
							<p>Dapatkan juga diskon 20%</p>
							<a href="#" class="btn btn-info btn-rounded">Cari Tau  <i class="fa fa-angle-right" aria-hidden="true"></i></a>
						</div>	
					</div>
				</div>
			</div>
			<div class="item" id="item-3">
				<img src="{{ asset('images/web/background-carousel3.jpg') }}" alt="3">
				<div class="carousel-caption">
					<h1>Gak perlu lagi repot <br>hunting buku bekas.</h1>
					<p>Sekarang ke pasar buku cukup buka skeb book, pilihan buku yang kamu <br> suka langsung dari pedagang buku terpercaya!</p>
					<a href="#" class="btn btn-info btn-rounded">Cari Tau  <i class="fa fa-angle-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="item" id="item-4">
				<img src="{{ asset('images/web/background-carousel4.jpg') }}" alt="4">
				<div class="carousel-caption">
					<div class="row">
						<div class="col-sm-6 text-left">
							<h1>Sekarang kamu bisa <br> <span> menyewakan koleksi <br> buku dirumah</span> tanpa <br> harus khawatir</h1>
							<p>Kunjungi : loops.skebbook.com</p>
							<a href="#" class="btn btn-info btn-rounded">Cari Tau  <i class="fa fa-angle-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div> --}}
	<a href="#"><img src="{{ url('images/web/Background.jpg') }}"></a>
</section>

<section id="featured-search">
	<div class="panel panel-default">
		<div class="panel-body">

			{!! Form::open(['url' => 'books', 'method' => 'GET', 'class' => 'form-inline', 'role' => 'search']) !!}

                <div class="form-group col-md-10">
                    {{ Form::text('q', null, ['class' => 'form-control', 'placeholder' => 'Cari judul buku, genre, penerbit atau penulis disini']) }}
                </div>

                <button type="submit" class="btn btn-danger col-md-2">Cari Buku</button>

            {!! Form::close() !!}

		</div>
	</div>
</section>

<section id="featured-category" class="container-fluid container-addon">

		<div class="row">
			<div class="col-md-2 col-lg-2">
				<div class="panel panel-default">
					<div class="panel-body">
						Kuliner & travel
					</div>
				</div>
			</div>
			<div class="col-md-2 col-lg-2">
				<div class="panel panel-default">
					<div class="panel-body">
						Buku anak anak
					</div>
				</div>
			</div>
			<div class="col-md-2 col-lg-2">
				<div class="panel panel-default">
					<div class="panel-body">
						Majalah & Tabloid
					</div>
				</div>
			</div>
			<div class="col-md-2 col-lg-2">
				<div class="panel panel-default">
					<div class="panel-body">
						Seni & Fotografi
					</div>
				</div>
			</div>
			<div class="col-md-2 col-lg-2">
				<div class="panel panel-default">
					<div class="panel-body">
						Bisnis & Manajemen
					</div>
				</div>
			</div>
			<div class="col-md-2 col-lg-2">
				<div class="panel panel-default">
					<div class="panel-body">
						Biografi & sejarah
					</div>
				</div>
			</div>
		</div>
</section>

<section id="featured-content" class="container-fluid container-addon">
	<div class="row">
		<div class="col-md-4">
			<div id="sejarah">
				<div class="img-container">
					<h1>Saatnya memutar waktu.</h1>
					<p>Masuk kedalam dimensi dimana kamu dapat mengetahui tentang sejarah dan cerita yang kamu suka</p>
					<a href="#" class="btn btn-outline btn-rounded">Cari Tau <i class="fa fa-angle-right" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-6">
					<div id="komik">
						<div class="img-container">
							<h1>Komik setiap hari!</h1>
							<p>Rasakan pengalaman baru mencari komik kesayangan kamu</p>
							<a href="#" class="btn btn-outline btn-rounded">Cari Tau <i class="fa fa-angle-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div id="karya">
						<div class="img-container">
							<h1>Totalitas berkarya</h1>
							<p>Dukung dan kembangkan passion kamu, baca buku yang kamu suka sekarang</p>
							<a href="#" class="btn btn-outline btn-rounded">Cari Tau <i class="fa fa-angle-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div id="pengalaman">
						<div class="img-container">
							<h1>Jelajahi Pengalaman Baru</h1>
							<p>Temukan buku yang pas dengan mood kamu minggu ini</p>
							<a href="#" class="btn btn-outline btn-rounded">Cari Tau <i class="fa fa-angle-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="popular-product" class="container-fluid container-addon">
	<div class="row">
		<div class="col-sm-12"><h2>Buku Populer</h2><hr></div>
		@for ($i=0; $i<4; $i++)
		<div class="col-sm-3 col-xs-12">
			<div class="book">
				<img src="{{ asset('images/web/buku.png') }}" class="img-responsive book-image">
				<h3 class="book-title ellipsis">Novel Drama</h3>
				<p class="book-price ellipsis">Rp 35.000,-</p>
			</div>
		</div>
		@endfor
	</div>
</section>

<section id="loops">
	<div class="row container-fluid container-addon">
		<div class="col-md-6 text-right img-container">
			<img src="{{ asset('images/web/loops-logo.png') }}" class="loops-logo">
			<h2>Buku di lemari bisa lebih berguna dan memberi manfaat.</h2>
			<p>Sekarang kamu dapat berdonasi dan meminjamkan buku sesuai dengan keinginan kamu, kapan pun dan kemana saja</p>
			<a href="#" class="btn btn-outline btn-rounded">Galang Donasi</a>
			<a href="#" class="btn btn-filled btn-rounded">Berdonasi</a>
		</div>
	</div>
</section>

<section id="promo">
	<div class="row container-fluid container-addon">
		<div class="col-md-6 col-sm-12" id="promo-left">
			<div class="row">
				<div class="col-sm-4">
					<h1 class="text-center">20%</h1>
				</div>
				<div class="col-sm-8">
					<h2>Rasakan Manfaat</h2>
					<p>Kode kupon untuk setiap toko berverified</p>
					<a href="#" class="btn btn-outline btn-rounded">Lihat kode kupon</a>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 text-center" id="promo-right">
			<h2>Buku yang kamu cari gak ada?</h2>
			<p>Sekarang kamu bisa pesan buku dalam jangka waktu yang kamu mau!</p>
			<a href="#" class="btn btn-outline btn-rounded">Pesan buku</a>
		</div>
	</div>
</section>

@endsection