<nav class="main-header navbar navbar-expand-md navbar-dark navbar-dark">
    <div class="container">

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item {{ $title == 'home' ? 'active' : '' }}">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item {{ $title == 'mobil' ? 'active' : '' }}">
                    <a href="{{ route('mobil') }}" class="nav-link">Daftar Mobil</a>
                </li>


            </ul>


        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            @if (!empty(auth()->user()->nama))
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-user"></i>&nbsp;
                        {{ auth()->user()->nama }}&nbsp;</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow bg-dark">
                        @if (auth()->user()->level == 2)
                            <li class="dropdown-divider"></li>
                            <li><a href="#" class="dropdown-item text-light"><i class="fa fa-clock"></i>&nbsp;
                                    History
                                </a></li>
                            <li class="dropdown-divider"></li>
                            <li><a href="#" class="dropdown-item text-light"><i class="fa fa-user"></i>&nbsp;
                                    Profil</a></li>
                        @endif
                        <li class="dropdown-divider"></li>
                        <li><a href="/logout" onclick="return confirm('Apakah Anda Yakin Ingin Logout?')"
                                class="dropdown-item text-light"><i class="fa fa-power-off"></i>&nbsp; Logout</a></li>
                        <li class="dropdown-divider"></li>
                    </ul>
                </li>
            @else
                <li class="nav-item {{ $title == 'login' ? 'active' : '' }}">
                    <a href="/login" class="nav-link">Login</a>
                </li>
                <li class="nav-item {{ $title == 'register' ? 'active' : '' }}">
                    <a href="/register" class="nav-link">Register</a>
                </li>
            @endif


            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
