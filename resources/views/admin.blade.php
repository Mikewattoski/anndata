<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>Conotizer Admin</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>


    

    {{Html::style('assets/css/animate.min.css')}}
    {{Html::style('assets/css/bootstrap.min.css')}}
    {{Html::style('assets/css/paper-dashboard.css')}}
    {{Html::style('http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}
    {{Html::style('https://fonts.googleapis.com/css?family=Muli:400,300')}}
    {{Html::style('assets/css/themify-icons.css')}}
    
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="#FF4A52" >

        <div class="sidebar-wrapper" style="background-color: #040E27 !important;"  >
            <div class="logo"  >
                <a href="/" class="simple-text">
                    @if(Auth::user()->role_id==2)Company Dashboard @else Farmer Dashboard @endif
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="/home">
                        <i class="ti-panel"></i>
                       <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a @if(Auth::user()->role_id==2)href="/company/profile" @else href="/farmer/profile" @endif>
                        <i class="ti-archive"></i>
                        <p>Profile</p>
                    </a>
                </li>
@if(Auth::user()->profile_complete==1)
                
@if(Auth::user()->role_id==1)
<li>
                    <a  @if(Auth::user()->role_id==2)href="/company/order" @else href="/farmer/stock" @endif>
                        <i class="ti-archive"></i>
                        <p>@if(Auth::user()->role_id==2)Add Order @else Add Stock @endif</p>
                    </a>
                </li>
                @endif{{-- <li>
                    <a  @if(Auth::user()->role_id==2)href="/company/order" @else href="/farmer/order" @endif>
                        <i class="ti-view-list-alt"></i>
                        <p>View Products</p>
                    </a>
                </li><li>
                    <a  @if(Auth::user()->role_id==2)href="/company/order" @else href="/farmer/order" @endif>
                        <i class="ti-archive"></i>
                        <p>view shop</p>
                    </a>
                </li>
                 --}}
                <li>
                    <a  @if(Auth::user()->role_id==2)href="/company/order" @else href="/farmer/order" @endif>
                        <i class="ti-calendar"></i>
                        <p>Orders</p>
                    </a>
                </li>
                
                @endif
                {{-- <li>
                    <a  @if(Auth::user()->role_id==2)href="/company/order" @else href="/farmer/order" @endif>
                        <i class="fa fa-users"></i>
                        <p>Users{{Auth::user()->state_id}}</p>
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
<div class="main-panel">
        <nav class="navbar navbar-default" style="background-color: #FF4A52 !important;"  >
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#" style="color: #FFF !important;" > @yield('head')</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #FFF !important;" >
                                <i class="ti-settings"></i>
                                {{-- <p>{{ auth()->guard('admin')->check() ? auth()->guard()->user()->name : 'Account' }}</p> --}}
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a @if(Auth::user()->role_id==2)href="/company/profile" @else href="/farmer/profile" @endif>Profile</a></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                 </a><form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                    @csrf
                                </form>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
  @yield('content')
        
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="">
                                Contact
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>
                    , made with <i class="fa fa-heart heart"></i> by <a href="">Runntimeterror</a>
                </div>
            </div>
        </footer>
 

    </div>
</div>

</body>
{{Html::script('assets/js/jquery-1.10.2.js')}}
{{Html::script('assets/js/bootstrap.min.js')}}

</html>
