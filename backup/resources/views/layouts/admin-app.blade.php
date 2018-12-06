<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#536878" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/css/mdb.min.css')}}" rel="stylesheet">
<link href="{{asset('/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    <!--<script src="{{ asset('js/app.js') }}" defer></script>-->
</head>
<body class="fixed-sn white-skin">
    <div id="appp" class="">
     <header>
     <!-- Sidebar navigation -->
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
            <li>
                <form class="search-form" role="search">
                    <div class="form-group md-form mt-0 pt-1 waves-light">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
            </li>
            <!--/.Search Form-->
            <!-- Side navigation links -->
            <li>
            <ul class="collapsible collapsible-accordion">
                    <li><a href="dashboard" class="collapsible-header waves-effect arrow-r"><i class="fa fa-tachometer"></i> Dashboard</a>
                        
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
        <!--/. Sidebar navigation -->
       <nav class="navbar  navbar-expand-lg scrolling-navbar double-nav navbar-dark primary-color">
       
         
        
            <div class="container">
             @guest
             <div class="breadcrumb-dn mr-auto" style="color:#fff;">
                <p>No Name</p>
            </div>
         @else
        <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse black-text" style="color:#fff !important;"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto" style="color:#fff;">
                <p>Admin Dashboard</p>
            </div>
            @endguest  

                  <ul class="nav navbar-nav nav-flex-icons ml-auto">
                  
                  
                  @guest
                            <!--<li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>-->
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
                <li class="nav-item">
                    <a class="nav-link waves-effect"><i class="fa fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect"><i class="fa fa-comments-o"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">{{ Auth::user()->name }}</span></a>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                </li>
@endguest
            </ul>
                    
               
            </div>
        </nav>
</header>
        <main class="py-4" style="min-height:470px;">
            @yield('content')
        </main>
        <footer class="page-footer text-center font-small navbar-dark primary-color pt-4 mt-4 wow fadeIn">
    <!-- Footer Links -->
   <!-- <div class="container text-center text-md-left">
      <div class="row text-center">

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
    </div>
    -->
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://samviti.com/"> Samviti.com</a>
    </div>
    <!-- Copyright -->

  </footer>
        
    </div>
    
 <script type="text/javascript" src="{{asset('/js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/mdb.min.js')}}"></script>

 <script type="text/javascript" src="{{asset('/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/dataTables.bootstrap4.min.js')}}"></script>
    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();

       var container = document.querySelector('.custom-scrollbar');
        Ps.initialize(container, {
            wheelSpeed: 2,
           wheelPropagation: true,
            minScrollbarLength: 20
      });
		
		 $(document).ready(function() {
            $('#datatables').DataTable();
			$('#datatables1').DataTable();
			$('#datatables2').DataTable();
			$('#datatables3').DataTable();
        });
		
		$(document).ready(function () {
            $('select[name="datatables_length"]').material_select();
			$('select[name="datatables1_length"]').material_select();
			$('select[name="datatables2_length"]').material_select();
			$('select[name="datatables3_length"]').material_select();
        });
		 $(document).ready(function () {
            $('.mdb-select').material_select();
        });
		 $('.datepicker').pickadate();
    </script>
    <script type="text/javascript">
(function() {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<script src="{{ asset('js/bootstrap3-typeahead.min.js') }}"></script> 

<script type="text/javascript">
    var path2 = "get-organisation";
    $('input.typeahead').typeahead({
	hint: true,
    highlight: true,
    minLength: 1,
        source:  function (query, process) {
        return $.get(path2, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script>
</body>
</html>
