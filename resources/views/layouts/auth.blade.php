<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('includes.partials.head')
</head>
<body>
    <div id="app">
        <!-- Navbar -->
        @include('includes.partials.navbar')
        <!-- Notifications -->
        @include('includes.modules.notifications')

        <div class="row row-eq-height container">
            <div class="col-sm-6 col-md-4 hidden-xs hidden-sm img-cover" style="background-image: url('../images/web/login.jpg');">
                <!-- Sidebar -->
                @yield('sidebar')
            </div>
            <div class="col-sm-6 col-md-4 col-md-offset-2 col-sm-offset-4 content">
                <!-- Content -->
                @yield('content')    
            </div>
        </div>

    </div>

    @include('includes.partials.footer')
</body>
</html>
