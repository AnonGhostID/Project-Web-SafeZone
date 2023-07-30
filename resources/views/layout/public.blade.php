<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Custom styles for this page -->
    <link href="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

          <!-- Sidebar -->
          <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                        <img src="{{ asset('images/logo1.png') }}" alt="logo1" style="max-width: 100%;">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('guestDashboard') }}">
                <img src="{{ asset('images/home.png') }}" alt="home">
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            {{-- <hr class="sidebar-divider"> --}}

             {{-- <!-- Nav Item - Dashboard -->
             <li class="nav-item">
                <!-- <a class="nav-link" href="{{ route('monitor') }}"> -->
                <a class="nav-link" href="#" data-toggle="popover" data-trigger="focus" title="Login Required" data-content="Please login first.">
                <img src="{{ asset('images/Cmonitor.png') }}" alt="Cmonitor">
                    <span>Conflict Monitor</span></a>
            </li> --}}


            <!-- Divider -->
            <hr class="sidebar-divider">

             <!-- Nav Item - Dashboard -->
             <li class="nav-item">
                    <!-- <a class="nav-link" href="{{ route('monitor') }}"> -->
                    <a class="nav-link" href="#" data-toggle="popover" data-trigger="focus" title="Login Required" data-content="Please login first.">
                    <img src="{{ asset('images/konseling.png') }}" alt="konseling">
                    <span>Bimbingan Konseling</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

             <!-- Nav Item - Dashboard -->
             <li class="nav-item">
                <!-- <a class="nav-link" href="{{ route('Report') }}"> -->
                <a class="nav-link" href="#" data-toggle="popover" data-trigger="focus" title="Login Required" data-content="Please login first.">
                <img src="{{ asset('images/report.png') }}" alt="report">
                    <span>Report</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <!-- <a class="nav-link" href="{{ route('diary') }}"> -->
                <a class="nav-link" href="#" data-toggle="popover" data-trigger="focus" title="Login Required" data-content="Please login first.">
                <img src="{{ asset('images/diary.png') }}" alt="diary">
                    <span>Diary Artikel</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow">
                <div class="modal fade" id="whatsappModal" tabindex="-1" role="dialog" aria-labelledby="whatsappModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="whatsappModalLabel">EMERGENCY BUTTON</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Login first to access:</p>
                    <form action="{{ route('panicbutton') }}" method="post">
                    @csrf

                    </form>
                    {{-- <a href="https://chat.whatsapp.com/GmGG3Pp5NAkD1uc1chTnLc" class="btn btn-success" target="_blank">Join WhatsApp Group</a> --}}
                </div>
            </div>
        </div>
    </div>
                <button id="panicButton" class="btn btn-danger" data-toggle="modal" data-target="#whatsappModal">Panic Button</button>


                    <!-- Sidebar Toggle (Topbar) -->


                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    </ul>


                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; TOP-G</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('template/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('template/js/demo/datatables-demo.js') }}"></script>

    <!-- Initialize Popovers -->
<script>
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover();
    });
</script>


</body>

</html>
