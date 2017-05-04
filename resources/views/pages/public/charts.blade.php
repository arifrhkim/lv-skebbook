@extends('layouts.landing')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-8">

			<section  id="shop-chart">

				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">Keranjang Belanja</h3>
				  </div>
				  <div class="panel-body">

						<table class="table">
							<thead>
								<tr>
									<td class="col-md-1"></td>
									<td class="col-md-7">Judul Buku</td>
									<td class="col-md-2">Harga</td>
									<td class="col-md-2">Jumlah</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<img src="http://placehold.it/60x60" alt="">
									</td>
									<td>
										<h5>Buku Satu <span class="label label-default">Dari toko</span></h5>
										<p>Pengiriman dari Jakarta</p>
										<a href="#"><h6>Hapus</h6></a>
									</td>
									<td>
										<p>Rp. 100.000</p>
									</td>
									<td>
										<input type="number" class="form-control" placeholder="1" id="jumlah-buku">
									</td>
								</tr>
							</tbody>
						</table>

				  </div>
				</div>

				<div class="pull-right">
					<p><strong>Sub Total Belanja (3 buku) <span style="color:#d9534f">Rp. 150.000</span></strong></p>
				</div>

			</section>

		</div>
		<div class="col-sm-4">

			<section id="shop-detail">

				<div class="panel panel-default">
					<div class="panel-heading">Detail belanja</div>
					<div class="panel-body">
						<table style="width:100%">
							<tr>
								<td>Buku populer</td>
								<td style="text-align:right">Rp.100.000</td>
							</tr>
							<tr>
								<td>Buku populer</td>
								<td style="text-align:right">Rp.100.000</td>
							</tr>
							<tr>
								<td>Buku populer</td>
								<td style="text-align:right">Rp.100.000</td>
							</tr>
						</table>
						<hr>
						<table style="width:100%">
							<tr>
								<td><strong>Buku populer</strong></td>
								<td style="text-align:right">Rp.100.000</td>
							</tr>
						</table>
						<br>
						<a href="#" class="btn btn-danger btn-block">Checkout Belanja</a>
						<hr>
						<form>
							<div class="form-group">
								<select class="form-control" id="kota">
									<option>Pilih kurir antar</option>
									<option>Kurir A</option>
									<option>Kurir B</option>
								</select>
							</div>
							<div class="form-group">
								<select class="form-control" id="kota">
									<option>Pilih paket kurir</option>
									<option>Paket A</option>
									<option>Paket B</option>
								</select>
							</div>
							<div class="form-group">
								<select class="form-control" id="kota">
									<option>Pilih nama tempat</option>
									<option>Tempat A</option>
									<option>Tempat B</option>
								</select>
							</div>
							<button class="btn btn-danger btn-block" type="button" name="button">Estimasi Ongkos Kirim</button>
						</form>
						<br>
						<table style="width:100%">
							<tr>
								<td><strong>Estimasi ongkos kirim</strong></td>
								<td style="text-align:right"><strong>Rp.1.000</strong></td>
							</tr>
						</table>
				</div>

				</div>

			</section>

		</div>
	</div>
</div>

@endsection
