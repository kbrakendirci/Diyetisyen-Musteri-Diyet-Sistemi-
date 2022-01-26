@extends('layouts.admin')

@section('title', 'Admin Panel Home Page')

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
                    <h3>Rezervation Detail</h3>
                </div>
                <div class="title_right">
                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Rezervation Detail</h2>
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
                                <form action="{{route('admin_rezervation_update',['id'=>$data->id])}}" enctype="multipart/form-data" method="post" class="form-horizontal form-label-left">
                                    @csrf
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Id</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" name="id" value="{{$data->id}}" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Name</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" name="name" value="{{$data->name}}" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Email</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" name="email" value="{{$data->email}}" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3 ">Phone</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" name="phone" value="{{$data->phone}}" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Price</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="number" name="price" value="{{$data->price}}" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Start Date</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" name="startdate" value="{{$data->startdate}}" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">End Date</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" name="enddate" value="{{$data->enddate}}" class="form-control" >
                                        </div>
                                    </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 ">Months</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="number" name="months" value="{{$data->months}}" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Status</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <select name="status" value="{{$data->status}}" class="form-control">
                                                    <option >New</option>
                                                    <option >Accepted</option>
                                                    <option >Canceled</option>
                                                    <option>Completed</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 ">IP</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" name="ip" value="{{$data->ip}}" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 ">Note</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <textarea id="summernote" name="note">{{$data->note}}</textarea>
                                                <script>
                                                    $(document).ready(function() {
                                                        $('#summernote').summernote();
                                                    });
                                                </script>
                                                <script>
                                                    $('#summernote').summernote({
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
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9  offset-md-3">
                                            <button type="submit" class="btn btn-success">Edit Treatment</button>
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
