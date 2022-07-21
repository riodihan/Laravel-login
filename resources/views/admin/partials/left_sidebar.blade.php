<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Menu Master</li>

                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="dripicons-meter"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="dripicons-briefcase"></i>
                        <span> Proyek </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('proyek_android') }}">Android</a>
                        </li>
                        <li>
                            <a href="{{ route('proyek_website') }}">Website</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="calendar.html">
                        <i class="dripicons-duplicate"></i>
                        <span> Galeri </span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
