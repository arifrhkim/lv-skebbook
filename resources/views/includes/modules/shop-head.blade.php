<div class="panel panel-default">
    <div class="panel-background">
        <img src="{{ $shop->banner ? Cloudder::show($shop->banner, ['quality' => 'auto:good', 'fetch_format' => 'auto', 'width' => '800', 'height' => '150']) : url('images/default/banner.png') }}" class="img-responsive">
    </div>
    <div class="panel-body">
        <img src="{{ $shop->photo ? Cloudder::show($shop->photo, ['quality' => 'auto', 'fetch_format' => 'auto']) : url('images/default/shop.png') }}" class="img-responsive img-circle img-avatar-lg" alt="{{ $shop->name }}">
        <h4>{{ $shop->name }}</h4>
        {{-- <a href="{{ route('product.create') }}" class="btn btn-primary btn-sm">@lang('actions.add_product')</a> --}}
        @if (Route::current()->getName() == 'shop.index')
		    <a href="{{ route('shop.customization') }}" class="btn btn-default btn-sm pull-right">@lang('actions.edit')</a>
		@endif
    </div>
</div>