
<div id="testimonial" class="clients" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2><strong class="llow">OUR DIETITIANS</strong></h2>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<div id="fh5co-about" class="fh5co-agent" style="background-color:#BFE3B4;padding-top: 50px; ">
    <div class="container" >
        <div class="row" >

            @php
                $userRoles=\App\Http\Controllers\UserController::userlist()
            @endphp
            @foreach($userRoles as $rs)
                <div class="col-sm-3 text-center animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-staff">
                        @if ($rs->profile_photo_path)
                            <img src="{{Storage::url($rs->profile_photo_path)}}" height="250" width="250" style="border-radius: 300px; border: #0a0a0a" alt="">
                        @endif
                        <h3 style="font-weight: bold">{{$rs->name}}</h3>
                        <p style="color: #0a0a0a">{{$rs->email}}</p>
                        <p style="color: #0a0a0a">{{$rs->phone}}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <br>
    <br>

</div>
<br>
<br>
