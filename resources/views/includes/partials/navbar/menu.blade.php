@if (Auth::guest())
    <li><a href="{{ url('/login') }}">@lang('actions.login')</a></li>
    <li>
      <p class="navbar-btn">
        <a href="{{ url('/register') }}" class="btn btn-danger">@lang('actions.open-shop')</a>
        <a href="{{ url('/carts') }}" class="btn btn-danger btn-rounded"><i class="fa fa-shopping-basket fa-btn-sm" aria-hidden="true"></i></a>
        <span class="badge badge-notify">7</span>
      </p>
    </li>
@else
    <li>
      @if (!Auth::user()->profile)
        <img src="{{ url('images/default/avatar.png') }}" class="img-responsive img-circle img-avatar" alt="{{ Auth::user()->name }}">
      @else
        <img src="{{ Auth::user()->profile->avatar ? Cloudder::show(Auth::user()->profile->avatar, ['quality' => 'auto', 'fetch_format' => 'auto']) : url('images/default/avatar.png') }}" class="img-circle img-responsive img-avatar" alt="">
      @endif
    </li>
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
    <li>
      <p class="navbar-btn">
        <a href="{{ url('/carts') }}" class="btn btn-danger btn-rounded"><i class="fa fa-shopping-basket fa-btn-sm" aria-hidden="true"></i></a>
        <span class="badge badge-notify">7</span>
      </p>
    </li>

@endif
