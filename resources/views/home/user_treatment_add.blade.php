@extends('layouts.home')

@section('title','Add Product')

@section('headerjs')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection

@section('content')
    <div id="about" class="about">

        <div class="container-fluid">
            <div class="row">


                    <div id="aside" class="col-md-2">
                        @include('home.usermenu')
                    </div>
                    <!-- Default box -->
                <div id="aside" class="col-md-10">
                    <div class="card">

                        <div class="card-body">
                            <div style="overflow:auto">
                                <div class="container">
                                    <form action="{{route('user_treatment_store')}}" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                                        @csrf
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Title</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" name="title" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Keyword</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" name="keywords" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Description</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" name="description" class="form-control" >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 ">Category</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <select  name="category_id" class="form-control select2">
                                                    <option value="0" selected="selected">Main Category</option>
                                                    @foreach($datalist as $rs)
                                                        <option value="{{ $rs->id }}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3" >Detail</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <textarea id="detail" name="detail"></textarea>
                                                <script>
                                                    CKEDITOR.replace( 'detail' );
                                                </script>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Price</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="number" name="price" value="0" class="form-control" >
                                            </div>
                                        </div>

                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Image</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="file" name="image"  class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 ">Status</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <select name="status" class="form-control">
                                                    <option >True</option>
                                                    <option>False</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Illness</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" name="illness" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 ">Type of Process</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <select name="type_of_process" class="form-control">
                                                    <option >Online</option>
                                                    <option>Yüz Yüze</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 ">Age Range</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <select name="age_range" class="form-control">
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
                                                <select name="target" class="form-control">
                                                    <option >Kilo Alma</option>
                                                    <option>Kilo Verme</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 ">Type of Diet</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <select name="type_of_diet" class="form-control">
                                                    <option >None</option>
                                                    <option >Vegan</option>
                                                    <option>Vejetaryen</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 ">Athlete</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <select name="athlete" class="form-control">
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
                                                <button type="submit" class="btn btn-success" style="background-color: #00A000">Add Treatment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- /.box-body -->

                <!-- /.box-footer-->
            </div>
                </div>

    </div>

        </div>
    </div>
@endsection
