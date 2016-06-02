<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EcoGIS</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
    <link href="/css/custom_styles.css" rel="stylesheet">
    <link href="/css/fileinput.min.css" rel="stylesheet">

    <!-- ArcGIS dependencies-->
    <link rel="stylesheet" href="https://js.arcgis.com/4.0beta3/esri/css/main.css">
    <script src="https://js.arcgis.com/4.0beta3/"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
@include('modal.form_create_project')
@include('modal.form_add_DEM')
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                EcoGIS
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/home') }}">{{ trans('index.home') }}</a></li>
                {{--<li><a href="/map_editor" class="active">Map editor</a></li>--}}
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{ trans('index.project') }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="#" data-toggle="modal" data-target="#create-project">{{ trans('index.new_project') }}</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#add-dem">{{ trans('index.open_project') }}</a>
                        </li>
                        <li><a href="#">{{ trans('index.save_project') }}</a></li>
                        <li><a href="#">{{ trans('index.prepare_calculation') }}</a></li>
                        <li><a href="#">{{ trans('index.start_calculation') }}</a></li>
                    </ul>
                </li>

                <li><a href="">{{ trans('index.project_property') }}</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{ trans('index.model') }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="">{{ trans('index.calculation_properties') }}</a></li>
                        <li><a href="">{{ trans('index.geometry_of_the_computational_domain') }}</a></li>
                        <li><a href="">{{ trans('index.border_conditions') }}</a></li>
                        <li><a href="">{{ trans('index.physical_factors') }}</a></li>
                    </ul>
                </li>

                <li><a href="">{{ trans('index.settings') }}</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Language links -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{ \Config::get('language')[App::getLocale()] }}
                    </a>

                    <ul class="dropdown-menu">
                        @foreach (\Config::get('language') as $lang => $language)
                            @if ($lang != \App::getLocale())
                                <li>
                                    <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </li>
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">{{ trans('index.login') }}</a></li>
                    <li><a href="{{ url('/register') }}">{{ trans('index.register') }}</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i
                                            class="fa fa-btn fa-sign-out"></i>{{ trans('index.logout') }}</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')

        <!-- JavaScripts -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>

</body>
</html>
