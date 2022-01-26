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
                    <h3>Treatment Add</h3>
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
                            <h2>Treatment Add Form</h2>
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
                                <form action="{{route('admin_treatment_update',['id'=>$data->id])}}" enctype="multipart/form-data" method="post" class="form-horizontal form-label-left">
                                    @csrf
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
                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3 ">Category</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <select class="form-control select2" name="category_id" style="width: 100%;">
                                                <option value="0" selected="selected">Main Category</option>
                                                @foreach($datalist as $rs)
                                                    <option value="{{ $rs->id }}" @if ($rs->id == $data->parent_id) selected="selected" @endif >
                                                        {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Detail</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <textarea id="summernote" name="detail">{{$data->detail}}</textarea>
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
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Price</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="number" name="price" value="{{$data->price}}" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Image</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="file" name="image" class="form-control" >
                                            @if ($data->image)
                                                <img src="{{Storage::url($data->image)}}" height="60" alt="">
                                            @endif
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
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Illness</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" name="illness" value="{{$data->illness}}" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 ">Type of Process</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <select name="type_of_process" value="{{$data->type_of_process}}" class="form-control">
                                                    <option >Online</option>
                                                    <option>Yüz Yüze</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 ">Age Range</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <select name="age_range" value="{{$data->age_range}}" class="form-control">
                                                    <option>Genel</option>
                                                    <option>Bebeklik</option>
                                                    <option>Çocukluk</option>
                                                    <option>Ergen</option>
                                                    <option>Yaşlılık</option>
                                                    <option>Gebelik</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 ">Target</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <select name="target" value="{{$data->target}}" class="form-control">
                                                    <option>Genel</option>
                                                    <option >Kilo Alma</option>
                                                    <option>Kilo Verme</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 ">Type of Diet</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <select name="type_of_diet" value="{{$data->type_of_diet}}" class="form-control">
                                                    <option >None</option>
                                                    <option >Vegan</option>
                                                    <option>Vejetaryen</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 ">Athlete</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <select name="athlete" value="{{$data->athlete}}" class="form-control">
                                                    <option >None</option>
                                                    <option>Karbonhidrat</option>
                                                    <option>Yağ</option>
                                                    <option>Protein</option>
                                                </select>
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
