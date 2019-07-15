@extends('templates.users.default')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Kategori Event</h4>
                <hr>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th class="text-nowrap">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($no = 1)
                        @foreach($categories as $categori)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$categori->nama_kategori}}</td>
                                <td><img src="{{asset('images/'.$categori->filename)}}" width="150px" height="100px"></td>
                                {{--<td>Invofest 2019</td>--}}
                                <td class="text-nowrap">
                                    <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                    <a href="#" data-toggle="modal" data-original-title="Delete" data-target="#modalDelete"> <i class="fa fa-close text-danger"></i> </a>
                                </td>
                            </tr>
                            @php($no++)
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--DELETE MODAL-->
    <div id="modalDelete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h5 class="modal-title text-danger">WARNING!!!</h5>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <h4 class="text">Apakah Anda Yakin Akan Menghapus Data Ini?</h4>
                        <div class="form-actions m-t-20">
                            <button type="submit" class="btn btn-danger pull-right"> <i class="fa fa-close"></i> Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--DELETE MODAL-->
@endsection