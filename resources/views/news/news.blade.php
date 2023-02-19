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
                <span class="mv-02__title-01">News</span>
                <span class="mv-02__title-02">お知らせ</span>
            </h1>
        </div>
    </div>

    <section class="sec-07__wrapper">
        <h2 class="sec-07__title c-title-01 c-title-01-02">
            <span class="sec-07__title-txt">お知らせ一覧</span>
        </h2>
        <div class="sec-07__inner">
            <div class="sec-07__block">
                <div class="sec-07__card">
                    <div class="sec-07__card-header">
                        <figure class="sec-07__card-header-img">
                            <img src="{{ asset('/images/sec-01.png') }}" alt="">
                        </figure>
                    </div>
                    <div class="sec-07__card-body">
                        <div class="sec-07__card-body-title-01">
                            <span class="sec-07__card-body-title-01-01">2020.09.06</span>
                            <span class="sec-07__card-body-title-01-02">新着情報</span>
                        </div>
                        <div class="sec-07__card-body-title-02">
                            東フリコンサルの実績が日経に掲載されました。
                        </div>
                    </div>
                </div>
                <div class="sec-07__card">
                    <div class="sec-07__card-header">
                        <figure class="sec-07__card-header-img">
                            <img src="{{ asset('/images/sec-01.png') }}" alt="">
                        </figure>
                    </div>
                    <div class="sec-07__card-body">
                        <div class="sec-07__card-body-title-01">
                            <span class="sec-07__card-body-title-01-01">2020.09.06</span>
                            <span class="sec-07__card-body-title-01-02">新着情報</span>
                        </div>
                        <div class="sec-07__card-body-title-02">
                            東フリコンサルの実績が日経に掲載されました。
                        </div>
                    </div>
                </div>
                <div class="sec-07__card">
                    <div class="sec-07__card-header">
                        <figure class="sec-07__card-header-img">
                            <img src="{{ asset('/images/sec-01.png') }}" alt="">
                        </figure>
                    </div>
                    <div class="sec-07__card-body">
                        <div class="sec-07__card-body-title-01">
                            <span class="sec-07__card-body-title-01-01">2020.09.06</span>
                            <span class="sec-07__card-body-title-01-02">新着情報</span>
                        </div>
                        <div class="sec-07__card-body-title-02">
                            東フリコンサルの実績が日経に掲載されました。
                        </div>
                    </div>
                </div>
                <div class="sec-07__card">
                    <div class="sec-07__card-header">
                        <figure class="sec-07__card-header-img">
                            <img src="{{ asset('/images/sec-01.png') }}" alt="">
                        </figure>
                    </div>
                    <div class="sec-07__card-body">
                        <div class="sec-07__card-body-title-01">
                            <span class="sec-07__card-body-title-01-01">2020.09.06</span>
                            <span class="sec-07__card-body-title-01-02">新着情報</span>
                        </div>
                        <div class="sec-07__card-body-title-02">
                            東フリコンサルの実績が日経に掲載されました。
                        </div>
                    </div>
                </div>
                <div class="sec-07__card">
                    <div class="sec-07__card-header">
                        <figure class="sec-07__card-header-img">
                            <img src="{{ asset('/images/sec-01.png') }}" alt="">
                        </figure>
                    </div>
                    <div class="sec-07__card-body">
                        <div class="sec-07__card-body-title-01">
                            <span class="sec-07__card-body-title-01-01">2020.09.06</span>
                            <span class="sec-07__card-body-title-01-02">新着情報</span>
                        </div>
                        <div class="sec-07__card-body-title-02">
                            東フリコンサルの実績が日経に掲載されました。
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
