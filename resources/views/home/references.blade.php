@extends('layouts.home')
@php
    $setting=\App\Http\Controllers\HomeController::getSetting()
@endphp
@section('title','References - '.$setting->title)
@section('description'){{ $setting->description }}@endsection
@section('keywords',$setting->keywords)

@section('content')
<div id="about" class="about">

    <div class="container">
        <div style="background-color:#67b168; text-align: center; height: 50px" ><h2 style="font-weight: bold; font-family:Noto; font-size:30px; padding-top: 7px">REFERANSLARIMIZ</h2></div>
        <br>
        <br>
        <div class="row">


                        {!! $setting->references !!}




        </div>

    </div>
</div>
@endsection
