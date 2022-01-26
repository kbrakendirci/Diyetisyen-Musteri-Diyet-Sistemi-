<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>@yield('title')</title>
<meta name="keywords" content="@yield('keyword')">
<meta name="description" content="@yield('description')">
<meta name="author" content="Kübra Kendirci">
<!-- fevicon -->
<link rel="icon" href="{{ asset('assets')}}/images/fevicon.png" type="image/gif" />
<!-- bootstrap css -->
<link rel="stylesheet" href="{{ asset('assets')}}/css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" href="{{ asset('assets')}}/css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="{{ asset('assets')}}/css/responsive.css">
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="{{ asset('assets')}}/css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="{{ asset('assets')}}/https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link rel="stylesheet" href="{{ asset('assets')}}/https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
    <script src="{{ asset('assets')}}/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="{{ asset('assets')}}/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> @yield('title') </title>
<!-- Bootstrap -->
<link href="{{asset('assets')}}/admin/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="{{asset('assets')}}/admin/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- NProgress -->
<link href="{{asset('assets')}}/admin/assets/vendors/nprogress/nprogress.css" rel="stylesheet">
<!-- iCheck -->
<link href="{{asset('assets')}}/admin/assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
<!-- bootstrap-wysiwyg -->
<link href="{{asset('assets')}}/admin/assets/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
<!-- Select2 -->
<link href="{{asset('assets')}}/admin/assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
<!-- Switchery -->
<link href="{{asset('assets')}}/admin/assets/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
<!-- starrr -->
<link href="{{asset('assets')}}/admin/assets/vendors/starrr/dist/starrr.css" rel="stylesheet">
<!-- bootstrap-daterangepicker -->
<link href="{{asset('assets')}}/admin/assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
<!-- Custom Theme Style -->
<link href="{{asset('assets')}}/admin/assets/build/css/custom.min.css" rel="stylesheet">
 <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">

                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> Message Detail </h2>
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
                        @include('home.message')
                        <div class="x_content">
                            <div class="x_content">
                                <br>
                                <form class="forms-sample" action="{{route('admin_message_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">

                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Id</th><td> {{ $data->id }}</td>
                                            </tr><tr>
                                                <th>Name</th><td> {{($data->name)}}</td>
                                            </tr><tr>
                                                <th>Email</th><td> {{ $data->email }}</td>
                                            </tr><tr>
                                                <th>Phone</th><td> {{ $data->phone }}</td>
                                            </tr><tr>
                                                <th>Subject</th><td> {{ $data->subject }}</td>
                                            </tr><tr>
                                                <th>Message</th><td> {{ $data->message }}</td>
                                            </tr><tr>
                                                <th>Admin Note</th>
                                                <td>
                                                    <textarea id="note" name="note">{{ $data->note }}</textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary">Update Message</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
    </div>
