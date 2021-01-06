<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        /*
* Globals
*/

        /* Links */
        a,
        a:focus,
        a:hover {
            color: #fff;
        }

        /* Custom default button */
        .btn-secondary,
        .btn-secondary:hover,
        .btn-secondary:focus {
            color: #333;
            text-shadow: none; /* Prevent inheritance from `body` */
            background-color: #fff;
            border: .05rem solid #fff;
        }


        /*
         * Base structure
         */

        html,
        body {
            height: 100%;
            background-color: rgba(0,0,0,0.8);
        }

        body {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            -ms-flex-pack: center;
            -webkit-box-pack: center;
            justify-content: center;
            color: #fff;
            text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
            box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
        }

        .cover-container {
            max-width: 42em;
        }


        /*
         * Header
         */
        .masthead {
            margin-bottom: 2rem;
        }

        .masthead-brand {
            margin-bottom: 0;
        }

        .nav-masthead .nav-link {
            padding: .25rem 0;
            font-weight: 700;
            color: rgba(255, 255, 255, .5);
            background-color: transparent;
            border-bottom: .25rem solid transparent;
        }

        .nav-masthead .nav-link:hover,
        .nav-masthead .nav-link:focus {
            border-bottom-color: rgba(255, 255, 255, .25);
        }

        .nav-masthead .nav-link + .nav-link {
            margin-left: 1rem;
        }

        .nav-masthead .active {
            color: #fff;
            border-bottom-color: #fff;
        }

        @media (min-width: 48em) {
            .masthead-brand {
                float: left;
            }
            .nav-masthead {
                float: right;
            }
        }


        /*
         * Cover
         */
        .cover {
            padding: 0 1.5rem;
        }
        .cover .btn-lg {
            padding: .75rem 1.25rem;
            font-weight: 700;
        }


        /*
         * Footer
         */
        .mastfoot {
            color: rgba(255, 255, 255, .5);
        }
    </style>

</head>

<body class="text-center">
<div style="background:  url('https://harvo.uk/wp-content/uploads/2020/10/DSC05371-Large.jpg') center center no-repeat; background-size: cover; bottom: 0px; top: 0px; left: 0px; right: 0px; position: absolute; z-index:-1; "></div>
<div class="container d-flex h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
        <div class="inner">
            <a href="{{ url('/') }}">
                <h3 class="masthead-brand">store@harvo.uk</h3>
            </a>
            <!-- Authentication Links -->
            <nav class="nav nav-masthead justify-content-center">
                @guest
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    <a class="nav-link" href="/home" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                        My Account
                    </a>

                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </nav>
        </div>
    </header>
    <div class="cover-container d-flex p-3 mx-auto flex-column">
        <main role="main" class="inner cover">
            @yield('content')
        </main>
    </div>
    <footer class="mastfoot mt-auto">
        <div class="inner">
            <p>Photography Store by <a href="https://harvo.uk/">Harvey Dobson</a>.</p>
        </div>
    </footer>
</div>

</body>
</html>
