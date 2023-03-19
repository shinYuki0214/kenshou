@extends('layouts.layout')

@section('title', 'KENSHOU')

@section('content')
    <div class="mv-02__wrapper">
        <picture class="mv-02__bg">
            <source srcset="{{ asset('images/about-mv-bg-pc.png') }}" media="(min-width: 768px)">
            <img src="{{ asset('images/about-mv-bg.png') }}" alt="">
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
                <img src="{{asset('images/bussiness-01.png')}}" alt="">
            </figure>
            <div class="sec-06__block">
                <h2 class="c-title-01">
                    {{-- <span class="c-title-01-txt-01">About</span> --}}
                    <span class="c-title-01-txt-02">外装リフォーム</span>
                </h2>
                <div class="sec-06__text-area">
                    <p>
                        私たちは、10年の歴史を持つフリーランスの活用に特化した人材コンサルタント企業です。外部パートナー選びで分からないことがあればご相談ください。
                    </p>
                </div>
                <div class="sec-06__btn-area">
                    <div class="c-btn c-btn-02">
                        <span class="c-btn-txt">
                            施工例はこちら
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec-06__inner">
            <figure class="sec-06__img">
                <img src="{{asset('images/bussiness-01.png')}}" alt="">
            </figure>
            <div class="sec-06__block">
                <h2 class="c-title-01">
                    {{-- <span class="c-title-01-txt-01">About</span> --}}
                    <span class="c-title-01-txt-02">内装リフォーム</span>
                </h2>
                <div class="sec-06__text-area">
                    <p>
                        私たちは、10年の歴史を持つフリーランスの活用に特化した人材コンサルタント企業です。外部パートナー選びで分からないことがあればご相談ください。
                    </p>
                </div>
                <div class="sec-06__btn-area">
                    <div class="c-btn">
                        <span class="c-btn-txt">
                            施工例はこちら
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec-06__inner">
            <figure class="sec-06__img">
                <img src="{{asset('images/bussiness-01.png')}}" alt="">
            </figure>
            <div class="sec-06__block">
                <h2 class="c-title-01">
                    {{-- <span class="c-title-01-txt-01">About</span> --}}
                    <span class="c-title-01-txt-02">新築外壁工事</span>
                </h2>
                <div class="sec-06__text-area">
                    <p>
                        私たちは、10年の歴史を持つフリーランスの活用に特化した人材コンサルタント企業です。外部パートナー選びで分からないことがあればご相談ください。
                    </p>
                </div>
                <div class="sec-06__btn-area">
                    <div class="c-btn c-btn-02">
                        <span class="c-btn-txt">
                            施工例はこちら
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec-06__inner">
            <figure class="sec-06__img">
                <img src="{{asset('images/bussiness-01.png')}}" alt="">
            </figure>
            <div class="sec-06__block">
                <h2 class="c-title-01">
                    {{-- <span class="c-title-01-txt-01">About</span> --}}
                    <span class="c-title-01-txt-02">塗装</span>
                </h2>
                <div class="sec-06__text-area">
                    <p>
                        私たちは、10年の歴史を持つフリーランスの活用に特化した人材コンサルタント企業です。外部パートナー選びで分からないことがあればご相談ください。
                    </p>
                </div>
                <div class="sec-06__btn-area">
                    <div class="c-btn c-btn-02">
                        <span class="c-btn-txt">
                            施工例はこちら
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec-06__inner">
            <figure class="sec-06__img">
                <img src="{{asset('images/bussiness-01.png')}}" alt="">
            </figure>
            <div class="sec-06__block">
                <h2 class="c-title-01">
                    {{-- <span class="c-title-01-txt-01">About</span> --}}
                    <span class="c-title-01-txt-02">屋根工事</span>
                </h2>
                <div class="sec-06__text-area">
                    <p>
                        私たちは、10年の歴史を持つフリーランスの活用に特化した人材コンサルタント企業です。外部パートナー選びで分からないことがあればご相談ください。
                    </p>
                </div>
                <div class="sec-06__btn-area">
                    <div class="c-btn">
                        <span class="c-btn-txt">
                            施工例はこちら
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec-06__inner">
            <figure class="sec-06__img">
                <img src="{{asset('images/bussiness-01.png')}}" alt="">
            </figure>
            <div class="sec-06__block">
                <h2 class="c-title-01">
                    {{-- <span class="c-title-01-txt-01">About</span> --}}
                    <span class="c-title-01-txt-02">解体工事</span>
                </h2>
                <div class="sec-06__text-area">
                    <p>
                        私たちは、10年の歴史を持つフリーランスの活用に特化した人材コンサルタント企業です。外部パートナー選びで分からないことがあればご相談ください。
                    </p>
                </div>
                <div class="sec-06__btn-area">
                    <div class="c-btn c-btn-02">
                        <span class="c-btn-txt">
                            施工例はこちら
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="pankuzu__wrapper">
        <div class="pannkuzu__inner">
            <div class="pankuzu__block">
                <a href="/" class="pankuzu__btn">ホーム</a>/<div>事業内容</div>
            </div>
        </div>
    </div>
@endsection
