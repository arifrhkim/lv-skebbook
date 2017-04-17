{!! Form::open(['route' => ['upload'], 'class' => 'form-horizontal', 'files' => true]) !!}

	<div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
		{{ Form::label('avatar', trans('forms.avatar'), ['class' => 'col-md-3 control-label']) }}

		<div class="col-md-6">
		    <input id="files" class="inputfile" name='avatar[]' type="file" multiple/>

		    @if ($errors->has('avatar'))
		        <span class="help-block">
		            <strong>{{ $errors->first('avatar') }}</strong>
		        </span>
		    @endif
		</div>
	</div>

	<div class="form-group">
        <div class="col-md-offset-3 col-md-9">
            {{ Form::submit(trans('actions.save'), ['class' => 'btn btn-info']) }}
        </div>
    </div>

{!! Form::close() !!}