
<header >
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}"><h2> <em>e-Commerce</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('showcart')}}">
                                    <i class="fa fa-shopping-cart"></i>
                                    [{{$count}}]</a>
                            </li>

                            <x-app-layout>

                            </x-app-layout>

                        @else
                            <li> <a class="nav-link"  href="{{ route('login') }}" >Log in</a>

                            @if (Route::has('register'))
                                <li><a class="nav-link" href="{{ route('register') }}">Register</a>
                                    @endif
                                    @endauth
                                    @endif
                                </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
