@extends('layouts.home')

@section('title',"Diet List")

@section('content')
    <div style="background-color: #f5f5f5">
        <br>
        <div class="container" >
            <!-- Searh-->
            <div class="header-search" >
                <h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
                <form class="Vegetable" action="{{route('gettreatment')}}" method="post">
                    @csrf
                    @livewire('search')

                    <button class="Search_btn" style="height: 50px; width: 100px; margin-left: 10px">Search</button>
                </form>
                @livewireScripts


            </div>

            <br>

            <br>

            <br>
            <div class="row">
            @foreach($datalist as $rs)
                <!-- properties -->
                    <div class="col-md-4 animate-box">

                        <div class="fh5co-property"
                             style="background-image: url({{Storage::url($rs->image)}});">
                        <h4 style="text-align: center"><a
                                href="property-detail.php">{{$rs->title}}</a></h4>
                        <hr>

                        <hr>
                        <p class="price" style="text-align: center">Price: {{$rs->price}}
                            TL</p>
                        <div style="text-align:center"><a class="btn btn-primary" href="{{route('treatment',['id'=>$rs->id])}}">View Details</a></div>

                        <br><br>
                    </div>

                @endforeach




            </div>
        </div>
    </div>
@endsection

