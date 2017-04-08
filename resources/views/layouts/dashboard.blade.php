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
        
        <div class="container-fluid">
            <div class="row row-eq-height" id="dashboard">
            	<div class="col-md-2" id="sidebar">
                    @include('includes.modules.sidebar')   
                </div>
                <div class="col-md-10 content" id="content">
                    <!-- Content -->
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    @include('includes.partials.footer')
</body>
</html>
