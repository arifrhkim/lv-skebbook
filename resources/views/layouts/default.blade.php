<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('includes.partials.head')
</head>
<body>
    <div id="app">
        <!-- Navbar -->
        @include('includes.partials.navbar')

        <div class="content">
        	<!-- Notifications -->
        	@include('includes.modules.notifications')
            <!-- Content -->
            @yield('content')
        </div>
    </div>

    @include('includes.partials.footer')
</body>
</html>
