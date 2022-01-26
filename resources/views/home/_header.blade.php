<header>
    <!-- header inner -->
    <div class="header-top">
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="/" style="color:#00A000">DIET BALANCE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu ">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="/">🥑 Home</a> </li>
                                        <li> <a href="{{route('about')}}">🌿 About</a> </li>
                                        <li class="dropdown">
                                            <a href="./shop_fullwidth.html" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                               aria-haspopup="true" aria-expanded="false">🥦 Category<span class="caret"></span></a>
                                            @include('home._category')
                                        </li>
                                        <li> <a href="{{route('references')}}">🍀 References</a> </li>
                                        <li> <a href="{{route('faq')}}">🍏Faq</a> </li>
                                        <li> <a href="{{route('contact')}}">🥝Contact Us</a> </li>
                                        @guest
                                            <li><a href="/login">
                                                    <img src="{{ asset('assets')}}/images/login.jpg" height="20px" width="20px">Login</a></li>
                                            <li><a href="/register">
                                                    <img src="{{ asset('assets')}}/images/c_account.png" height="20px" width="20px">Create Account</a></li>
                                        @endguest
                                        <li>
                                            @auth
                                            <div class="row">
                                                <a href="#" style="font-size:12px; color:#0a0a0a" class="fh5co-sub-ddown" data-toggle="dropdown" aria-expanded="true">{{ Auth::user()->name}} </a>
                                                <img src="{{ Auth::user()->profile_photo_url}}" height="35" width="35">
                                            </div>
                                            <ul class="fh5co-sub-menu" style=" left: auto;right: 0 ">
                                                <li><a href="{{route('myprofile')}}" onclick="return !window.open(this.href, '','top=50 left=100,width=1100,height=700')">
                                                        <img src="{{ asset('assets')}}/images/my_account.png" height="20" width="20">My Account</a></li>
                                                <li><a href="{{route('user_treatments')}}" >
                                                        <img src="{{ asset('assets')}}/images/my_product.png" height="20" width="20">My Treatments</a></li>
                                                <li><a href="{{ route('admin_logout') }}" >
                                                        <img src="{{ asset('assets')}}/images/logout.png" height="20" width="20">Logout</a></li>
                                            </ul>
                                            @endauth
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
    <!-- end header -->
</header>
