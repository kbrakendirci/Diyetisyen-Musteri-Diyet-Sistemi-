@extends('layouts.home')

@section('title','Rezervation Diet Menu')

@section('content')
    <div id="about" class="about">

        <div class="container-fluid">
            @include('home.message')
            <form class="checkout-form" action="{{route('user_rezervation_store')}}" method="post">
                @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title">
                        <h3 class="title" style="font-weight: bold">Rezervation Detail</h3>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="name" name="name" value="{{Auth::user()->name}}">
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                        <input class="form-control" placeholder="email" type="text" name="email" value="{{Auth::user()->email}}">
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                        <input class="form-control" placeholder="phone" type="text" name="phone" value="{{Auth::user()->phone}}">
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                        <input class="form-control" placeholder="treatment_id" type="hidden" name="treatment_id" value="{{$data->id}}">
                    </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input class="form-control" placeholder="price" type="text" name="price" value="{{$data->price}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input class="form-control" placeholder="startdate" type="datetime-local" name="startdate">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input class="form-control" placeholder="enddate" type="datetime-local" name="enddate">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input class="form-control" placeholder="months" type="text" name="months">
                        </div>
                    </div>
                </div>
                <div class="col-md-12" >
                    <div class="pull-right" >
                        <button class="btn btn-primary" type="submit" style="background-color: #67b168">Make Appointment</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>

@endsection
