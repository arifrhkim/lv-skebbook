<!-- Notifications -->
@if (Auth::user() && Auth::user()->is_verified == 0)
	<div class="alert alert-warning alert-dismissible alert-hover" role="alert">
		<div class="container-fluid">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			We've sent you an email verification to {{ Auth::user()->email }}. Please verify your email first.
		</div>
	</div>
@endif
@if (Session::has('message'))
	<div class="alert alert-success alert-dismissible alert-hover" role="alert">
		<div class="container-fluid">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			{!! Session::get('message') !!}
		</div>
	</div>
@endif