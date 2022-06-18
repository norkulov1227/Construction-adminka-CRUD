<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{asset('assets/css/mdb.min.css')}}">

  <!-- Your custom styles (optional) -->
  <style>

  </style>
</head>

<body class="fixed-sn white-skin">

  <!--Main Navigation-->
  <header>

    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-4 fixed">
      <ul class="custom-scrollbar">
        <!-- Logo -->
        <li class="logo-sn waves-effect">
          <div class="text-center">
            <a href="#" class="pl-0"><img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" class=""></a>
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
            <li>
                <a href="#" class="collapsible-header waves-effect arrow-r">
                    <i class="fas fa-tachometer-alt"></i>
                Dashboards

                </a>
            </li>
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-image"></i> Pages<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="../pages/login.html" class="waves-effect">Login</a>
                  </li>
                  <li><a href="../pages/register.html" class="waves-effect">Register</a>
                  </li>
                  <li><a href="../pages/customers.html" class="waves-effect">Customers</a>
                  </li>
                </ul>
              </div>
            </li>

            <li>
                <a href="{{route('admin.index')}}" class="collapsible-header waves-effect arrow-r">
                    <i class="fas fa-list"></i>
                    Product list
                </a>
            </li>

            <!-- Simple link -->
            <li><a href="#" class="collapsible-header waves-effect"><i class=" far fa-bell"></i>
                Alerts</a></li>

            <li><a href="#" class="collapsible-header waves-effect"><i class=" fas fa-bolt"></i>
                Modals</a></li>

            <li><a href="#" class="collapsible-header waves-effect"><i class=" fas fa-chart-pie"></i>
                Charts</a></li>

            <li><a href="#" class="collapsible-header waves-effect"><i class=" far fa-calendar-check"></i>
                Calendar</a></li>

            <li><a href="#" class="collapsible-header waves-effect"><i class=" fas fa-th-large"></i>
                Sections</a></li>

          </ul>
        </li>
        <!--/. Side navigation links -->
      </ul>
      <div class="sidenav-bg mask-strong"></div>
    </div>
    <!--/. Sidebar navigation -->

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">
      <!-- SideNav slide-out button -->
      <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fas fa-bars"></i></a>
      </div>
      <!-- Breadcrumb-->
      <div class="breadcrumb-dn mr-auto">
        <p>Dashboard v.6</p>
      </div>

      <!--Navbar links-->
      <ul class="nav navbar-nav nav-flex-icons ml-auto">

        <!-- Dropdown -->
        <li class="nav-item dropdown notifications-nav">
          <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="badge red">3</span> <i class="fas fa-bell"></i>
            <span class="d-none d-md-inline-block">Notifications</span>
          </a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">
              <i class="fas fa-money mr-2" aria-hidden="true"></i>
              <span>New order received</span>
              <span class="float-right"><i class="far  fa-clock" aria-hidden="true"></i> 13 min</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-money mr-2" aria-hidden="true"></i>
              <span>New order received</span>
              <span class="float-right"><i class="far  fa-clock" aria-hidden="true"></i> 33 min</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-line-chart mr-2" aria-hidden="true"></i>
              <span>Your campaign is about to end</span>
              <span class="float-right"><i class="far  fa-clock" aria-hidden="true"></i> 53 min</span>
            </a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect"><i class="far fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span></a>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Log Out</a>
            <a class="dropdown-item" href="#">My account</a>
          </div>
        </li>

      </ul>
      <!--/Navbar links-->
    </nav>
    <!-- /.Navbar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
        <div class="">
            @yield('content');
        </div>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer pt-0 mt-5 mdb-color lighten-4">

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
      <div class="container-fluid">
        © 2018 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>

      </div>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->


  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('assets/js/mdb.min.js')}}"></script>
  <!--Initializations-->
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
