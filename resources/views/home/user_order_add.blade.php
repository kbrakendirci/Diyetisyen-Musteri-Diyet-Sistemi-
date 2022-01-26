@extends('layouts.home')

@section('title','Order Diet Menu')

@section('content')
    <div id="about" class="about">

        <div class="container-fluid">
            <form class="checkout-form" action="{{route('user_order_store')}}" method="post">
                @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title">
                        <h3 class="title" style="font-weight: bold">Order Detail</h3>
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="diyetisyen_id" name="diyetisyen_id" value="{{Auth::user()->name}}">
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
                        <input class="form-control" placeholder="address" type="text" name="address" value="{{Auth::user()->address}}">
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                        <input class="form-control" placeholder="treatment_id" type="text" name="treatment_id" value="{{$title}}">
                    </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input class="form-control" placeholder="Orderdate" type="text" name="Orderdate">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input class="form-control" placeholder="FinishDate" type="text" name="FinishDate">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input class="form-control" placeholder="months" type="text" name="months">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input class="form-control" placeholder="total" type="text" value="{{$price}}" name="total">
                        </div>
                    </div>


                </div>
                <div class="col-md-6">
                    <h3 class="section-title" style="font-weight: bold">Payment Detail Total = $ {{$price}}</h3>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="cardname" value="{{Auth::user()-> name}}" placeholder="Card Name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="cardnumber" value="" placeholder="Card Number">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="dates" value="" placeholder="Valid Dates mm/yy">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="key" value="" placeholder="Secret number">
                                </div>
                            </div>

                        </div>

                </div>
                <div class="col-md-12" >
                    <div class="pull-right" >
                        <button class="btn btn-primary">Place Order</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>





    <!--
    <div id="about" class="about">

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <form class="clearfix" id="checkout-form" action="{{route('user_order_store')}}" method="post">
                        <div class="row">
                            <div>
                                <div class="section-title">
                                    <h3 class="title">Billing Detail</h3>
                                Price: {{$price}}
                                Name: {{$title}}
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" placeholder="user_id" name="user_id" value="{{Auth::user()->name}}">
                                </div>
                                <div class="form-group">
                                    <input class="treatment_id" placeholder="treatment_id" type="text" name="treatment_id" value="{{Auth::user()->email}}">
                                </div>
                                <div class="form-group">
                                    <input class="diyetisyen_id" placeholder="diyetisyen_id" type="text" name="diyetisyen_id" value="{{Auth::user()->phone}}">
                                </div>
                                <div class="form-group">
                                    <input class="Orderdate" placeholder="Orderdate" type="text" name="Orderdate" value="{{Auth::user()->address}}">
                                </div>
                                <div class="form-group">
                                    <input class="title" placeholder="title" type="text" name="title" value="{{$title}}">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <button class="send">Send</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    -->
@endsection
