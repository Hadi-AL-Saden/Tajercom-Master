<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Users</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="Admin/plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="Admin/css/style.min.css" rel="stylesheet">

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            {{-- <img src="Admin/plugins/images/logo-icon.png" alt="homepage" /> --}}
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="Admin/plugins/images/favicon.png" alt="homepage" width="200px" />
                        </span>
                    </a>

                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
 
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ms-auto d-flex align-items-center">




                        <li>
                            <a class="profile-pic" href="#">
                                <img src="{{asset('upload/avatar/'.Auth::user()->avatar)}}" alt="user-img" width="36" height="50"
                                    class="img-circle"><span class="text-white font-medium">{{Auth::user()->name }}<span></a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>

        @include('layout.side')


        <div class="page-wrapper">

            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Users Table</h4>
                    </div>

                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
                        <div class="white-box">
                            <h3 class="box-title">Users Table</h3>
                         
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        
                                        <tr>
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Phone</th>
                                            <th class="border-top-0">address</th>
                                           
                                            <th class="border-top-0">Usre Image</th>
                                            {{-- <th class="border-top-0">Role</th> --}}
                                            <th class="border-top-0">Delete</th>
                                            <th class="border-top-0">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($fetch as $item)

                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->name }}</td>  
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->phone_num }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td><img class="img" src="{{asset('upload/avatar/'.$item->avatar)}}" width="80px" height="80px"  alt="User image"></td>
                                           
                                      
                                            
                                            {{-- delete --}}
                                            <td><a href="{{ url('delete-user/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a></td>
                                            {{-- edit --}}
                                            <td><a href="{{ url('edit-user/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a></td>
                                            
                                        @endforeach

                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="Admin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="Admin/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Admin/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="Admin/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="Admin/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="Admin/js/custom.js"></script>
</body>

</html>