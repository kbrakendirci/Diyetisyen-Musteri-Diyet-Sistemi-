<!-- clients -->
<div id="testimonial" class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2><strong class="llow">POPULAR DIET</strong></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<div style="background-image: url({{ asset('assets')}}/images/arkaplan2.jpg);
    background-size:cover;
    padding-bottom: 50px;
    padding-top: 50px;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    ">
    <br>
    <br>
    <div class="container">
        <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div>
                        <div class="">
                            <div class="row">
                                @foreach($popular_diet as $rs)
                                <div class="col-md-4 animate-box">
                                    <div class="full testimonial_cont" style="width: 350px; height: 550px">
                                        <div class="testomonial_img">
                                        <figure><a href="{{route('treatment',['id'=>$rs->id])}}" class="main_btn quick-view"><img src="{{Storage::url($rs->image)}}" alt="#" style="width: 250px; height: 200px"/></a></figure>
                                            <a href="{{route('treatment',['id'=>$rs->id])}}" class="main_btn quick-view"><img src="{{ asset('assets')}}/images/diet.png" style="height: 60px;width: 60px" alt="#"/></a>
                                        </div>
                                            <div class="cross_inner">
                                                @php
                                                    $avrgrev = \App\Http\Controllers\HomeController::avrgreview($rs->id);
                                                    $countreview = \App\Http\Controllers\HomeController::countreview($rs->id);
                                                @endphp
                                                <div class="rating" style="color:#0a0a0a">
                                                    <i class=" @if ($avrgrev< 1)  fa fa-star @else fa fa-star-empty @endif" ></i>
                                                    <i class=" @if ($avrgrev < 2)  fa fa-star @else  fa fa-star-empty @endif" ></i>
                                                    <i class=" @if ($avrgrev< 3)  fa fa-star @else  fa fa-star-empty @endif" ></i>
                                                    <i class=" @if ($avrgrev < 4)  fa fa-star @else fa fa-star-empty @endif" ></i>
                                                    <i class=" @if ($avrgrev < 5)  fa fa-star @else  fa fa-star-empty @endif" ></i>
                                                    <i>({{$countreview}})</i>
                                                </div>
                                        </div>
                                        <br>
                                        <h3 style="color: #0a0a0a; text-align: center; font-weight: bold"><a href="{{route('treatment',['id'=>$rs->id])}}" class="main_btn quick-view">{{$rs->title}}</a>
                                            <br>
                                            <br><strong class="ornage_color">{{$rs->price}} TL</strong></h3>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <br>
            <br>
        </div>
    </div>
</div>
