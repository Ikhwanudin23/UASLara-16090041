@extends('templates.default')
@section('content')

    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor">Kategori</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Event Tegal</a></li>
                <li class="breadcrumb-item active">Tambah Kategori</li>
            </ol>
        </div>
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Add Category</h4>
                <form class="m-t-40" method="post" action="{{route('categories.store')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <h5>Nama <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="nama_categories" class="form-control" required=""
                                   data-validation-required-message="This field is required">
                            <div class="help-block"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Enter Foto <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="file" id="input-file-now" class="dropify" name="filename" />
                            <div class="help-block"></div>
                        </div>
                    </div>

                    <div class="text-xs-right">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <button type="reset" class="btn btn-inverse">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
