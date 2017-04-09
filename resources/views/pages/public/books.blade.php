@extends('layouts.shop')

@section('title', 'Books')

@section('content')
	<div class="row">
		@foreach($products as $product)
            <div class="col-sm-3 col-xs-6">
    			<a href="{{ route('product.show', ['slug' => $product->slug]) }}" class="product-link">
                    <div class="product-box">
        				<img class="img-responsive" src="{{ Storage::url($product->productImages[0]->name) }}"></img>
                        <div class="product-info">
                            <h4 title="{{ $product->name }}">{{ str_limit($product->name, 10) }}</h4>
                            <p>Rp {{ $product->price }}</p>    
                        </div>
                    </div>
    			</a>
            </div>
		@endforeach
	</div>

	<center>{{ $products->links() }}</center>
@endsection

@section('bottom_script')
<script>
    $(document).ready(function(){
        var category_id = $('#category_id').val();

        if (category_id) {
            if (!$('#subcategory_id').val()) {
                getSubcategories();
            } 
        } else {
            $('#subcategory_id').prop('disabled', true);
        }
    });

    $('#category_id').on('change', function(){
        getSubcategories();
    });

    function getSubcategories(){
        var category_id = $('#category_id').val();

        $.get('{{ url('api/subcategory') }}/' + category_id, function(data) {
            //console.log(data);
            $('#subcategory_id').empty();
            $('#subcategory_id').prop('disabled', false);
            $('#subcategory_id').append('<option value="">{{ trans('forms.subcategory').'...' }}</option>');
            $.each(data, function(index,subCatObj){
                $('#subcategory_id').append('<option value="'+ index +'">'+subCatObj+'</option>');
            });
        });
    }
</script>
@endsection