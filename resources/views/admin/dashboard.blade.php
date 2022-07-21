@extends('admin.layout.master')

@section('main_content')
    {{-- CARD VIEW DASHBOARD !!! --}}
    <div class="row">

        {{-- JUMLAH PROYEK WEB !!! --}}
        <div class="col-xl-4">

            <div class="card-box">

                <div class="dropdown float-right">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-horizontal"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Lihat Data</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Tambah Proyek</a>
                    </div>
                </div>

                <h4 class="header-title">Proyek Website</h4><br>
                <div class="widget-chart-one-content text-right">
                    <h3 class="text-white">25</h3>
                    <p>Proyek Selesai</p>
                </div>

            </div><!-- end card-box-->

        </div> <!-- end col -->

        {{-- JUMLAH PROYEK ANDROID --}}
        <div class="col-xl-4">

            <div class="card-box">

                <div class="dropdown float-right">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                        aria-expanded="false">
                        <i class="mdi mdi-dots-horizontal"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Lihat Data</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Tambah Proyek</a>
                    </div>
                </div>

                <h4 class="header-title">Proyek Android</h4><br>
                <div class="widget-chart-one-content text-right">
                    <h3 class="text-white">15</h3>
                    <p>Proyek Selesai</p>
                </div>

            </div><!-- end card-box-->

        </div> <!-- end col -->

        {{-- JUMLAH GALERI --}}
        <div class="col-xl-4">

            <div class="card-box">

                <div class="dropdown float-right">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                        aria-expanded="false">
                        <i class="mdi mdi-dots-horizontal"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Lihat Data</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Tambah Proyek</a>
                    </div>
                </div>

                <h4 class="header-title">Galeri</h4><br>
                <div class="widget-chart-one-content text-right">
                    <h3 class="text-white">43</h3>
                    <p>Foto</p>
                </div>

            </div><!-- end card-box-->

        </div> <!-- end col -->
    </div>
    <!-- end row -->
@endsection
