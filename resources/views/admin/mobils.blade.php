@extends('admin.main')
@section('content')
    <div class="content-wrapper ">

        <div class="content mt-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">List Data Mobil</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal"><i
                            class="fa fa-plus-circle"></i> Tambah Data Mobil</button>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Nomor Plat Mobil</th>
                                <th>Merk Mobil</th>
                                <th>Model Mobil</th>
                                <th>Tarif Perhari</th>
                                <th>Foto Mobil</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($mobil as $mob)
                                <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td>{{ $mob->no_plat }}</td>
                                    <td>{{ $mob->merk }}</td>
                                    <td>{{ $mob->model }}</td>
                                    <td>{{ $mob->tarif }}</td>
                                    <?php if ($mob->gambar != null): ?>
                                    <td style="height: 50px;width: 50px;">
                                        <a href="{{ asset('storage/mobil') . '/' . $mob->gambar }}" target="_blank"
                                            rel="noopener noreferrer"><img style=" height: 50px;width: 50px;"
                                                src="{{ asset('storage/mobil') . '/' . $mob->gambar }}"></a>
                                    </td>
                                    <?php else: ?>
                                    <td>Belum Ada Foto</td>
                                    <?php endif ?>
                                    <td>
                                        @if ($mob->status == 1)
                                            Tersedia
                                        @else
                                            Tidak Tersedia
                                        @endif
                                    </td>

                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success"><i class="fa fa-eye"></i>
                                                Aksi</button>
                                            <button type="button" class="btn btn-success dropdown-toggle"
                                                data-toggle="dropdown" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" role="menu" style="">
                                                <a class="dropdown-item" href="#" data-toggle="modal"
                                                    data-target="#EditModal{{ $mob->id }}"><i class="fa fa-edit"></i>
                                                    Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item"
                                                    onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Mobil Ini?')"
                                                    href="{{ url('/mobils/' . $mob->id) }}"><i class="fa fa-trash"></i>
                                                    Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                    {{-- start of edit modal --}}
                                    <div class="modal fade" id="EditModal{{ $mob->id }}" tabindex="-1">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Mobil</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form action="{{ url('/mobils/' . $mob->id) }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="no_plat">Nomor Plat Mobil</label>
                                                                    <input type="text" name="no_plat" id="no_plat"
                                                                        value="{{ $mob->no_plat }}" class="form-control"
                                                                        required>

                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="merk">Merk Mobil</label>
                                                                    <input type="text" name="merk"
                                                                        value="{{ $mob->merk }}" class="form-control"
                                                                        required>

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="model">Model Mobil</label>
                                                                    <input type="text" name="model"
                                                                        value="{{ $mob->model }}" class="form-control"
                                                                        required>

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="tarif">Tarif Sewa</label>
                                                                    <input type="number" name="tarif"
                                                                        value="{{ $mob->tarif }}" class="form-control"
                                                                        required>

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="gambar">Foto Mobil</label>
                                                                    <input type="file" name="gambar"
                                                                        value="{{ $mob->gambar }}" class="form-control">

                                                                </div>



                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end of edit modal --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            {{-- modal add --}}
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mobil</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                        </div>

                        <form action="{{ url('/mobils') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="no_plat">Nomor Plat Mobil</label>
                                            <input type="text" name="no_plat" id="no_plat"
                                                value="{{ old('no_plat') }}" placeholder="masukkan nomor plat mobil"
                                                class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="merk">Merk Mobil</label>
                                            <input type="text" name="merk" id="merk"
                                                value="{{ old('merk') }}" placeholder="masukkan Merk Mobil"
                                                class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="model">Model Mobil</label>
                                            <input type="text" name="model" id="model"
                                                value="{{ old('model') }}" placeholder="Masukkan Model Mobil"
                                                class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tarif">Tarif Sewa</label>
                                            <input type="number" name="tarif" id="tarif"
                                                value="{{ old('tarif') }}" placeholder="Masukkan Tarif Sewa Mobil"
                                                class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="gambar">Foto Mobil</label>
                                            <img class="img-preview img-fuild mb-3 col-sm-5">
                                            <input type="file" onchange="preview()" name="gambar" id="image"
                                                class="form-control" required>

                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
