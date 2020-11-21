<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->

    <!-- Styles -->
</head>
<body>
    <div>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <nav style="" class="navbar navbar-inverse">
                              <div class="container-fluid">
                                <div class="navbar-header">
                                  <a style="" class="navbar-brand" href="#">STUDENTS</a>
                                </div>
                                <ul class="nav navbar-nav">
                                  <li class="active"><a href="#">Home</a></li>
                                  
                                  <li><a href="#">ABOUT US</a></li>
                                  <li><a href="#">OFFICERS</a></li>
                                  <li><a href="#">EXAMINATION</a></li>
                                  <li><a href="#">STUDENTS</a></li>
                                  <li><a href="#">ACDAMICS</a></li>
                                  <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">SPORTS
                                    <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href=>
                                        xyz
                                        </a>
                                      </li>
                                      <li><a class="dropdown-item" href=>
                                        abcd
                                        </a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Auth::user()->name }}
                                    <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                      </li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </nav>
                        @endguest
                    </ul>
                </div>
            </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
