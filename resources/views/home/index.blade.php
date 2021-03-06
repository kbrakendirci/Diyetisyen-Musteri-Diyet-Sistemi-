@extends('layouts.home')
@section('title',$setting->title)
@section('description'){{ $setting->description}}@endsection
@section('keywords',$setting->keywords)
@section('content')
    @include('home._navigation')
    @include('home._about')
    @include('home._popular_diet')
    @include('home._last_added_diet')
    @include('home._vegetable')
    @include('home._clients')
    @include('home._our_dietitians')
    @include('home.randevu_al')
    @include('home._contact')
@endsection
