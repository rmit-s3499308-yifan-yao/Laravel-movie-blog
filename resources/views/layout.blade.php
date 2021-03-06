<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <link rel="stylesheet" href='//fonts.googleapis.com/css?family=Roboto:300,400,500,700'/>
    <link rel="stylesheet" href='//fonts.googleapis.com/icon?family=Material+Icons'/>
    <link rel="stylesheet" href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'/>
    <!--Material Design Bootstrap Theme-->
    <link rel="stylesheet" href='/css/bootstrap-material-design.min.css'/>
    <link rel="stylesheet" href='/css/ripples.min.css'/>
    <!--Font Awesome-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"/>
    <link rel="stylesheet" href='/css/styles.css'/>

    @yield('header')

</head>

<body>

<!--NavBar-->
<div class="navbar navbar-info1" style="background-color: #3e3f3a">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}"><b>Assignment 2</b></a>
        </div>
        <div class="navbar-collapse collapse navbar-inverse-collapse">
            <ul class="nav navbar-nav">
                <li class="{{set_active('/')}}"><a href="{{ url('/') }}">Home</a></li>
                <li><a href="javascript:void(0)">News</a></li>
                <li class="{{set_active('wishlist')}}"><a href="{{url('/wishlist')}}">Wish List</a></li>
                <li><a href="javascript:void(0)">About Us</a></li>

                @yield('navlink')

            </ul>
            {{--<form class="navbar-form navbar-left">--}}
                {{--<div class="form-group">--}}
                    {{--<input type="text" class="form-control col-md-8" placeholder="Search">--}}
                {{--</div>--}}
            {{--</form>--}}
            <ul class="nav navbar-nav navbar-right">
                <li class="{{set_active('search')}}"><a href="{{url('/search')}}"><i class="fa fa-search fa-lg"></i></a></li>
                @if(!Auth::guest())
                    <li class="{{set_active('cart')}}">
                        <a href="{{url('/cart')}}"><i class="fa fa-shopping-cart fa-lg"></i>&nbsp;&nbsp;<span class="badge">{{(session()->has('cart')) ? count(session('cart')) : 0}}</span></a>
                    </li>
                @endif
                <li class="dropdown">
                    {{--<a href="#" data-target="dropdown-menu" class="dropdown-toggle" data-toggle="dropdown">User--}}
                        {{--<b class="caret"></b></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="javascript:void(0)">My Account</a></li>--}}
                        {{--<li><a href="javascript:void(0)">Update Password</a></li>--}}
                        {{--<li><a href="javascript:void(0)">History</a></li>--}}
                        {{--<li class="divider"></li>--}}
                        {{--<li><a href="javascript:void(0)">Sign Out</a></li>--}}
                    {{--</ul>--}}
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                    <i class="fa fa-user fa-lg" aria-hidden="true"></i><span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{url('/account')}}" class="text-center"><b>{{ Auth::user()->name }}</b></a></li>
                                    <li><a href="{{url('/account')}}" class="text-center">My Account</a></li>
                                    <li><a href="{{url('/wishlist')}}" class="text-center">Wish List</a></li>
                                    <li><a href="javascript:void(0)" class="text-center">Settings</a></li>
                                    <li><a href="{{ url('/logout') }}" class="text-center"><i class="fa fa-btn fa-sign-out"></i>&nbsp;Logout</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end NavBar -->

<div id="wrapper">
    <div class="container-fluid">

        @yield('content')

    </div><!--end container-fluid-->
</div><!--end wrapper-->

<!--FOOTER-->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-4 text-center">
                <br/>
                <a href="{{url('/')}}">Home</a>
                <br/>
                <a href="{{url('/')}}">Movies</a>
                <br/>
                <a href="{{url('/wishlist')}}">Wish list</a>
            </div>
            <div class="col-xs-4 text-center">
                <br/>
                <a href="#">About Us</a>
                <br/>
                <a href="#">Contact Us</a>
                <br/>
                <a href="#">FAQ</a>
            </div>
            <div class="col-xs-4 text-center">
                <br/>
                <a href="#">Terms</a>
                <br/>
                <a href="#">Disclaimer</a>
                <br/>
                <a href="#">Privacy</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <hr>
                <p class="text-center" style="color: #ffffff">Copyright &copy; 2016</p>
            </div>
        </div>
    </div>
</footer>
<!--END FOOTER-->


<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='//ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js'></script>
<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='/js/material.min.js'></script>
<script src='/js/ripples.min.js'></script>
<script src='/js/scripts.js'></script>

@yield('script')
</body>
</html>