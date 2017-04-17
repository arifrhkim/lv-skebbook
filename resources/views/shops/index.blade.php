@extends('layouts.dashboard')

@section('title', 'Shop')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
	        	
	            @include('includes.modules.shop-head')

	            <div class="panel panel-default">
	                <div class="panel-body">
	                    
	                    <div>

						<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#shop" aria-controls="shop" role="tab" data-toggle="tab">Shop</a></li>
								<li role="presentation"><a href="#product" aria-controls="product" role="tab" data-toggle="tab">Books</a></li>
								<a href="{{ route('product.create') }}" class="btn btn-primary btn-sm pull-right">@lang('actions.add_product')</a>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="shop">
									<table class="table table-clean table-striped no-margin-btm">
				                        <tr>
				                            <td class="col-md-2">@lang('forms.name')</td>
				                            <td><strong>{{ $shop->name }}</strong></td>
				                        </tr>
				                        <tr>
				                            <td>@lang('forms.tagline')</td>
				                            <td><strong>{{ $shop->tagline }}</strong></td>
				                        </tr>
				                        <tr>
				                            <td>@lang('forms.email')</td>
				                            <td><strong>{{ $shop->email }}</strong></td>
				                        </tr>
				                        <tr style="border-top: 1px solid #eee">
				                            <td>@lang('forms.address')</td>
				                            <td><strong>{{ $shop->address }}</strong></td>
				                        </tr>
				                        <tr>
				                            <td>@lang('forms.province')</td>
				                            <td>
				                            @if ($shop->province_id) 
				                                <strong>{{ title_case($shop->getProvince()->name) }}</strong>
				                            @endif
				                            </td>
				                        </tr>
				                        <tr>
				                            <td>@lang('forms.city')</td>
				                            <td>
				                            @if ($shop->city_id)
				                                <strong>{{ title_case($shop->getCity()->name) }}</strong>
				                            @endif
				                            </td>
				                        </tr>
				                        <tr style="border-top: 1px solid #eee">
				                            <td>@lang('forms.work_day')</td>
				                            <td><strong>{{ $shop->getWorkDays() }}</strong></td>
				                        </tr>
				                        <tr>
				                            <td>@lang('forms.work_hour')</td>
				                            <td><strong>{{ $shop->getWorkHours() }}</strong></td>
				                        </tr>
				                        <tr style="border-top: 1px solid #eee">
				                            <td>@lang('forms.note')</td>
				                            <td><strong>{{ $shop->note }}</strong></td>
				                        </tr>
				                    </table>
								</div>

								<div role="tabpanel" class="tab-pane" id="product">
									<table class="table table-clean table-striped table-divided no-margin-btm" id="products">
				                    	@foreach ($shop->products as $product)
				                        <tr class="item{{$product->slug}}">
				                        	<td class="col-md-1">
				                        		{{-- <img src="{{ Storage::url($product->productimages[0]->name) }}" class="img-responsive"> --}}
				                        		<img src="{{ Cloudder::show($product->productimages[0]->name, ['quality' => 'auto', 'fetch_format' => 'auto', 'width' => 100, 'height' => 100]) }}" class="img-responsive" alt="{{ $product->name }}">
				                        	</td>
				                            <td class="col-md-8">
				                            	<a href="{{ route('product.show', ['slug' => $product->slug]) }}">{{ $product->name }}</a> <span class="label {{ $product->condition == 'Baru' ? 'label-primary' : 'label-success' }}">{{ $product->condition }}</span><br>
				                            	<span class="text-muted"><small>
				                            	<span style="padding-right: 20px;">@lang('forms.category'): {{ $product->category }}</span>@lang('forms.subcategory'): {{ $product->subcategory }}</small></span>
				                            </td>
				                            <td class="col-md-2" style="vertical-align: middle;">
				                            	<div class="btn-group pull-right" role="group" aria-label="actions">
													<a href="{{ url('product/edit', $product->slug) }}" class="btn btn-default btn-sm">@lang('actions.edit') Buku</a>
													<button class="delete-modal btn btn-danger btn-sm" data-id="{{$product->slug}}" data-name="{{$product->name}}">x</button>
												</div>
				                            </td>
				                        </tr>
				                        @endforeach
				                    </table>

				                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
										<div class="modal-dialog" role="document">
											<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<h4 class="modal-title"></h4>
												</div>
												<div class="modal-body">
													<div class="deleteContent">
														Are you sure you want to delete <span class="dname"></span> ? <span class="hidden did"></span>
													</div>
												</div>
												<div class="modal-footer">
														<button type="button" class="btn actionBtn" data-dismiss="modal">
															<span id="footer_action_button"> </span>
														</button>
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>

	                </div>
	                <div class="panel-footer text-right">
	                    <a href="{{ route('shop.edit') }}" class="btn btn-default btn-sm">@lang('actions.edit')</a>
	                </div>
	            </div>
	        
        </div>
    </div>

@endsection

@section('bottom-script')
<script>
$(document).on('click', '.delete-modal', function() {
    $('#footer_action_button').text('Delete');
    $('.actionBtn').removeClass('btn-success');
    $('.actionBtn').addClass('btn-danger');
    $('.actionBtn').addClass('delete');
    $('.modal-title').text('Delete');
    $('.did').text($(this).data('id'));
    $('.deleteContent').show();
    $('.form-horizontal').hide();
    $('.dname').html($(this).data('name'));
    $('#myModal').modal('show');
});

$('.modal-footer').on('click', '.delete', function() {
    $.ajax({
        type: 'delete',
        url: 'product/delete/'+ $('.did').text(),
        data: {
            '_token': $('input[name=_token]').val(),
        },
        success: function(data) {
            $('.item' + $('.did').text()).remove();
        }
    });
});
</script>
@endsection
