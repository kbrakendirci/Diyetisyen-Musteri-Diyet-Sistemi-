<!-- clients -->
<div id="testimonial" class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2><strong class="llow">REVIEWS</strong></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="background-image: url({{ asset('assets')}}/images/reviewss.jpg);
    background-size:cover;
    padding-bottom: 150px;
    padding-top: 150px;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    ">
    <div class="container">
        <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#testimonial_slider" data-slide-to="0" class="active"></li>
                <li data-target="#testimonial_slider" data-slide-to="1" class=""></li>
                <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                @foreach($review as $rs)
                <div class="carousel-item @if ($loop->first) active @endif">
                    <div class="testomonial_section">
                        <div class="full testimonial_cont">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pa_right">
                                    <div class="testomonial_img">
                                        <figure><img class="img-responsive" src="{{Storage::url($rs->treatment->image)}}" alt=""></figure>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 pa_left">
                                    <div class="cross_inner">
                                        <h3>{{$rs->treatment->title}}<br><strong class="ornage_color">{{$rs->subject}}</strong></h3>
                                        <p>{{$rs->review}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
