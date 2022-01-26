@extends('layouts.home')
@php
    $setting=\App\Http\Controllers\HomeController::getSetting()
@endphp
@section('title',$data->title)
@section('description'){{ $data->description }}@endsection
@section('keywords',$data->keywords)

@section('content')
    <div id="about" class="about" >

        <div class="container-fluid" >
            <div style="background-color:#67b168; text-align: center; height: 50px" ><h2 style="font-weight: bold; font-family:Noto; font-size:30px; padding-top: 7px">🍽Hizmetlerimiz🍽</h2></div>
            <div class="row" >

                <div style="padding:50px">

                    <div class="row" style="margin-left:25px">
                    @foreach($datalist as $rs)
                        <!-- properties -->
                            <div class="col-lg-4 col-sm-8" >

                                <div class="properties" >

                                         <img
                                            src="{{Storage::url($rs->image)}}" class="img-responsive"
                                            alt="properties" style="height: 300px; width: 400px" >

<br><br>
                                    <h4 style="text-align: center; font-weight: bold"><a
                                            href="property-detail.php">{{$rs->title}}</a></h4>
                                    <hr>
                                    <p style="text-align: center;"><a style="color: #686868"
                                            href="property-detail.php">{{$rs->price}} TL</a>
                                    </p>
                                    <hr>
                                    <p class="price" style="text-align: center; width: 400px; height: 50px">{!! $rs->description !!}</p>
                                    <br>
                                    <div style="text-align:center;padding-top:60px;" ><a class="btn btn-primary" style=" background-color: #3e8f3e"
                                                                      href="{{route('treatment',['id'=>$rs->id])}}">View Details</a></div>
                                    <br>
                                </div>

                            </div>



                        @endforeach
                    </div>

                </div>


            </div>

        </div>
    </div>
@endsection
