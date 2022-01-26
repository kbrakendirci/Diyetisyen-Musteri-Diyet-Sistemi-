@php
    $setting=\App\Http\Controllers\HomeController::getSetting()
@endphp
<footr>
    <div class="footer ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('home')}}" class="logo_footer" style="font-weight: bold; color: #FFFFFF; font-family: "> Diet Balance</a>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 ">
                            <div class="address">
                                <h3>Address </h3>
                                <ul class="loca">
                                    <strong style="color: #cbd5e0">Company  :</strong> {{$setting->company}}<br>
                                    <strong style="color: #cbd5e0">Address  :</strong> {{$setting->address}}<br>
                                    <strong style="color: #cbd5e0">Phone  :</strong> {{$setting->phone}}<br>
                                    <strong style="color: #cbd5e0">Fax  :</strong> {{$setting->fax}}<br>
                                    <strong style="color: #cbd5e0">Email  :</strong> {{$setting->email}}<br>
                                    <strong style="color: #cbd5e0"><a href="{{route('about')}}" style="color: #cbd5e0">Chheckout</a></strong><br>
                                    <strong style="color: #cbd5e0"><a href="{{route('admin_login')}}" style="color: #cbd5e0">Login</a></strong>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="address">
                                <h3>Our Pages</h3>
                                <ul class="Menu_footer">
                                    <strong style="color: #cbd5e0"><a href="{{route('home')}}" style="color: #cbd5e0">Home</a></strong><br>
                                    <strong style="color: #cbd5e0"><a href="{{route('about')}}" style="color: #cbd5e0">About</a></strong><br>
                                    <strong style="color: #cbd5e0"><a href="{{route('references')}}" style="color: #cbd5e0">References</a></strong><br>
                                    <strong style="color: #cbd5e0"><a href="{{route('faq')}}" style="color: #cbd5e0">Faq</a></strong><br>
                                    <strong style="color: #cbd5e0"><a href="{{route('contact')}}" style="color: #cbd5e0">Contac Us</a></strong><br>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="address">
                                <h3>Social Link</h3>
                                <ul class="Menu_footer">
                                    @if($setting->twitter !=null) <li class="active"> <a href="{{$setting->twitter}}" target="_blank"><img src="{{asset('assets')}}/images/twitter.png" height="25px" width="25px">Twitter</a></li>@endif
                                    @if($setting->facebook !=null)<li><a href="{{$setting->facebook}}" target="_blank"><img src="{{asset('assets')}}/images/instagram.png" height="25px" width="25px">Instagram</a> </li>@endif
                                    @if($setting->instagram !=null)<li><a href="{{$setting->instagram}}" target="_blank">Instagram</a> </li>@endif
                                    @if($setting->linkedin !=null)<li><a href="{{$setting->linkedin}}" target="_blank">Linkedin</a> </li>@endif
                                    @if($setting->youtube !=null)<li><a href="{{$setting->youtube}}" target="_blank"><img src="{{asset('assets')}}/images/youtube.png" height="25px" width="25px">YouTube</a> </li>@endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>Design by <a href="https://html.design/"></a> {{$setting->company}}</p>
            </div>
        </div>
    </div>
</footr>
<!-- end footer -->
<!-- Javascript files-->
<script src="{{ asset('assets')}}/js/jquery.min.js"></script>
<script src="{{ asset('assets')}}/js/popper.min.js"></script>
<script src="{{ asset('assets')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets')}}/js/jquery-3.0.0.min.js"></script>
<script src="{{ asset('assets')}}/js/plugin.js"></script>
<!-- sidebar -->
<script src="{{ asset('assets')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{ asset('assets')}}/js/custom.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 11,
            center: {
                lat: 40.645037,
                lng: -73.880224
            },
        });
        //var image = '{{ asset('assets')}}/images/maps-and-flags.png';
        var beachMarker = new google.maps.Marker({
            position: {
                lat: 40.645037,
                lng: -73.880224
            },
            map: map,
            icon: image
        });
    }
</script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->
