<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid container-addon">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/web/brand-logo.png') }}" title="{{ config('app.name', 'Laravel') }}" alt="{{ config('app.name', 'Laravel') }}">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->

            <!-- Center Side Of Navbar -->
            <form class="navbar-form" role="search">
                <div class="form-group">
                    {{ Form::text('q', null, ['class' => 'form-control', 'placeholder' => trans('actions.search')]) }}
                </div>
            </form>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @include('includes.partials.navbar.menu')
            </ul>
        </div>
    </div>
</nav>