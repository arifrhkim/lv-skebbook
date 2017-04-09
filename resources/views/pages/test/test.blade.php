@extends('layouts.default')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-3"></div>
		<div class="col-md-9 col-sm-9">
			<div class="row">
				<div class="col-md-3 col-sm-3" v-for="product in products">
					<img :src="'http://localhost:8000/'+product.product_images[0]['name'].replace('public', 'storage')" class="img-responsive">
					<h4>@{{ product.name }}</h4>
					<p>Rp @{{ product.price }}</p>	
				</div>
			</div>
			<center>
				<vue-pagination  v-bind:pagination="pagination"
			                     v-on:click.native="getProducts(pagination.current_page)"
			                     :offset="4">
			    </vue-pagination>
		    </center>
		</div>
	</div>
</div>
@endsection

@section('bottom_script')

@endsection