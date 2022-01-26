<section class="slider_section" style="background-image: url({{ asset('assets')}}/images/denemee.jpg);
    background-size:cover;
    padding-bottom: 150px;
    padding-top: 150px;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    ">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" >
            @foreach($slider as $rs)
                <div class="carousel-item @if ($loop->first) active @endif ">
                    <div class="container-fluid padding_dd">
                        <div class="carousel-caption">
                            <ul class="slides">
                                <div class="row " >
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" >
                                        <div class="images_box" style="padding-top: 120px; padding-left: 170px" >
                                            <li>
                                                <div class="item" >
                                                    <img src="{{Storage::url($rs->image)}}" style="height: 400px; width: 600px"  >
                                                </div>
                                            </li>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" style="text-align: center">
                                        <div class="text-bg" style="text-align: center; padding-right: 120px; padding-top: 100px">
                                            <span style="font-weight: bold; text-align: center">{{$rs->title}}</span>
                                            <p>{{$rs->price}} TL</p>
                                            <p>{{$rs->description}}</p>
                                            <form class="Vegetable" action="{{route('gettreatment')}}" method="post">
                                                @csrf
                                                @livewire('search')
                                            </form>
                                            @livewireScripts
                                            <a href="{{route('contact')}}">Contact Us</a>
                                            <a href="{{route('treatment',['id'=>$rs->id])}}">Learn Detail</a>
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
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</section>
