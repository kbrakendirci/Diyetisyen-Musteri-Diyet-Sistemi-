@extends('layouts.home')
@php
    $setting=\App\Http\Controllers\HomeController::getSetting()
@endphp
@section('title','About Us -'.$setting->title)
@section('description'){{ $setting->description }}@endsection
@section('keywords',$setting->keywords)

@section('content')
<div id="about" class="about">

    <div class="container-fluid">
        <div style="background-color:#67b168; text-align: center; height: 50px" ><h2 style="font-weight: bold; font-family:Noto; font-size:30px; padding-top: 7px">Hakkımızda</h2></div>
        <div class="row">

                <div style="padding: 40px">


                        {!! $setting->aboutus !!}


                </div>


        </div>

    </div>
</div>
<br>
@endsection

