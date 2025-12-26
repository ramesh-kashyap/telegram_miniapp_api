
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>User Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico.png">

        <!-- App css -->
        <link href="{{asset('')}}assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="{{asset('')}}assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="{{asset('')}}assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">

    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">
    
                <!-- LOGO -->
                <a href="index.html" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="assets/images/logo.png" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/logo_sm.png" alt="" height="16">
                    </span>
                </a>

                <!-- LOGO -->
                <a href="index.html" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/logo_sm_dark.png" alt="" height="16">
                    </span>
                </a>
    
                <div class="h-100" id="leftside-menu-container" data-simplebar="">

                    <!--- Sidemenu -->





                    <ul class="side-nav">

                        <li class="side-nav-title side-nav-item">Navigation</li>

{{--                       
                        <li class="side-nav-it">
                            <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                
                                <span> Dashboards </span>
                            </a>
                            <div class="collapse" id="sidebarDashboards">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="/dashboard">Admin Dashboard</a>
                                    </li>

                                </ul>
                            </div>
                        </li> --}}

             
            <li class="side-nav-item">
    <a href="{{ route('dashboard') }}" class="side-nav-link">
        <i class="uil-home-alt"></i>
        <span> Dashboard</span>
    </a>
</li>



          <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link collapsed">
                                <i class="uil-calender"></i>
                                <span> Activation </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerce" style="">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('total.user') }}">Total User</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('active.user') }}">Active User</a>
                                    </li>

                                      <li>
                                        <a href="{{ route('pending.user') }}">Pending User</a>
                                    </li>

                                    
                                    
                                </ul>
                            </div>
                        </li>









          <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommerc" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link collapsed">
                                <i class="uil-calender"></i>
                                <span> Tasks </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerc" style="">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('tasks') }}">Task List</a>
                                    </li>

                                      <li>
                                        <a href="{{ route('create_task') }}">Create  Task List</a>
                                    </li>

                                    
                                    
                                </ul>
                            </div>
                        </li>


        
          <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommer" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link collapsed">
                                <i class="uil-calender"></i>
                                <span> Daily Task </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommer" style="">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('daily_tasks') }}">Daily Task List</a>
                                    </li>


                                    <li>
                                        <a href="{{ route('create_daily_task') }}">Create Daily Task</a>
                                    </li>

                                    
                                </ul>
                            </div>
                        </li>








      
      
                        <li class="side-nav-item">

                            <a data-bs-toggle="collapse" href="#sidebarEma" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                                <i class="uil-envelope"></i>
                                <span> Deposite </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse " id="sidebarEma" style="">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('deposit-report') }}">Deposite Report</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('fund-report') }}">Fund Report</a>
                                    </li>
                                      <li>
                                        <a href="{{ route('approval.deposite') }}">Approval Deposite</a>
                                    </li>
                                </ul>
                            </div>
                        </li>





                        
                        <li class="side-nav-item">

                            <a data-bs-toggle="collapse" href="#sidebarEmai" aria-expanded="false" aria-controls="sidebarEmai" class="side-nav-link">
                                <i class="uil-briefcase"></i>
                                <span> Withdrawal</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse " id="sidebarEmai" style="">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('pending.withdrawal') }}">Pending  Withdrawal</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('reject.withdrawal') }}">Rejected Withdrawal</a>
                                    </li>
                                      <li>
                                        <a href="{{ route('approval.withdrawal') }}">Approval Withdrawal</a>
                                    </li>
                                </ul>
                            </div>
                        </li>



                        
                        {{-- <li class="side-nav-item">

                            <a data-bs-toggle="collapse" href="#sidebar1" aria-expanded="true" aria-controls="sidebarEmai" class="side-nav-link">
                                <i class="uil-user-square"></i>

                                <span> Profile Summary</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse show" id="sidebar1" style="">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="apps-email-inbox.html">Passive income</a>
                                    </li>
                                    <li>
                                        <a href="apps-email-read.html">Booster income</a>
                                    </li>
                                      <li>
                                        <a href="apps-email-read.html">Reward Bonus</a>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}


  <li class="side-nav-item">
    <a data-bs-toggle="collapse"
       href="#sidebar1"
       aria-expanded="false"
       aria-controls="sidebar1"
       class="side-nav-link">
        <i class="uil-user-square"></i>
        <span> Profile Summary</span>
        <span class="menu-arrow"></span>
    </a>


    
    <div class="collapse" id="sidebar1">
        <ul class="side-nav-second-level">
            <li><a href='{{ route('roi.income') }}'>Daily Roi Income</a></li>
            <li><a href="{{ route('daily.referral.income') }}">Daily Referral Income</a></li>
            <li><a href="{{ route('level.income') }}">Level Income</a></li>
        </ul>
    </div>
</li>




                        
      <li class="side-nav-item">
    <a href="{{ route('change.password') }}" aria-expanded="false" aria-controls="dashboard1" class="side-nav-link">
        <i class="uil-lock"></i>
        <span> Change Password</span>
    </a>

      </li>


            <li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#dashboard1" aria-expanded="false" aria-controls="dashboard1" class="side-nav-link">
        <i class="uil-sign-out-alt"></i>
        <span> Logout</span>
    </a>

      </li>




                    </ul>








                    <!-- Help Box -->

                    <!-- end Help Box -->
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-menu float-end mb-0">

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                        <img src="assets/images/users/avatar-1.jpg.png" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name">Soeng Souy</span>
                                        <span class="account-position">Founder</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle me-1"></i>
                                        <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-edit me-1"></i>
                                        <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lifebuoy me-1"></i>
                                        <span>Support</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lock-outline me-1"></i>
                                        <span>Lock Screen</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout me-1"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        
                    </div>
                    <!-- end Topbar -->

                    <!-- Start Content-->
                   
                        
                        <!-- start page title -->
                          
                        <!-- end page title --> 
                 <article>

                        @yield('content')

                    </article>
                        
                    

                                    </div>



                        </div>
                        <!-- end row -->

        <!-- /End-bar -->


        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

        <!-- Apex js -->
        <script src="assets/js/vendor/apexcharts.min.js"></script>

        <!-- Todo js -->
        <script src="assets/js/ui/component.todo.js"></script>

        <!-- demo app -->
        <script src="assets/js/pages/demo.dashboard-crm.js"></script>
        <!-- end demo js-->
    </body>
</html> 

