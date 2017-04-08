@extends('layouts.auth')

@section('content')
    
    <h1>@lang('titles.register-to')</h1>
    <p>@lang('titles.register-to-sub')</p>

    <form role="form" method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name">Name</label>

                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email">E-Mail Address</label>

                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password">Password</label>

                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
        </div>

        <div class="form-group">
            <label for="password-confirm">Confirm Password</label>

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>

        <div class="form-group">
                <button type="submit" class="btn btn-info btn-block">Register</button>
        </div>
    </form>

    <p class="text-center">Atau melalui</p>

    <div class="row content">
        <div class="col-md-6 col-sm-6"><a href="{{ url('auth/facebook') }}" class="btn btn-block btn-primary content">Login with facebook</a></div>
        <div class="col-md-6 col-sm-6"><a href="{{ url('auth/google') }}" class="btn btn-block btn-danger content">Login with google</a></div>
    </div>

@endsection
