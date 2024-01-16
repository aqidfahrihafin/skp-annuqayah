@extends('templates.content')
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <div class="clearfix">
                        <div class="float-right">
                            <div class="input-group input-group-sm">
                                <button type="button" class="btn btn-secondary btn-sm  waves-light">
                                    <i class="bx bx-loader bx-spin font-size-16 align-middle"></i>
                                </button>
                            </div>
                        </div>
                        <h4 class="card-title mb-4">Data Transaksi</h4>
                        <hr>
                    </div>

                    <div class="table-responsive">

                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th width="10px">No</th>
                                    <th>Nama</th>
                                    <th>Jenis</th>
                                    <th>Nominal</th>
                                    <th width="100px">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <a href="#" class="media">
                                            <img class="d-flex mr-3 rounded-circle" src="assets\images\users\avatar-2.jpg"
                                                alt="Generic placeholder image" height="36">
                                            <div class="media-body chat-user-box">
                                                <p class="user-title m-0">Aqid Fahri Hafin</p>
                                                <p class="text-muted m-0">Jan 11, 2024</p>
                                            </div>
                                        </a>
                                    </td>
                                    <td>Uang Masuk</td>
                                    <td align="center">
                                        <span class="badge badge-pill badge-success font-size-8">Rp. 500.000</span>
                                    </td>
                                    <td align="center">
                                        <button type="button" class="btn btn-info btn-sm  waves-light" data-toggle="modal"
                                            data-target=".bs-invoiceReceiptModal">
                                            <i class="fa fa-eye"></i> Lihat Detail Transaksi
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
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0">Add</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="custom-validation" action="#">
                        <div class="alert alert-info" role="alert" align="justify">
                            <i class="mdi mdi-bullseye-arrow"></i>
                            <b>Perhatian !</b> pastikan anda memasukkan data Transaksi dengan valid dan benar.
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" required="">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" required="">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" required="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Level</label>
                            <select class="form-control">
                                <option value="L">Admin</option>
                                <option value="P">Superadmin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Status</label>
                            <select class="form-control" required="">
                                <option value="">Aktif</option>
                                <option value="">Non Aktif</option>
                            </select>
                        </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info">Simpan</button>
                </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    <div class="modal fade bs-invoiceReceiptModal" id="invoiceReceiptModal" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- Body -->
                <div class="modal-body pt-3 pb-sm-3 px-sm-3">
                    <div class="text-center mb-3 mt-3">
                        <h2 class="mb-1">Invoice from</h2>
                        <span class="d-block">Invoice #3682303</span>
                    </div>

                    <div class="row mb-6">
                        <div class="col-md-4 mb-3">
                            <small class="text-cap">Amount paid:</small>
                            <div class="d-flex align-items-center">
                                <span class="text-dark">Rp. 500.000</span>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <small class="text-cap">Date paid:</small>
                            <div class="d-flex align-items-center">
                                <span class="text-dark">January 11, 2024</span>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <small class="text-cap">Payment method:</small>
                            <div class="d-flex align-items-center">
                                <span class="text-dark">&bull;&bull;&bull;&bull; 4242</span>
                            </div>
                        </div>
                    </div>

                    <small class="text-cap mb-2">Summary</small>

                    <ul class="list-group mb-4">
                        <li class="list-group-item text-dark">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>SPP Bulanan</span>
                                <span>Rp. 100.000</span>
                            </div>
                        </li>

                        <li class="list-group-item text-dark">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Uang Saku</span>
                                <span>Rp. 400.000</span>
                            </div>
                        </li>

                        <li class="list-group-item list-group-item-light text-dark">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="font-weight-bold">Amount paid</span>
                                <span class="font-weight-bold">Rp. 500.000</span>
                            </div>
                        </li>
                    </ul>

                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-danger btn-sm  waves-light mr-2" href="#"><i
                                class="fa fa-download mr-1"></i>
                            PDF</button>
                        <button type="button" class="btn btn-sm btn-warning" href="#"><i
                                class="fa fa-print mr-1"></i> Print
                            Details</button>
                    </div>

                    <hr class="my-3">

                    <p class="modal-footer-text">If you have any questions, contact us at <a
                            href="mailto:pengurus@gmail.com">pengurus@gmail.com</a> or call at <a
                            href="#">087879501315</a></p>
                </div>
                <!-- End Body -->
            </div>
        </div>
    </div>
@endsection
