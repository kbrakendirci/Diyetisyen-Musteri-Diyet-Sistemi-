<div id="vegetable" class="vegetable">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div  class="titlepage">
                    <h2> Frequently  <strong class="llow">Asked Questions</strong> </h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($faq as $rs)
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 " style="text-align: center; padding-top: 110px">
                <div class="vegetable_shop" style="text-align: center">
                    <h3>{{$rs->question}}</h3>

                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 ">
                <div class="vegetable_img">
                    <figure><img src="{{ asset('assets')}}/images/v1.jpg" alt="#"/></figure>
                    <span>❔</span>
                </div>
            </div>
            @endforeach
            <br>

            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 ">
                <div class="vegetable_img margin_top">
                    <figure><img src="{{ asset('assets')}}/images/v2.jpg" alt="#"/></figure>
                    <span>💬 </span>
                </div>
            </div>
                <div class="col-xl-4 col-lg-5 col-md-5 col-sm-12 " style="text-align: center; padding-top: 50px">
                    <div class="vegetable_shop">
                        <p style="font-weight: bold">{!! $rs->answer !!}</p>
                    </div>
                </div>

        </div>
    </div>
</div>

