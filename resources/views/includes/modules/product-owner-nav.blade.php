<div class="row">
	<div class="col-md-4">
		<img src="{{ $product->shop->photo ? Cloudder::show($product->shop->photo, ['quality' => 'auto', 'fetch_format' => 'auto']) : url('images/default/shop.png') }}" class="img-responsive img-circle" alt="{{ $product->shop->name }}">
	</div>
	<div class="col-md-8">
		{{ $product->shop->name }} <br>
		<span class="text-muted">{{ title_case($product->shop->getCity()->name) }}, {{ title_case($product->shop->getProvince()->name) }}</span>
	</div>
</div>