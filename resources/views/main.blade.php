<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">
        <!--js files-->
        <script src="{{ url('/') }}/libs/jquery/jquery-3.2.1.min.js"></script>
        <script src="{{ url('/') }}/libs/bootstrap3/js/bootstrap.min.js"></script>
        <script src="{{ url('/') }}/libs/fontawesome/js/fontawesome-all.min.js"></script>
        <script src="{{ url('/') }}/js/main.js"></script>
        <!--css files-->
        <link rel="stylesheet" href="{{ url('/') }}/libs/bootstrap3/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ url('/') }}/css/main.min.css">
        <link rel="icon" type="image/vnd.microsoft.icon" href="{{ url('/') }}/images/favicon-gamepad.ico"/>
        @yield('script')
    </head>
    <body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('/') }}/images/logo.png" class="logo" alt=""></a>
            </div>
            <ul class="nav navbar-nav navbar-right collapse navbar-collapse" id="myNavbar">
                <li id="1"><a href="{{ url('/first') }}">Galvenā</a></li>
                <li id="2"><a href="{{ url('/games') }}">Spēles</a></li>
                <li id="3"><a href="{{ url('/gallery') }}">Galerija</a></li>
                <li id="4"><a href="{{ url('/prices') }}">Cenas</a></li>
                <li class="dropdown" id="5">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profils<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/') }}/registration.php">Reģistrēties</a></li>
                        <li><a href="{{ url('/') }}/login.php">Pieslēgties</a></li>
                    </ul>
                </li>
                <li class="dropdown" id="7">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kontakti<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/contacts') }}">Kontakti</a></li>
                        <li><a href="{{ url('/contactus') }}">Saziņa</a></li>
                    </ul>
                </li>
                <li id="8"><a href="{{ url('/about') }}">Par Mums</a></li>
            </ul>
            <form class="navbar-form navbar-right" action="#">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Meklēt">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </nav>
    <div class="container-fluid text-center main">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                @yield('asideRight')
            </div>
            <div class="col-sm-8 text-left">
                @yield('content')
            </div>
            <div class="col-sm-2">
                @yield('asideLeft')
            </div>
        </div>
    </div>
    <footer class="container-fluid">
        Artūrs Kirņickis EDP1 Inc. 2017-2018.gads
    </footer>
    </body>
</html>
