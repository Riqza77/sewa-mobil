@extends('main')
@section('content')
    <div class="content-wrapper login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="../../index2.html"><b>Login</b> Page</a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Sign in to start your session</p>

                    <form action="/login" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="username" required placeholder="Username">
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password" required placeholder="Password">
                        </div>
                        <div class="row">
                            <div class="col-8">

                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                    <p class="mb-0">
                        <a href="/register" class="text-center">Register</a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->
    </div>
@endsection
