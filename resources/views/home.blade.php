@extends('main')
@section('content')
    <div class="content-wrapper"
        style="background:linear-gradient(0deg, rgba(26, 25, 26, 0.3), rgba(35, 34, 35, 0.3)), url({{ asset('assets/image/bg.jpeg') }}); background-size:cover ;background-position:center ;">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div><!-- /.col -->
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container">
                <div class="row text-white">

                    <div class="col-lg-12">
                        <h5 class="h1">Sewa & Rental Mobil terbaik <br>Di Kawasan Lokasimu</h5><br>
                        <p class="h5">Selamat datang Rental Mobil Kami.<br>Kami menyediakan mobil kualitas terbaik
                            dengan
                            harga terjangkau. <br>Selalu siap melayani kebutuhanmu untuk sewa mobil selama 24 jam.</p>
                        <a href="{{ route('mobil') }}" class="btn btn-primary mt-2">Mulai Sewa</a><br>
                    </div>
                    <div class="col-lg-12">
                    </div>
                    <div class="col-lg-12">
                    </div>



                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>
@endsection
