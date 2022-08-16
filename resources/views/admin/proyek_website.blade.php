@extends('admin.layout.master')

@section('main_content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">

                <div class="row">
                    <div class="col">
                        <h4 class="header-title">Daftar Proyek Android</h4>
                    </div>
                    <div class="col">
                        <button type="button" class="btn-rounded btn-primary waves-effect waves-light float-lg-right"
                            data-toggle="modal" data-target=".bs-example-modal-lg">Tambah Proyek Website</button>
                    </div>
                    <!--  Modal content for the above example -->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Tambah Proyek Android</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <!-- Form row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card-box">
                                                <h4 class="header-title">Masukan Detail Proyek Baru</h4>

                                                <form>
                                                    <div class="form-group">
                                                        <label class="col-form-label">Nama Proyek</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Masukan nama proyek">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label">Deskripsi</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Masukan deskripsi Proyek">
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label class="col-form-label">Unggah Gambar</label>
                                                            <input type="file" class="form-control"
                                                                id="example-fileinput">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="col-form-label">Tahun</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <input type="text" value="2" hidden>
                                                    </div>
                                                    <br>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <button type="button" class="btn btn-danger float-lg-left"
                                                                data-dismiss="modal" aria-hidden="true">Tutup</button>
                                                        </div>
                                                        <div class="col-6">
                                                            <button type="submit"
                                                                class="btn btn-primary float-lg-right">Tambahkan</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div> <!-- end card-box -->
                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>

                <br>

                <table id="selection-datatable" class="table table-bordered dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>Nama Proyek</th>
                            <th>Kategori Proyek</th>
                            <th>Tahun</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($proyek as $proyek)
                        <tr>
                            <td>{{ $proyek->proyek_name}}</td>
                            <td>{{ $proyek->kategori_name }}</td>
                            <td>{{ $proyek->proyek_year }}</td>
                            <td>{{ Str::substr($proyek->proyek_description, 0, 100)  }}</td>
                            <td>{{ $proyek->proyek_pict }}</td>
                            <td><a href="#">Edit</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end row -->

    </div> <!-- container-fluid -->

    </div> <!-- content -->
@endsection
