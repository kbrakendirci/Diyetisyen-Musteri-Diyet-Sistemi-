@extends('layouts.home')

@section('title','User Review')


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
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Subject</th>
                                            <th>Review</th>
                                            <th>Rate</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @include('home.message')
                                        @foreach($datalist as $rs)
                                            <tr>
                                                <td> {{ $rs->id }}</td>
                                                <td> {{ $rs->subject }}</td>
                                                <td> {{ $rs->review }}</td>
                                                <td> {{ $rs->rate }}</td>
                                                <td> {{ $rs->status }}</td>
                                                <td> {{$rs->created_at}}</td>
                                                <td style="text-align: center"><a href="{{route('user_review_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"  ><img src="{{asset('assets/images')}}/delete.png" width="25px" height="25px"></a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>

                                    </table>
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
