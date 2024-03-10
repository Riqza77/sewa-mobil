@extends('admin.main')
@section('content')
    <div class="content-wrapper ">

        <div class="content mt-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">List Pengguna</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal"><i
                            class="fa fa-plus-circle"></i> Tambah Data</button>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama Pengguna</th>
                                <th>Alamat Pengguna</th>
                                <th>Email Pengguna</th>
                                <th>Foto Pengguna</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($user as $us)
                                <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td>{{ $us->nama }}</td>
                                    <td>{{ $us->alamat }}</td>
                                    <td>{{ $us->no_telp }}</td>
                                    <td>{{ $us->sim }}</td>

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
                                                    data-target="#EditModal{{ $us->id }}"><i class="fa fa-edit"></i>
                                                    Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item"
                                                    onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Pengguna Ini?')"
                                                    href="{{ url('/users/' . $us->id) }}"><i class="fa fa-trash"></i>
                                                    Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                    {{-- start of edit modal --}}
                                    <div class="modal fade" id="EditModal{{ $us->id }}" tabindex="-1">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit user</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form action="{{ url('/users/' . $us->id) }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="nama">Nama user</label>
                                                                    <input type="text" name="nama" id="nama"
                                                                        value="{{ $us->nama }}" class="form-control">

                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="alamat">Alamat</label>
                                                                    <input type="text" name="alamat"
                                                                        value="{{ $us->alamat }}" class="form-control">

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="level">Level</label>
                                                                    <select name="level" class="form-control" required>
                                                                        <option value="">- Pilih Level -</option>
                                                                        <option value="1">Admin</option>
                                                                        <option value="2">Pengguna</option>
                                                                    </select>


                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="sim">Nomor SIM Pengguna</label>
                                                                    <input type="number" name="sim" id="sim"
                                                                        value="{{ $us->sim }}"
                                                                        placeholder="masukkan nomor pengguna"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="no_telp">Nomor Telepon Pengguna</label>
                                                                    <input type="number" name="no_telp" id="no_telp"
                                                                        value="{{ $us->no_telp }}"
                                                                        placeholder="masukkan nomor pengguna"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="username">Username Pengguna</label>
                                                                    <input type="text" name="username" id="username"
                                                                        value="{{ $us->username }}"
                                                                        placeholder="masukkan username pengguna"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="password">Password Pengguna</label>
                                                                    <input type="password" name="password" id="password"
                                                                        placeholder="masukkan password pengguna"
                                                                        class="form-control">
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
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                        </div>

                        <form action="{{ url('/users') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nama">Nama Pengguna</label>
                                            <input type="text" name="nama" id="nama"
                                                value="{{ old('nama') }}" placeholder="masukkan nama pengguna"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat Pengguna</label>
                                            <input type="text" name="alamat" id="alamat"
                                                value="{{ old('alamat') }}" placeholder="masukkan alamat pengguna"
                                                class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="level">Level</label>
                                            <select name="level" class="form-control" required>
                                                <option value="">- Pilih Level -</option>
                                                <option value="1">Admin</option>
                                                <option value="2">Pengguna</option>
                                            </select>


                                        </div>
                                        <div class="form-group">
                                            <label for="sim">Nomor SIM Pengguna</label>
                                            <input type="number" name="sim" id="sim"
                                                value="{{ old('sim') }}" placeholder="masukkan nomor sim pengguna"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="no_telp">Nomor Telepon Pengguna</label>
                                            <input type="number" name="no_telp" id="no_telp"
                                                value="{{ old('no_telp') }}" placeholder="masukkan nomor pengguna"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="username">Username Pengguna</label>
                                            <input type="text" name="username"
                                                placeholder="masukkan username pengguna" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password Pengguna</label>
                                            <input type="password" name="password" id="password"
                                                placeholder="masukkan password pengguna" class="form-control">
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
