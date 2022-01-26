@extends('layouts.admin')

@section('title', 'Admin Panel Rezervations Page')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Rezervation Page</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Rezervation Page</h2>
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
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Price</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Months</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>
                                @foreach($datalist as $rs)
                                    <p></p>

                                    <tbody>
                                    <tr>
                                        <td> {{ $rs->id }}</td>
                                        <td> {{ $rs->user->name }}</td>
                                        <td> {{ $rs->name }}</td>
                                        <td> {{ $rs->email }}</td>
                                        <td> {{ $rs->phone }}</td>
                                        <td> {{ $rs->price }}</td>
                                        <td> {{ $rs->startdate }}</td>
                                        <td> {{ $rs->enddate }}</td>
                                        <td> {{ $rs->months }}</td>
                                        <td> {{ $rs->status }}</td>
                                        <td>
                                            <a href="{{route('admin_rezervation_show',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800 height=600')">
                                               Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
