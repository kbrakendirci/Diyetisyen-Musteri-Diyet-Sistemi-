@extends('layouts.home')

@section('title','User Profile')

@section('content')
    <div id="about" class="about">

        <div class="container-fluid">
            <div class="row">

                <div id="aside" class="col-md-3">
                    @include('home.usermenu')
                </div>
                <!-- Aside-->

                <!-- Main-->
                <div id="aside" class="col-md-9">
                    @include('profile.show')
                </div>

            </div>

        </div>
    </div>
@endsection
