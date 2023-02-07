@extends('layouts.layout')

@section('title', 'KENSHOU')

@section('content')
    <div class="mv-02__wrapper">
        
        <picture class="mv-02__bg">
            <source srcset="" media="(min-width: 768px)">
            <img src="{{ asset('images/sec-02-01.png') }}" alt="">
        </picture>
        <div class="mv-02__inner">
            <h1 class="mv-02__title">
                <span class="mv-02__title-01">{{$textMessage['pageTitle1']}}</span>
                <span class="mv-02__title-02">{{$textMessage['pageTitle2']}}</span>
            </h1>
        </div>
    </div>
@endsection
