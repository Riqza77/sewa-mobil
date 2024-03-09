@extends('main')
@section('content')
    <div class="content-wrapper register-page">

        <div class="register-box mb-2">
            <div class="register-logo">
                <a href="../../index2.html"><b>Admin</b>LTE</a>
            </div>

            <div class="card">
                <div class="card-body register-card-body">
                    <p class="login-box-msg">Register a new membership</p>

                    <form action="/register" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="nama" placeholder="nama" required>

                        </div>
                        <div class="input-group mb-3">
                            <textarea name="alamat" class="form-control" placeholder="alamat" required></textarea>

                        </div>
                        @if (!$user)
                            <div class="input-group mb-3">
                                <select name="level" class="form-control" required>
                                    <option value="1">Admin</option>
                                    <option value="2">Pengguna</option>
                                </select>

                            </div>
                        @endif
                        <div class="input-group mb-3">
                            <input type="number" name="no_telp" class="form-control" placeholder="Nomor Telepon" required>

                        </div>
                        <div class="input-group mb-3">
                            <input type="number" name="sim" class="form-control" placeholder="Nomor SIM" required>

                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="username" placeholder="username" required>

                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>

                        </div>
                </div>
                <div class="row">
                    <div class="col-7">

                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
                </form>


                <a href="/login" class="text-center mt-3">I already have a membership</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
    </div>
@endsection
