<div class="panel panel-default">
	<div class="panel-body">
		{!! Form::open(['url' => 'books', 'method' => 'GET', 'id' => 'filter-form']) !!}

			<div class="form-group">
				{{ Form::label('q', trans('forms.search')) }}
				{{ Form::text('q', null, ['class' => 'form-control', 'placeholder' => trans('actions.search')]) }}
			</div>

			<div class="form-group">
				{{ Form::label('category_id', trans('forms.category')) }}
				{{ Form::select('category_id', $categories, null, ['placeholder' => trans('forms.category').'...', 'class' => 'form-control', 'id' => 'category_id']) }}
			</div>

			<div class="form-group">
				{{ Form::label('subcategory_id', trans('forms.subcategory')) }}
				{{ Form::select('subcategory_id', $subcategories, null, ['placeholder' => trans('forms.subcategory').'...', 'class' => 'form-control', 'id' => 'subcategory_id']) }}
			</div>

			<div class="form-group">
                    {{ Form::submit(trans('actions.filter'), ['class' => 'btn btn-info btn-block']) }}
            </div>

		{!! Form::close() !!}
	</div>
</div>