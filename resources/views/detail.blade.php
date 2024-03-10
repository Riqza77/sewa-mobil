@extends('main')
@section('content')
    <div class="content-wrapper">


        <div class="card card-solid p-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3 class="d-inline-block d-sm-none">{{ $mobil->model }}</h3>
                        <div class="col-12">
                            <img src="{{ asset('storage/mobil/' . $mobil->gambar) }}" class="product-image" alt="Image">
                        </div>

                    </div>
                    <div class="col-12 col-sm-6">
                        <strong>
                            <h3 class="h1 my-3">{{ $mobil->model }}</h3>
                        </strong>

                        <hr>

                        <div class="bg-gray py-2 px-3">
                            <h4 class="mb-0">
                                No Plat Mobil
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                {{ $mobil->no_plat }}
                            </h4>

                        </div>
                        <div class="bg-gray py-2 px-3">
                            <h4 class="mb-0">
                                Merk Mobil
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                {{ $mobil->merk }}
                            </h4>

                        </div>
                        <div class="bg-gray py-2 px-3">
                            <h4 class="mb-0">
                                Harga Sewa Perhari &nbsp;&nbsp;&nbsp;&nbsp;: Rp.
                                {{ number_format($mobil->tarif, 0, ',', '.') }} ,-
                            </h4>

                        </div>
                        <div class="mt-4">
                            <div class="btn btn-primary btn-lg btn-flat">
                                Sewa Sekarang!
                            </div>
                            <a href="/mobil">
                                <div class="btn btn-default btn-lg btn-flat">
                                    Kembali
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
