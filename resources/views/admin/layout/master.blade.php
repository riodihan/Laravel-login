@include('admin.layout.head')

<body>

    <!-- Begin page -->
    <div id="wrapper">

        @include('admin.partials.top_bar')

        @include('admin.partials.left_sidebar')

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    @include('admin.partials.start_page')

                    @yield('main_content')

                </div> <!-- container-fluid -->

            </div> <!-- content -->

            @include('admin.layout.foot')
