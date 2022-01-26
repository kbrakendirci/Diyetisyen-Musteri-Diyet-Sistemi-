@extends('layouts.home')

@section('title','Randevu Diet')

@section('content')
    <div id="about" class="about">

        <div class="container-fluid">
            @include('home.message')
            <form class="checkout-form" action="{{route('user_randevu_store')}}" method="post" >
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-title">
                            <h3 class="title" style="font-weight: bold">Randevu Alım Sayfası</h3>
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
                            <div class="form-group row">
                                <select name="diyetisyen_id" class="form-control">
                                    @php
                                        $userRoles=\App\Http\Controllers\UserController::userlist()
                                    @endphp
                                    @foreach($userRoles as $rs)
                                        <option>{{$rs->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" placeholder="kilo" type="text" name="kilo">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" placeholder="nabız" type="text" name="nabız">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" placeholder="yag_oranı" type="text" name="yag_oranı">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" placeholder="date" type="datetime-local" name="date">
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
                            <button class="btn btn-primary" type="submit">Randevu Al</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
