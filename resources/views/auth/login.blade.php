@extends('layouts.auth')

@section('sidebar')
<div class="auth-upper-text">
    <h4>Skebbook</h4>
    <p>Entreprise edition</p>
</div>
<div class="auth-lower-text">
    <h2>Tingkatkan potensi pemasaran produk anda.</h2>
    <p>Jadi yang terdepan untuk +10.000 pembeli</p>

    <ul class="list-inline list-inline-bullet">
        <li>Beriklan produk</li>
        <li>Verified store</li>
    </ul>

    <a href="#" class="btn btn-warning">Start free trial</a>
</div>
@endsection

@section('content')

    <h1>@lang('titles.sign-in-to')</h1>
    <p>@lang('titles.sign-in-to-sub')</p>

    <form role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email">E-Mail Address</label>

                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                    </label>
                </div>
        </div>

        <div class="form-group text-center">
                <button type="submit" class="btn btn-info btn-block">Login</button>
                <a class="btn btn-link text-center" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
        </div>
    </form>

    <p class="text-center">Atau melalui</p>

    <div class="row content">
        <div class="col-md-6 col-sm-6"><a href="{{ url('auth/facebook') }}" class="btn btn-block btn-primary content">Login with facebook</a></div>
        <div class="col-md-6 col-sm-6"><a href="{{ url('auth/google') }}" class="btn btn-block btn-danger content">Login with google</a></div>
    </div>

@endsection
