<!-- Topbar Start -->
<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="assetsAdmin/images/users/avatar-4.jpg" alt="user-image" class="rounded-circle">
                <span class="pro-user-name ml-1">
                    {{ Auth::User()->name }} <i class="mdi mdi-chevron-down"></i>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                <!-- item-->
                <a href="{{ route('password') }}" class="dropdown-item notify-item">
                    <i class="dripicons-help"></i>
                    <span>Ganti Password</span>
                </a>

                <!-- item-->
                <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                    <i class="dripicons-power"></i>
                    <span>Logout</span>
                </a>

            </div>
        </li>
    </ul>

    <ul class="list-unstyled menu-left mb-0">
        <li class="float-left">
            <a href="index.html" class="logo">
                <span class="logo-lg">
                    <img src="assetsAdmin/images/logo-dark.png" alt="" height="22">
                </span>
                <span class="logo-sm">
                    <img src="assetsAdmin/images/logo-sm.png" alt="" height="24">
                </span>
            </a>
        </li>
        <li class="float-left">
            <a class="button-menu-mobile navbar-toggle">
                <div class="lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
        </li>

    </ul>
</div>
<!-- end Topbar -->
