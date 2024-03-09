<!DOCTYPE html>
<html lang="en">
    @include('partials/header')

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            <!-- Navbar -->

            @include('admin/partials/navbar')
            @include('admin/partials/sidebar')
            <!-- /.navbar -->

            <!-- Content Wrapper. Contains page content -->
            @yield('content')
            <!-- /.content-wrapper -->

            <aside class="control-sidebar control-sidebar-dark">
            </aside>

            @include('partials/footer')
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->
        @include('partials/script')


    </body>

</html>
