<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#536878" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/css/mdb.min.css')}}" rel="stylesheet">
</head>
<body>
    <div id="app">
    
    <div id="slide-out" class="side-nav sn-bg-4 fixed">
            <ul class="custom-scrollbar">
            <!-- Logo -->
            <li class="logo-sn waves-effect">
                <div class="text-center">
                    <a href="#" class="pl-0"><img src="{{url('/img/logocgi.png')}}" class="" style="height:70px;"></a>
                </div>
            </li>
            <!--/. Logo -->

            <!--Search Form-->
            <!--<li>
                <form class="search-form" role="search">
                    <div class="form-group md-form mt-0 pt-1 waves-light">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
            </li>-->
            <!--/.Search Form-->
            <!-- Side navigation links -->
            <li>
            <ul class="collapsible collapsible-accordion">
                    <li><a href="{{url('/admin')}}" class="collapsible-header waves-effect arrow-r"><i class="fa fa-tachometer"></i> Dashboard</a>
                        
                    </li>
                    
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-photo"></i> Request<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="{{url('/admin/labs')}}" class="waves-effect">Labs</a>
                                </li>
                                <li><a href="{{url('/admin/vendors')}}" class="waves-effect">Vendors</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                   <!-- <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-photo"></i> Pages<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../pages/login.html" class="waves-effect">Login</a>
                                </li>
                                <li><a href="../pages/register.html" class="waves-effect">Register</a>
                                </li>
                                <li><a href="../pages/pricing.html" class="waves-effect">Pricing</a>
                                </li>
                                <li><a href="../pages/about.html" class="waves-effect">About us</a>
                                </li>
                                <li><a href="../pages/single.html" class="waves-effect">Single post</a>
                                </li>
                                <li><a href="../pages/post.html" class="waves-effect">Post listing</a>
                                </li>
                                <li><a href="../pages/landing.html" class="waves-effect">Landing page</a>
                                </li>
                                <li><a href="../pages/customers.html" class="waves-effect">Cusomers</a>
                                </li>
                                <li><a href="../pages/invoice.html" class="waves-effect">Invoice</a>
                                </li>
                                <li><a href="../pages/page-creator.html" class="waves-effect">Page Creator</a>
                                </li>
                                <li><a href="../pages/support.html" class="waves-effect">Support</a>
                                </li>
                                <li><a href="../pages/chat.html" class="waves-effect">Chat</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-user"></i> Profile<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../profile/basic-1.html" class="waves-effect">Basic 1</a>
                                </li>
                                <li><a href="../profile/basic-2.html" class="waves-effect">Basic 2</a>
                                </li>
                                <li><a href="../profile/extended.html" class="waves-effect">Extended</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-css3"></i> CSS<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../css/grid.html" class="waves-effect">Grid system</a>
                                </li>
                                <li><a href="../css/media.html" class="waves-effect">Media object</a>
                                </li>
                                <li><a href="../css/utilities.html" class="waves-effect">Utilities / helpers</a>
                                </li>
                                <li><a href="../css/code.html" class="waves-effect">Code</a>
                                </li>
                                <li><a href="../css/icons.html" class="waves-effect">Icons</a>
                                </li>
                                <li><a href="../css/images.html" class="waves-effect">Images</a>
                                </li>
                                <li><a href="../css/typography.html" class="waves-effect">Typography</a>
                                </li>
                                <li><a href="../css/animations.html" class="waves-effect">Animations</a>
                                </li>
                                <li><a href="../css/colors.html" class="waves-effect">Colors</a>
                                </li>
                                <li><a href="../css/hover.html" class="waves-effect">Hover effects</a>
                                </li>
                                <li><a href="../css/masks.html" class="waves-effect">Masks</a>
                                </li>
                                <li><a href="../css/shadows.html" class="waves-effect">Shadows</a>
                                </li>
                                <li><a href="../css/skins.html" class="waves-effect">Skins</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-th"></i> Components<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../components/buttons.html" class="waves-effect">Buttons</a>
                                </li>
                                <li><a href="../components/cards.html" class="waves-effect">Cards</a>
                                </li>
                                <li><a href="../components/panels.html" class="waves-effect">Panels</a>
                                </li>
                                <li><a href="../components/list.html" class="waves-effect">List group</a>
                                </li>
                                <li><a href="../components/pagination.html" class="waves-effect">Pagination</a>
                                </li>
                                <li><a href="../components/progress.html" class="waves-effect">Progress bars</a>
                                </li>
                                <li><a href="../components/tabs.html" class="waves-effect">Tabs & pills</a>
                                </li>
                                <li><a href="../components/tags.html" class="waves-effect">Tags, labels & badges</a>
                                </li>
                                <li><a href="../components/collapse.html" class="waves-effect">Collapse</a>
                                </li>
                                <li><a href="../components/date.html" class="waves-effect">Date picker</a>
                                </li>
                                <li><a href="../components/time.html" class="waves-effect">Time picker</a>
                                </li>
                                <li><a href="../components/tooltips.html" class="waves-effect">Tooltips</a>
                                </li>
                                <li><a href="../components/popovers.html" class="waves-effect">Popovers</a>
                                </li>
                                <li><a href="../components/stepper.html" class="waves-effect">Stepper</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-check-square-o"></i> Forms<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../forms/basic.html" class="waves-effect">Basic</a>
                                </li>
                                <li><a href="../forms/extended.html" class="waves-effect">Extended</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-table"></i> Tables<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../tables/basic.html" class="waves-effect">Basic</a>
                                </li>
                                <li><a href="../tables/extended.html" class="waves-effect">Extended</a>
                                </li>
                                <li><a href="../tables/datatables.html" class="waves-effect">DataTables.net</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-map"></i> Maps<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../maps/google.html" class="waves-effect">Google Maps</a>
                                </li>
                                <li><a href="../maps/full.html" class="waves-effect">Full screen map</a>
                                </li>
                                <li><a href="../maps/vector.html" class="waves-effect">Vector world map</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                   
                    <li><a href="../alerts/alerts.html" class="collapsible-header waves-effect"><i class="fa fa-bell-o"></i> Alerts</a></li>

                    <li><a href="../modals/modals.html" class="collapsible-header waves-effect"><i class="fa fa-bolt"></i> Modals</a></li>

                    <li><a href="../charts/charts.html" class="collapsible-header waves-effect"><i class="fa fa-pie-chart"></i> Charts</a></li>

                    <li><a href="../calendar/calendar.html" class="collapsible-header waves-effect"><i class="fa fa-calendar-check-o"></i> Calendar</a></li>

                    <li><a href="../sections/sections.html" class="collapsible-header waves-effect"><i class="fa fa-th-large"></i> Sections</a></li>
-->
                </ul>
            </li>
            <!--/. Side navigation links -->
            </ul>
            <div class="sidenav-bg mask-strong"></div>
        </div>
    
        <nav class="navbar  navbar-expand-lg scrolling-navbar double-nav navbar-dark secondary-color">
       
         
        
            <div class="container">
             @guest
             <div class="breadcrumb-dn mr-auto" style="color:#fff;">
                <p>{{ config('app.name') }}</p>
            </div>
         @else
        <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse black-text" style="color:#fff !important;"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto" style="color:#fff;">
                <p><a href="{{url('/admin')}}" >{{ config('app.name') }} | Admin</a></p>
            </div>
            @endguest  

                  <ul class="nav navbar-nav nav-flex-icons ml-auto">
                  
                  
                  @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else

                <!-- Dropdown -->
                <li class="nav-item dropdown notifications-nav">
                    <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="badge red">3</span> <i class="fa fa-bell"></i>
                        <span class="d-none d-md-inline-block">Notifications</span>
                    </a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-money mr-2" aria-hidden="true"></i>
                            <span>New order received</span>
                            <span class="float-right"><i class="fa fa-clock-o" aria-hidden="true"></i> 13 min</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-money mr-2" aria-hidden="true"></i>
                            <span>New order received</span>
                            <span class="float-right"><i class="fa fa-clock-o" aria-hidden="true"></i> 33 min</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-line-chart mr-2" aria-hidden="true"></i>
                            <span>Your campaign is about to end</span>
                            <span class="float-right"><i class="fa fa-clock-o" aria-hidden="true"></i> 53 min</span>
                        </a>
                    </div>
                </li>
                
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">{{ Auth::user()->name }}</span></a>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <a class="dropdown-item" href="#">My account</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    </div>
                </li>
@endguest
            </ul>
                    
               
            </div>
        </nav>

        <main class="py-3">
            @yield('content')
        </main>
    </div>
    <!--Main layout-->
<footer class="page-footer text-center secondary-color font-small indigo pt-2 mt-2 wow fadeIn"> 
 <!-- <div class="container text-center text-md-left">

    
      <div class="row">

		<div class="pb-4 text-center">
            <a href="https://www.facebook.com/mdbootstrap" target="_blank">
                <i class="fa fa-facebook mr-3"></i>
            </a>

            <a href="https://twitter.com/MDBootstrap" target="_blank">
                <i class="fa fa-twitter mr-3"></i>
            </a>

            <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
                <i class="fa fa-youtube mr-3"></i>
            </a>

            <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                <i class="fa fa-google-plus mr-3"></i>
            </a>

            <a href="https://dribbble.com/mdbootstrap" target="_blank">
                <i class="fa fa-dribbble mr-3"></i>
            </a>

            <a href="https://pinterest.com/mdbootstrap" target="_blank">
                <i class="fa fa-pinterest mr-3"></i>
            </a>

            <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
                <i class="fa fa-github mr-3"></i>
            </a>

            <a href="http://codepen.io/mdbootstrap/" target="_blank">
                <i class="fa fa-codepen mr-3"></i>
            </a>
        </div>

      </div>
     
    </div>-->
  <!--Copyright-->
  <div class="footer-copyright py-3 text-center">
    <div class="container-fluid"> © 2018 Copyright: <a href="https://samviti.com/" target="_blank"> samviti.com</a> </div>
  </div>
  <!--/.Copyright--> 
  
</footer>
  <script type="text/javascript" src="{{asset('/js/jquery-3.3.1.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('/js/popper.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('/js/bootstrap.js')}}"></script> 
<script type="text/javascript" src="{{url('/js/mdb.min.js')}}"></script>  
<script type="text/javascript" src="{{asset('/js/jquery.dataTables.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('/js/dataTables.bootstrap4.min.js')}}"></script> 

<script>// SideNav Initialization
        $(".button-collapse").sideNav();

        var container = document.querySelector('.custom-scrollbar');
        </script>
        
         <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();

        var container = document.querySelector('.custom-scrollbar');
        Ps.initialize(container, {
            wheelSpeed: 2,
            wheelPropagation: true,
            minScrollbarLength: 20
        });

        // Data Picker Initialization
        $('.datepicker').pickadate();

        // Material Select Initialization
        $(document).ready(function () {
            $('.mdb-select').material_select();
        });

        // Tooltips Initialization
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

    <!-- Charts -->
    <script>
        // Small chart
        $(function () {
            $('.min-chart#chart-sales').easyPieChart({
                barColor: "#4285F4",
                onStep: function (from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });
        });



        //bar
        var ctxB = document.getElementById("barChart").getContext('2d');
        var myBarChart = new Chart(ctxB, {
            type: 'bar',
            data: {
                labels: ["January", "Febuary", "March", "April", "May"],
                datasets: [{
                    label: '# of Votes',
                    data: [13, 19, 8, 11, 5],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.3)',
                        'rgba(41, 182, 246, 0.3)',
                        'rgba(255, 187, 51, 0.3)',
                        'rgba(66, 133, 244, 0.3)',
                        'rgba(153, 102, 255, 0.3)',

                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(41, 182, 246, 1)',
                        'rgba(255, 187, 51, 1)',
                        'rgba(66, 133, 244, 1)',
                        'rgba(153, 102, 255, 1)',

                    ],
                    borderWidth: 2
                }]
            },
            optionss: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>

        
</body>
</html>
