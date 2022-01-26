@extends('layouts.home')
@section('title',$data->title)
@section('description'){{ $data->description }}@endsection
@section('keywords',$data->keywords)

@section('content')
<BR>
    <div id="breadcrumb" style="text-align: left">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a> </li>
                <li>/</li>
                <li>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category, $data->category->title)}}</li>
                <li class="active">{{$data->title}}</li>
            </ul>
        </div>
    </div>
    <div id="about" class="about">
        <div class="container">
            <div style="background-color:#67b168; text-align: center; height: 50px" ><h2 style="font-weight: bold; font-family:Noto; font-size:30px">{{$data->title}}</h2></div>
                <div class="row">
                            <br>
                            <div class="col-xl-8 col-lg-6 col-md-6 col-sm-12">
                                <!-- Slider Starts -->
                                <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        @foreach($datalist as $rs)
                                            <div class="carousel-item @if ($loop->first) active @endif ">
                                                <div class="container-fluid padding_dd">
                                                    <div class="carousel-caption">
                                                        <ul class="slides">
                                                            <div class="row " >
                                                                <div>
                                                                    <div class="images_box" style="padding-top: 50px; padding-left: 50px" >
                                                                        <li>
                                                                            <div class="item" >
                                                                                <img src="{{Storage::url($rs->image)}}" style="height: 400px; width: 600px"  >
                                                                            </div>
                                                                        </li>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                </div>
                            </div>
                        @php
                            $avrgrev = \App\Http\Controllers\HomeController::avrgreview($data->id);
                            $countreview = \App\Http\Controllers\HomeController::countreview($data->id);
                        @endphp
                        <div class="rating">
                            <i class=" @if ($avrgrev<=1) icon-star @else icon-star-empty  @endif"></i>
                            <i class=" @if ($avrgrev<=2) icon-star @else icon-star-empty  @endif"></i>
                            <i class=" @if ($avrgrev<=3) icon-star @else icon-star-empty  @endif"></i>
                            <i class=" @if ($avrgrev<=4) icon-star @else icon-star-empty  @endif"></i>
                            <i class=" @if ($avrgrev<=5) icon-star @else icon-star-empty  @endif"></i>
                        </div>
                        <a href="#tab2">{{$countreview}} Review(s){{$avrgrev}} / Add Review</a>
                        <br>
                        <br>
                            <h3 style="font-weight: bold">Tedavinin Tanımı </h3>
                            <p>{!! $data->description !!}</p>
                        <hr>
                        <h3 style="font-weight: bold">Tedavinin Detaylı Anlatımı </h3>
                            <p>{!! $data->detail !!}</p>
                        <h3 style="font-weight: bold">Tedavinin Fiyatı </h3>
                        <p> {{$data->price}} TL</p>
                        <br>
                        <form action="{{route('user_rezervation_add',['treatment_id'=>$data->id])}}" method="post">
                            @csrf
                            <input type="hidden" name="price" value="{{$data->price}}">
                            <input type="hidden" name="title" value="{{$data->title}}">
                            <div class="pull-left">
                                <button type="submit" class="btn btn-primary" style="background-color: #67b168">Make Appointment</button>

                            </div>
                        </form>

<br>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 padding_rl" style="margin-top: 60px">

                            <span><h3 style="font-weight: bold">Write Your Review</h3></span>
                            @livewireStyles
                            @livewireScripts
                            @livewire('review', ['id' => $data->id])
                        <br>

                    </div>

                    <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 padding_rl" style="margin-top: 60px; padding-left: 20px">
                            <span><h3 style="font-weight: bold">Reviews ({{$countreview}})</h3></span>
                        @foreach($reviews as $rs)
                            <div class="single">

                                <div class="heading">
                                    <div><a href="#"><i class="icon-user3"></i>{{$rs->user->name}}</a></div>
                                    <div><a href="#"><i class="icon-clock4"></i>{{$rs->created_at}}</a></div>

                                    <div class="rating">

                                        <i class=" @if ($rs->rate < 1)  fa fa-star @else fa fa-star-empty @endif" ></i>
                                        <i class=" @if ($rs->rate < 2)  fa fa-star @else  fa fa-star-empty @endif" ></i>
                                        <i class=" @if ($rs->rate < 3)  fa fa-star @else  fa fa-star-empty @endif" ></i>
                                        <i class=" @if ($rs->rate < 4)  fa fa-star @else fa fa-star-empty @endif" ></i>
                                        <i class=" @if ($rs->rate < 5)  fa fa-star @else  fa fa-star-empty @endif" ></i>

                                    </div>
                                </div>
                                <div class="body">
                                    <strong>{{$rs->subject}}</strong>
                                    <p>{{$rs->review}}</p>
                                </div>

                            </div>
                            <hr>
                        @endforeach

                        </div>

                </div>

        </div>
    </div>

@endsection
