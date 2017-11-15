
<header id="header">
    <div class="logo"><a href={{ route('index') }}>企業應用系統開發</a></div>

    <!-- Authentication Links -->
    @if (Auth::guest())
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    @else

            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>



                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>


    @endif

    <a href="#menu"><span>Menu</span></a>

</header>
