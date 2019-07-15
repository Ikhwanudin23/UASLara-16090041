@extends('templates.users.default')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Add Client</h4>
                <form class="m-t-40" method="post" action="{{route('categories.store')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <h5>Nama <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="nama_categories" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                    </div>
                    <div class="form-group">
                        <h5>Enter Foto <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="file" name="filename" class="form-control" placeholder="Email Address" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" data-validation-regex-message="Enter Valid Email"> <div class="help-block"></div></div>
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