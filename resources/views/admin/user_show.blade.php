<html>
<head>
    <title>{{$data->name}}</title>
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
    </head>
<body>
<div class="card">
    <div class="card-body">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">User Detail </h5>
                    @include('home.message')
                </div>
                <div class card-body>
                    <table class="table table-bordered">
                        <tr>
                            <th rowspan="8" align="center" valign="center">
                                @if ($data->profile_photo_path)
                                    <img src="{{Storage::url($data->profile_photo_path)}}" height="300" style="border-radius: 10px" alt="">
                                @endif
                            </th>
                        </tr>
                        <tr>
                            <th>Name</th> <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <th>Email</th> <td>{{$data->email}}</td>
                        </tr>
                        <tr>
                            <th>Phone</th> <td>{{$data->phone}}</td>
                        </tr>
                        <tr>
                            <th>Address</th> <td>{{$data->address}}</td>
                        </tr>
                        <tr>
                            <th>Date</th> <td>{{$data->created_at}}</td>
                        </tr>
                        <tr>
                            <th>Roles</th>
                            <td>
                                <table>
                                    @foreach($data->roles as $row)
                                        <tr>
                                            <td> {{ $row->name }}</td>
                                            <td>
                                                <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}" onclick="return confirm('Record will be Delete ! Are you sure?')"  ><img src="{{asset('assets/admin')}}/assets/images/delete.png" height="25"></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th>Add Role</th>
                            <td>
                                <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <select name="roleid">
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}">{{$rs->name}}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn-primary">Add Role</button>
                                </form>
                            </td>
                        </tr>
                    </table>
                    <!-- /.box-body -->
                    <div class="card-footer clearfix">
                    </div>
                </div>
            </div>
        </section>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->
</div>
</body>
</html>
