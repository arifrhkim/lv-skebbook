
<footer class="app-footer">
	
		<section id="addon-footer">
			<div class="container-fluid container-addon">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<h4 class="col-md-5 text-center">SIGN UP NEWSLETTER</h4>
						<form class="col-md-7 text-center">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Enter your email address" id="subscribe">
								<span class="input-group-btn">
									<button class="btn btn-info input-rounded" type="button">Subscribe</button>
								</span>
							</div>
						</form>
					</div>
					<div class="col-md-6 col-sm-12">
						<h4 class="col-md-5 text-center">FOLLOW US</h4>
						<ul class="social-list col-md-7 text-center">
							<li><a href="https://facebook.com/skebbook"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a></li>
							<li><a href="https://plus.google.com/116070574852522142723"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a></li>
							<li><a href="https://www.instagram.com/skebbookcom/"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
							<li><a href="https://twitter.com/skebbook"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UC8gBnW73CUs11NrX6nDhZMQ"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section id="main-footer">
			<div class="container-fluid container-addon">
				<div class="row">
					<h2 class="footer-title">Skebbook</h2>
					<div class="col-md-4 col-sm-12">
						<article>
							<p>Marketplace that enable people to discover the goodness of their books.</p>
							<p>We allowed people to sell, buy and donate/lend the book easily like never before.</p>
							<p>Our commitment is to building powerful accessable education accross Indonesia</p>
						</article>
					</div>
					<div class="col-md-2 col-sm-6">
						<h3 class="footer-subtitle">@lang('titles.sell')</h3>
						<ul>
							<li><a href="{{ url('/') }}">Tentang Skebbook</a></li>
							<li><a href="{{ url('/') }}">Aturan Penggunaan</a></li>
							<li><a href="{{ url('/') }}">Kebijakan Privasi</a></li>
							<li><a href="{{ url('/') }}">Berita & Pengumuman</a></li>
							<li><a href="{{ url('/') }}">Karir di Skebbook</a></li>
						</ul>
					</div>
					<div class="col-md-2 col-sm-6">
						<h3 class="footer-subtitle">@lang('titles.buy')</h3>
						<ul>
							<li><a href="{{ url('/') }}">Cara Belanja</a></li>
							<li><a href="{{ url('/') }}">Pembayaran</a></li>
							<li><a href="{{ url('/') }}">Jaminan Aman</a></li>
							<li><a href="{{ url('/') }}">Tips Berbelanja</a></li>
							<li><a href="{{ url('/') }}">Produk Terkini</a></li>
						</ul>
					</div>
					<div class="col-md-4 col-sm-12">
						<ul>
							<li><a href="{{ url('/') }}" class="btn btn-lg btn-outline btn-block">Panduan Berjualan/Berdagang</a></li>
							<li><a href="{{ url('/') }}" class="btn btn-lg btn-outline btn-block">Panduan Pembelian</a></li>
							<li><a href="{{ url('/') }}" class="btn btn-lg btn-outline btn-block">Bantuan/Hubungi Kami</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		
	
</footer>

<!-- Scripts -->
<script src="/js/app.js"></script>
@yield('bottom-script')