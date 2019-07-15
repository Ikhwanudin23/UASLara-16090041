@extends('templates.default')
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor">Event</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Event Tegal</a></li>
                <li class="breadcrumb-item active">Tambah Event</li>
            </ol>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Add Event</h4>
                <form class="m-t-40" action="{{route('event.store')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <h5>Nama Event<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="nama_event" class="form-control" required=""
                                   data-validation-required-message="This field is required">
                            <div class="help-block"></div>
                        </div>
                    </div>

{{--                    <div class="form-group">
                        <h5>Enter Foto <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="file" id="input-file-now" class="dropify" name="filename" />
                            <div class="help-block"></div>
                        </div>
                    </div>--}}

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">Tanggal Pelaksanaan</label>
                                <input id="mdate" name="tanggal_pelaksanaan" type="text" class="form-control" placeholder="input tanggal rapat" required="">
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Jam pelaksanaan</label>
                                <div class="input-group clockpicker">
                                    <input type="text" class="form-control" name="jam_pelaksanaan"> <span class="input-group-addon"> <span class="fa fa-clock-o"></span> </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5>Tempat Pelaksanaan<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="tempat_pelaksanaan" class="form-control" required=""
                                   data-validation-required-message="This field is required">
                            <div class="help-block"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5>Link Registrasi<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="link_registrasi" class="form-control" required=""
                                   data-validation-required-message="This field is required">
                            <div class="help-block"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5>Contact Person<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="contact_person" class="form-control" required=""
                                   data-validation-required-message="This field is required">
                            <div class="help-block"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5>Deskripsi<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <textarea class="form-control {{$errors->has('deskripsi')?'is-invalid':''}}" name="deskripsi" rows="5"></textarea>
                            <div class="help-block"></div>
                            @if ($errors->has('deskripsi'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{$errors->first('deskripsi')}}</b></p>
                                </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <h5>Persyaratan<span class="text-danger">*</span></h5>
                        <div class="controls">
                         <textarea class="form-control" name="persyaratan" rows="5"></textarea>
                            <div class="help-block"></div>
                        </div>
                    </div>


                    <div class="form-group has-success">
                        <label class="control-label">Kategori Event</label>
                        <select class="form-control custom-select" name="kategori">
                            @foreach($categories as $categories)
                                <option value="{{$categories->id}}">{{$categories->nama_kategori}}</option>
                            @endforeach
                        </select>
                        <small class="form-control-feedback"> Select your Event</small>
                    </div>
                    <div class="form-group text-xs-right">
                        <button type="submit" class="btn btn-info">Submit</button>
                        {{--<button type="reset" class="btn btn-inverse">Cancel</button>--}}
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="{{asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
    <script src="{{asset('assets/plugins/clockpicker/dist/jquery-clockpicker.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-asColorPicker-master/libs/jquery-asColor.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('assets/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <script src="{{asset('assets/plugins/moment/moment.js')}}"></script>

    <script>
        // MAterial Date picker
        $('#mdate').bootstrapMaterialDatePicker({ weekStart : 0, time: false });
        $('#timepicker').bootstrapMaterialDatePicker({ format : 'HH:mm', time: true, date: false });
        $('#date-format').bootstrapMaterialDatePicker({ format : 'dddd DD MMMM YYYY - HH:mm' });

        $('#min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });
        // Clock pickers
        $('#single-input').clockpicker({
            placement: 'bottom',
            align: 'left',
            autoclose: true,
            'default': 'now'
        });
        $('.clockpicker').clockpicker({
            donetext: 'Done',
        }).find('input').change(function() {
            console.log(this.value);
        });
        $('#check-minutes').click(function(e) {
            // Have to stop propagation here
            e.stopPropagation();
            input.clockpicker('show').clockpicker('toggleView', 'minutes');
        });
        if (/mobile/i.test(navigator.userAgent)) {
            $('input').prop('readOnly', true);
        }
        // Colorpicker
        $(".colorpicker").asColorPicker();
        $(".complex-colorpicker").asColorPicker({
            mode: 'complex'
        });
        $(".gradient-colorpicker").asColorPicker({
            mode: 'gradient'
        });
        // Date Picker
        jQuery('.mydatepicker, #datepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        jQuery('#date-range').datepicker({
            toggleActive: true
        });
        jQuery('#datepicker-inline').datepicker({
            todayHighlight: true
        });
        // Daterange picker
        $('.input-daterange-datepicker').daterangepicker({
            buttonClasses: ['btn', 'btn-sm'],
            applyClass: 'btn-danger',
            cancelClass: 'btn-inverse'
        });
        $('.input-daterange-timepicker').daterangepicker({
            timePicker: true,
            format: 'MM/DD/YYYY h:mm A',
            timePickerIncrement: 30,
            timePicker12Hour: true,
            timePickerSeconds: false,
            buttonClasses: ['btn', 'btn-sm'],
            applyClass: 'btn-danger',
            cancelClass: 'btn-inverse'
        });
        $('.input-limit-datepicker').daterangepicker({
            format: 'MM/DD/YYYY',
            minDate: '06/01/2015',
            maxDate: '06/30/2015',
            buttonClasses: ['btn', 'btn-sm'],
            applyClass: 'btn-danger',
            cancelClass: 'btn-inverse',
            dateLimit: {
                days: 6
            }
        });
    </script>

@endsection