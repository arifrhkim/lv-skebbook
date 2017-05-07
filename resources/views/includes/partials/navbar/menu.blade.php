@if (Auth::guest())
    <li><a href="{{ url('/login') }}">@lang('actions.login')</a></li>
    <a href="{{ url('/register') }}" class="btn btn-danger navbar-btn">@lang('actions.open-shop')</a>
    <a href="{{ url('/charts') }}" class="btn btn-danger navbar-btn btn-rounded"><i class="fa fa-shopping-basket fa-btn-sm" aria-hidden="true"></i></a>
@else
    <a href="{{ url('/charts') }}" class="btn btn-danger navbar-btn btn-rounded"><i class="fa fa-shopping-basket fa-btn-sm" aria-hidden="true"></i></a>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('profile') }}">Profile</a></li>
            <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ url('shop') }}">Shop</a></li>
            <!--li><a href="{{ url('product') }}">Book</a></li-->

            <li role="separator" class="divider"></li>

            <li>
                <a href="{{ url('/logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </li>

@endif
