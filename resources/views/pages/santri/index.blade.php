@extends('templates.content')
@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                <div class="clearfix">
                    <div class="float-right">
                        <div class="input-group input-group-sm">
                            <button type="button" class="btn btn-info btn-sm waves-effect btn-label waves-light" data-toggle="modal" data-target=".bs-example-modal-center"><i
                                    class="bx bx-plus label-icon"></i> Add
                            </button>
                        </div>
                    </div>
                    <h4 class="card-title mb-4">Data Santri</h4>
                    <hr>
                </div>

                <div class="table-responsive">

                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th width="10px">No</th>
                                <th>Nama</th>
                                <th>NIS</th>
                                <th>P/L</th>
                                <th>Rayon</th>
                                <th>Wali</th>
                                <th>Tahun Masuk</th>
                                <th>Status</th>
                                <th width="100px">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <a href="#" class="media">
                                        <img class="d-flex mr-3 rounded-circle" src="assets\images\users\avatar-2.jpg" alt="Generic placeholder image" height="36">
                                        <div class="media-body chat-user-box">
                                            <p class="user-title m-0">Aqid Fahri Hafin</p>
                                            <p class="text-muted m-0">Santri</p>
                                        </div>
                                    </a>
                                </td>
                                <td>0909090</td>
                                <td>L</td>
                                <td>Dalfis</td>
                                <td>Apins</td>
                                <td>2023</td>
                                <td align="center">
                                    <span class="badge badge-pill badge-success font-size-8">Aktif</span>
                                </td>
                                <td align="center">
                                    <button type="button" class="btn btn-warning waves-effect waves-light btn-sm">
                                        <i class="mdi mdi-pencil"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light btn-sm">
                                        <i class="mdi mdi-trash-can"></i>
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
 <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Add</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="custom-validation"  action="#">
                    <div class="alert alert-info" role="alert" align="justify">
                        <i class="mdi mdi-bullseye-arrow"></i>
                        <b>Perhatian !</b> pastikan anda memasukkan data santri dengan valid dan benar.
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" required="">
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="number" class="form-control" id="nik" required="">
                    </div>
                    <div class="form-group">
                        <label for="no-kk">NO. KK</label>
                        <input type="number" class="form-control" id="no-kk" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Jenis Kelamin</label>
                        <select class="form-control">
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ttl">Tempat Lahir</label>
                        <input type="text" class="form-control" id="ttl" required="">
                    </div>
                    <div class="form-group">
                        <label for="tgl">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Sanah Dirasah</label>
                        <select class="form-control" required="">
                                <option value="">1445 H</option>
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

@endsection
