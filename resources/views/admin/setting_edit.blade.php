@extends('layouts.admin')
@section('title', 'Setting Page')
@section('javascript')
    <!-- include summernote css/js -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Setting Add</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Setting Add Form</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                        <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="x_content">
                                <br>
                                <div class="tab_style2">
                                    <div class="col-md-12">
                                        <form action="{{route('admin_setting_update')}}" enctype="multipart/form-data" method="post" class="form-horizontal form-label-left">
                                            @csrf
                                            <div class="tab_style2">
                                                <div class="tabbar padding_infor_info">
                                                    <nav>
                                                        <div class="nav nav-tabs" id="nav-tab1" role="tablist" >
                                                            <a style="background-color:#9FAFD1; color: #FFFFFF; padding: 8px" class="nav-item nav-link active" id="nav-general-tab2" data-toggle="tab" href="#nav-general_s2" role="tab" aria-controls="nav-general_s2" aria-selected="true">General</a>
                                                            <a style="background-color:#9FAFD1; color: #FFFFFF; padding: 8px" class="nav-item nav-link" id="nav-smtp-tab2" data-toggle="tab" href="#nav-smtp_s2" role="tab" aria-controls="nav-smtp_s2" aria-selected="false">Smtp Email</a>
                                                            <a style="background-color:#9FAFD1; color: #FFFFFF; padding: 8px" class="nav-item nav-link" id="nav-social-tab2" data-toggle="tab" href="#nav-social_s2" role="tab" aria-controls="nav-social_s2" aria-selected="false">Social Media</a>
                                                            <a style="background-color:#9FAFD1; color: #FFFFFF; padding: 8px" class="nav-item nav-link" id="nav-about-tab2" data-toggle="tab" href="#nav-about_s2" role="tab" aria-controls="nav-about_s2" aria-selected="false">About Us</a>
                                                            <a style="background-color:#9FAFD1; color: #FFFFFF; padding: 8px" class="nav-item nav-link" id="nav-contact-tab2" data-toggle="tab" href="#nav-contact_s2" role="tab" aria-controls="nav-contacts_s2" aria-selected="false">Contact Page</a>
                                                            <a style="background-color:#9FAFD1; color: #FFFFFF; padding: 8px" class="nav-item nav-link" id="nav-reference-tab2" data-toggle="tab" href="#nav-reference_s2" role="tab" aria-controls="nav-reference_s2" aria-selected="false">References</a>
                                                            <br>
                                                        </div>
                                                    </nav>
                                                    <br>
                                                    <br>
                                                    <div class="tab-content" id="nav-tabContent_2">
                                                        <div class="tab-pane active" id="nav-general_s2" role="tabpanel" aria-labelledby="nav-general-tab2">
                                                            <input type="hidden" id="id" name="id"  value="{{$data->id}}" class="form-control" >
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Title</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" name="title" value="{{$data->title}}" class="form-control" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Keyword</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Description</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" name="description" value="{{$data->description}}" class="form-control" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Company</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" name="company" value="{{$data->company}}" class="form-control" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Adress</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" name="address" value="{{$data->address}}" class="form-control" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Phone</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="tel" name="phone" value="{{$data->phone}}" class="form-control" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Fax</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" name="fax" value="{{$data->fax}}" class="form-control" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Email</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" name="email" value="{{$data->email}}" class="form-control" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3 ">Status</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <select name="status" value="{{$data->status}}" class="form-control">
                                                                        <option >True</option>
                                                                        <option>False</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="nav-smtp_s2" role="tabpanel" aria-labelledby="nav-smtp-tab2">
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Smtpserver</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Smtpemail</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Smtppassword</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Smtpport</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="nav-social_s2" role="tabpanel" aria-labelledby="nav-social-tab">
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Instagram</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" name="facebook" value="{{$data->instagram}}" class="form-control" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Twitter</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Youtube</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Google</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" name="google" value="{{$data->google}}" class="form-control" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="nav-about_s2" role="tabpanel" aria-labelledby="nav-about-tab">
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">AboutUs</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="nav-contact_s2" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Contact</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="nav-reference_s2" role="tabpanel" aria-labelledby="nav-reference-tab">
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">References</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <textarea id="references" name="references">{{$data->references}}</textarea>
                                                                </div>
                                                            </div>
                                                            <script>
                                                                $(document).ready(function() {
                                                                    $('#references').summernote();
                                                                    $('#aboutus').summernote();
                                                                    $('#contact').summernote();
                                                                });
                                                            </script>
                                                            <script>
                                                                $('#references').summernote({
                                                                    placeholder: '',
                                                                    tabsize: 2,
                                                                    height: 120,
                                                                    toolbar: [
                                                                        ['style', ['style']],
                                                                        ['font', ['bold', 'underline', 'clear']],
                                                                        ['color', ['color']],
                                                                        ['para', ['ul', 'ol', 'paragraph']],
                                                                        ['table', ['table']],
                                                                        ['insert', ['link', 'picture', 'video']],
                                                                        ['view', ['fullscreen', 'codeview', 'help']]
                                                                    ]
                                                                });
                                                                $('#aboutus').summernote({
                                                                    placeholder: '',
                                                                    tabsize: 2,
                                                                    height: 200,
                                                                    toolbar: [
                                                                        ['style', ['style']],
                                                                        ['font', ['bold', 'underline', 'clear']],
                                                                        ['color', ['color']],
                                                                        ['para', ['ul', 'ol', 'paragraph']],
                                                                        ['table', ['table']],
                                                                        ['insert', ['link', 'picture', 'video']],
                                                                        ['view', ['fullscreen', 'codeview', 'help']]
                                                                    ]
                                                                });
                                                                $('#contact').summernote({
                                                                    placeholder: '',
                                                                    tabsize: 2,
                                                                    height: 120,
                                                                    toolbar: [
                                                                        ['style', ['style']],
                                                                        ['font', ['bold', 'underline', 'clear']],
                                                                        ['color', ['color']],
                                                                        ['para', ['ul', 'ol', 'paragraph']],
                                                                        ['table', ['table']],
                                                                        ['insert', ['link', 'picture', 'video']],
                                                                        ['view', ['fullscreen', 'codeview', 'help']]
                                                                    ]
                                                                });
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-9 col-sm-9  offset-md-3">
                                                    <button type="submit" class="btn btn-success">Edit Setting</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page content -->
@endsection
