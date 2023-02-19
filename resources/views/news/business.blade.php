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
                <span class="mv-02__title-01">Service</span>
                <span class="mv-02__title-02">事業内容</span>
            </h1>
        </div>
    </div>

    <section class="sec-06__wrapper">
        <div class="sec-06__inner">
            <figure class="sec-06__img">
                <img src="http://54.92.51.167/images/sec-01.png" alt="">
            </figure>
            <div class="sec-06__block">
                <h2 class="c-title-01">
                    {{-- <span class="c-title-01-txt-01">About</span> --}}
                    <span class="c-title-01-txt-02">私たちについて</span>
                </h2>
                <div class="sec-06__text-area">
                    <p>
                        私たちは、10年の歴史を持つフリーランスの活用に特化した人材コンサルタント企業です。外部パートナー選びで分からないことがあればご相談ください。
                    </p>
                </div>
                <div class="sec-06__btn-area">
                    <div class="c-btn c-btn-02">
                        <span class="c-btn-txt">
                            私たちについて
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec-06__inner">
            <figure class="sec-06__img">
                <img src="http://54.92.51.167/images/sec-01.png" alt="">
            </figure>
            <div class="sec-06__block">
                <h2 class="c-title-01">
                    {{-- <span class="c-title-01-txt-01">About</span> --}}
                    <span class="c-title-01-txt-02">私たちについて</span>
                </h2>
                <div class="sec-06__text-area">
                    <p>
                        私たちは、10年の歴史を持つフリーランスの活用に特化した人材コンサルタント企業です。外部パートナー選びで分からないことがあればご相談ください。
                    </p>
                </div>
                <div class="sec-06__btn-area">
                    <div class="c-btn">
                        <span class="c-btn-txt">
                            私たちについて
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec-06__inner">
            <figure class="sec-06__img">
                <img src="http://54.92.51.167/images/sec-01.png" alt="">
            </figure>
            <div class="sec-06__block">
                <h2 class="c-title-01">
                    {{-- <span class="c-title-01-txt-01">About</span> --}}
                    <span class="c-title-01-txt-02">私たちについて</span>
                </h2>
                <div class="sec-06__text-area">
                    <p>
                        私たちは、10年の歴史を持つフリーランスの活用に特化した人材コンサルタント企業です。外部パートナー選びで分からないことがあればご相談ください。
                    </p>
                </div>
                <div class="sec-06__btn-area">
                    <div class="c-btn c-btn-02">
                        <span class="c-btn-txt">
                            私たちについて
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
