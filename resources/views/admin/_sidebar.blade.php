<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{route('admin_home')}}" class="site_title"><i class="fa fa-paw"></i> <span>DIET BALANCE!</span></a>
        </div>
<br>
        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix" style="margin-left: 20px; margin-top: 20px">
            <div class="profile_pic">
                @if (Auth::user()->profile_photo_path)
                    <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" height="50px" width="50px" style="border-radius: 10px" alt="">
                @endif
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>@auth()
                        {{ Auth::user()->name}}
                    @endauth</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->
        <br />
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li> <a href="{{route('admin_category')}}"><i class="fa fa-tasks"></i> Category <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        </ul>
                    </li>
                    <li> <a href="{{route('admin_treatments')}}"><i class="fa fa-qrcode"></i> Treatments <span class="fa fa-chevron-down"></span></a>
                    </li>
                    <li> <a href="{{route('admin_setting')}}"><i class="fa fa-cog"></i>Settings<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        </ul>
                    </li>
                    <li> <a href="{{route('admin_message')}}"><i class="fa fa-envelope"></i>Contact Messages<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        </ul>
                    </li>
                    <li> <a href="{{route('admin_faq')}}"><i class="fa fa-question-circle"></i>FAQ<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        </ul>
                    </li>
                    <li> <a href="{{route('admin_review')}}"><i class="fa fa-comment"></i>Reviews<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        </ul>
                    </li>
                    <li> <a href="{{route('admin_users')}}"><i class="fa fa-users"></i>Users<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        </ul>
                    </li>
                    <li><a><i class="fa fa-calendar"></i> Rezervations <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" >
                            <li><a href="{{route('admin_rezervations')}}">All Rezervations</a></li>
                            <li><a href="{{route('admin_rezervation_list',['status'=>'new'])}}">New Rezervations</a></li>
                            <li><a href="{{route('admin_rezervation_list',['status'=>'accepted'])}}">Accepted Rezervations</a></li>
                            <li><a href="{{route('admin_rezervation_list',['status'=>'canceled'])}}">Canceled Rezervations</a></li>
                            <li><a href="{{route('admin_rezervation_list',['status'=>'completed'])}}">Completed Rezervations</a></li>
                        </ul>
                    </li>
                    <li> <a href="{{route('admin_randevus')}}"><i class="fa fa-users"></i>Randevu<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->
        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings" href="{{route('admin_setting')}}">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            @auth()
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
            @endauth
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
