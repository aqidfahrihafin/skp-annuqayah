@extends('templates.content')
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <div class="clearfix">
                        <div class="float-right">
                            <div class="input-group input-group-sm">
                                <button type="button" class="btn btn-primary btn-sm waves-effect btn-label waves-light"
                                    data-toggle="modal" data-target=".bs-example-modal-center"><i
                                        class="bx bx-plus label-icon"></i> Add
                                </button>
                            </div>
                        </div>
                        <h4 class="card-title mb-4">{{ $title }}</h4>
                        <hr>
                    </div>

                    <div class="alert alert-primary" role="alert" align="justify">
                        <i class="mdi mdi-bullseye-arrow"></i>
                        <b>Perhatian !</b> Halaman ini digunakan untuk menambahkan kelas pada aplikasi <b>E-Raport</b>. Silahkan pilih Sanah Dirasah dan semester sesuai dengan kelas yang ingin di tambahkan.
                    </div>

                    <div class="row">
                        <div class="col-xl-6">
                            <form>
                                <div class="form-group">
                                    <label class="control-label"  id="sanah-d">Sanah Dirasah</label>
                                    <select class="form-control" id="sanah-d">
                                        <option value="">1445 H</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-6">
                            <form>
                                <div class="form-group">
                                    <label class="control-label">Tingkat Kelas</label>
                                    <select class="form-control">
                                        <option value="">Tahfidz</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>

                    <hr>

                    <div class="table-responsive">

                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th width="10px">No</th>
                                    <th>Sanah Dirasah</th>
                                    <th>Tingkat Kelas</th>
                                    <th>Pembimbing</th>
                                    <th width="50px">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>1445 H</td>
                                    <td>Tahfidz</td>
                                    <td>Apins Digital</td>
                                    <td align="center">
                                        <button type="button" class="btn btn-warning waves-effect waves-light btn-sm">
                                            <i class="mdi mdi-pencil"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    {{-- modal add --}}
    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0">Add {{ $title }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="alert alert-primary" role="alert" align="justify">
                        <i class="mdi mdi-bullseye-arrow"></i>
                        <b>Perhatian !</b> pastikan isian Sanah Dirasah, Tingkat Kelas dan Pembimbing pada aplikasi <b>E-Raport</b> di isikan dengan benar.
                    </div>

                    <form>
                        <div class="form-group">
                            <label class="control-label" id="sanah-dirasah">Sanah Dirasah</label>
                            <select class="form-control" id="sanah-dirasah">
                                <option value="">1445 H</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tingkat Kelas</label>
                            <select class="form-control">
                                <option value="">Tahfidz</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Pembimbing Kelas</label>
                            <select class="form-control">
                                <option value="">Apins Digital</option>
                            </select>
                        </div>
                        <hr>
                        <div align="right">
                            <button type="submit" class="btn btn-primary  w-md">Submit</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection
