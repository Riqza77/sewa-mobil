@extends('main')
@section('content')
    <div class="content-wrapper p-3 row">
        @if ($mobil->count() > 0)
            @foreach ($mobil as $item)
                <div class="card m-3 p-3" style="width: 18rem;">
                    <div class="card-tools ml-auto mb-2">
                        @if ($item->status == 1)
                            <a href="#" class="btn btn-primary">Tersedia</a>
                        @else
                            <a href="#" class="btn btn-warning">Tidak Tersedia</a>
                        @endif
                    </div>
                    <img src="{{ asset('storage/mobil/' . $item->gambar) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="h2">{{ $item->model }}</h5>
                        <p class="card-text">Harga Sewa Perhari : <br> Rp. {{ number_format($item->tarif, 0, ',', '.') }}
                        </p>
                        <div class="float-right">
                            @if ($item->status == 1)
                                <a href="#" class="btn btn-success">Sewa</a>
                            @else
                                <a href="#" class="btn btn-success"
                                    onclick="return confirm('Mohon Maaf Mobil Sedang Tidak Tersedia')">Sewa</a>
                            @endif

                            <a href="/detail-mobil/{{ $item->id }}" class="btn btn-info">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="card text-center">
                <div class="card-body">

                    <p class="card-text">
                        Belum Ada Data Mobil Yang Ditambahkan
                    </p>

                </div>
            </div>
        @endif
    </div>
@endsection
