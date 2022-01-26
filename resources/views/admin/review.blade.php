@extends('layouts.admin')

@section('title', 'Review Page')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Reviews</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Reviews</h2>
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
                            @include('home.message')
                            <div class="x_content">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Home</th>
                                        <th>Subject</th>
                                        <th>Review</th>
                                        <th>Rate</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $rs)
                                        <tr>
                                            <td> {{ $rs->id }}</td>
                                            <td> <a href="{{route('admin_user_show',['id'=>$rs->user->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">
                                                    {{($rs->user->name)}}
                                                </a></td>
                                            <td> <a href="{{route('treatment',['id'=>$rs->treatment->id])}}" target="_blank">
                                                    {{$rs->treatment->title}}
                                                </a> </td>
                                            <td> {{ $rs->subject }}</td>
                                            <td> {{ $rs->review }}</td>
                                            <td> {{ $rs->rate }}</td>
                                            <td> {{ $rs->status }}</td>
                                            <td> {{$rs->created_at}}</td>
                                            <td> <a href="{{route('admin_review_show',['id'=>$rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">
                                                    Edit</a></td>
                                            <td style="text-align: center"><a href="{{route('admin_review_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"  ><img src="{{asset('assets/images')}}/delete.png" height="25" ></a></td>
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
    </div>
    <!-- /page content -->

@endsection
@section('footer')
    <script src="{{asset('assets')}}/admin/assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <link href="{{asset('assets')}}/admin/assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <script src="{{asset('assets')}}/admin/assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets')}}/admin/assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="{{asset('assets')}}/admin/assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{asset('assets')}}/admin/assets/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="{{asset('assets')}}/admin/assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="{{asset('assets')}}/admin/assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('assets')}}/admin/assets/build/js/custom.min.js"></script>
    <script>
        <div class="row">
            <div class="col-sm-6">
                <div class="dataTables_length" id="datatable_length">
                    <label>Show
                        <select name="datatable_length" aria-controls="datatable" class="form-control input-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select> entries
                    </label>
                </div>
            </div>
            <div class="col-sm-6">
                <div id="datatable_filter" class="dataTables_filter">
                    <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></label>
                </div>
            </div>
        </div>

    </script>
@endsection
