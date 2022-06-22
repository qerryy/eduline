<nav class="navbar navbar-default navbar-fixed-top" style="background-color: white;">

      <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}" style="margin-left: 9px; color: #000;">
                Eduline
            </a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">

            @guest
                <ul class="nav navbar-nav">
                    {{-- <li class="active"><a href="./">Home</a></li> --}}
                </ul>
            @else
                <ul class="nav navbar-nav">
                    @if(Auth::User()->admin == 0)
                        <li class="active"><a href="{{ route('kelas', Auth::User()->id) }}">Kelas</a></li>
                    @else
                        <li class="nav-item"><a href="{{ route('user.index') }}">User</a></li>
                        <li class="nav-item"><a href="{{ route('mapel.index') }}">Mata Pelajaran</a></li>
                        <li class="nav-item"><a href="{{ route('jadwal.index') }}">Jadwal</a></li>
                        <li class="nav-item"><a href="{{ route('transaksi.index') }}">Transaksi</a></li>
                    @endif
                </ul>
            @endguest
            
            <ul class="nav navbar-nav navbar-right">

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    {{-- @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif --}}

                @else
                    <li class="active">
                        <a href="./">
                            {{ Auth::user()->username }}<span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest

            </ul>

        </div>

    </div>
</nav>