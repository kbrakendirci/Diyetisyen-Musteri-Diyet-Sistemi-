@extends('layouts.home')
@php
    $setting=\App\Http\Controllers\HomeController::getSetting()
@endphp
@section('title','Contact -',$setting->title)
@section('description'){{ $setting->description }}@endsection
@section('keywords',$setting->keywords)

@section('content')
    <div id="about" class="about">

        <div class="container-fluid" >
            <div style="background-color:#67b168; text-align: center; height: 50px" ><h2 style="font-weight: bold; font-family:Noto; font-size:30px; padding-top: 7px">İletişim Bilgilerimiz</h2></div>
            <div class="row" style="padding-left:25px;padding-right:25px">
                <div class="col-md-6" style=" font-weight: bold">
                    {!! $setting->contact !!}
                </div>
                <div class="col-md-6" style="padding-top: 25px">
                    <br>
                    <h3 class="section-title" style="font-weight: bold; color:#3e8f3e">İletişim Formu</h3>
                    @include('home.message')
                    <form class="contact_bg" action="{{route('sendmessage')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Name & Surname">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea type="text" rows="5" class="form-control" name="message" placeholder="Message"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="pull-right">
                                    <input type="submit" style="background-color: #3e8f3e" value="Send Message" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>



            </div>

        </div>

    </div>
    <br>
@endsection
