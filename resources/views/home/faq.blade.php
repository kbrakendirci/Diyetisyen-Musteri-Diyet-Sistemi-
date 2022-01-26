@extends('layouts.home')

@section('title','Frequently Asked Questions')

@section('content')
    <div id="about" class="about">
        <section class="menu space60">
        <div class="container">
            <div style="background-color:#67b168; text-align: center; height: 50px" ><h2 style="font-weight: bold; font-family:Noto; font-size:30px; padding-top: 7px">Sıkça Sorulan Sorular</h2></div>
            <div class="row">

                <!-- menu-->

                            <!-- Tabs accordion -->
                            <div class="col-md-12">
                                <div class="page-header">

                                </div>
                            <!--{{$i=1}}-->
                                @foreach($datalist as $rs)
                                    @if($i==1)
                                        <div class="panel-group" id="accordion-e1">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title active">

                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-e1"
                                                           href="#{{$i}}">✔️
                                                            {{$rs->question}}
                                                            <span class="fa fa-minus"></span>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="{{$i}}" class="panel-collapse collapse in ">
                                                    <div class="panel-body">
                                                        <p>{!! $rs->answer!!}</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <br>
                                    <!-- {{$i=$i+1}}-->
                                        @continue($i==2)
                                    @endif

                                    <div class="panel-group" id="accordion-e1">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">

                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-e1"
                                                       href="#{{$i}}">✔️
                                                        {{$rs->question}}
                                                        <span class="fa fa-minus"></span>
                                                    </a>

                                                </h4>
                                            </div>
                                            <div id="{{$i}}" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>{!! $rs->answer!!}</p>
                                                </div>
                                            </div>
                                            <br>
                                        </div>

                                    </div>
                                <!-- {{$i=$i+1}}-->
                                @endforeach

                            </div>


                        </div>
                    </div>
                </section>
            </div>
    <br>   <br>
@endsection

