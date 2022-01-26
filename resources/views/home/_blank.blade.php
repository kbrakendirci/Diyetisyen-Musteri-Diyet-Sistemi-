@extends('layouts.home')

@section('title',$data->title)
@section('description'){{ $data->description }}@endsection
@section('keywords',$data->keywords)

@section('content')
    <div id="about" class="about">
        <div class="container-fluid">
            <div class="row">
                <div>
                    İçerik alanı
                </div>
            </div>
        </div>
    </div>
@endsection
