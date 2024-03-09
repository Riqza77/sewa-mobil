<!DOCTYPE html>
<html lang="en">
    @include('partials/header')

    <body class="hold-transition layout-top-nav layout-fixed">
        <div class="wrapper">

            <!-- Navbar -->

            @include('partials/navbar')
            <!-- /.navbar -->

            <!-- Content Wrapper. Contains page content -->
            @yield('content')
            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->

            @include('partials/footer')
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->
        @include('partials/script')


    </body>

</html>
