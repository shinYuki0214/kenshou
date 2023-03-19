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
                <span class="mv-02__title-01">About</span>
                <span class="mv-02__title-02">私たちについて</span>
            </h1>
        </div>
    </div>
    <section class="sec-05__wrapper">
        <div class="sec-05__inner">
            <figure class="sec-05__img">
                <img src="{{asset('images/about-01.png')}}" alt="">
            </figure>
            <div class="sec-05__block">
                <h2 class="c-title-01">
                    {{-- <span class="c-title-01-txt-01">About</span> --}}
                    <span class="c-title-01-txt-02">価値提供</span>
                </h2>
                <div class="sec-05__text-area">
                    <p>
                        私たちは、10年の歴史を持つフリーランスの活用に特化した人材コンサルタント企業です。外部パートナー選びで分からないことがあればご相談ください。私たちは、10年の歴史を持つフリーランスの活用に特化した人材コンサルタント企業です。外部パートナー選びで分からないことがあればご相談ください。
                    </p>
                </div>
            </div>
        </div>
        <div class="sec-05__inner">
            <figure class="sec-05__img">
                <img src="{{asset('images/about-02.png')}}" alt="">
            </figure>
            <div class="sec-05__block">
                <h2 class="c-title-01">
                    {{-- <span class="c-title-01-txt-01">About</span> --}}
                    <span class="c-title-01-txt-02">充実の人材</span>
                </h2>
                <div class="sec-05__text-area">
                    <p>
                        私たちは、10年の歴史を持つフリーランスの活用に特化した人材コンサルタント企業です。外部パートナー選びで分からないことがあればご相談ください。私たちは、10年の歴史を持つフリーランスの活用に特化した人材コンサルタント企業です。外部パートナー選びで分からないことがあればご相談ください。
                    </p>
                </div>
            </div>
        </div>
        <div class="sec-05__inner">
            <figure class="sec-05__img">
                <img src="{{asset('images/about-03.png')}}" alt="">
            </figure>
            <div class="sec-05__block">
                <h2 class="c-title-01">
                    {{-- <span class="c-title-01-txt-01">About</span> --}}
                    <span class="c-title-01-txt-02">ケン・ショウの想い</span>
                </h2>
                <div class="sec-05__text-area">
                    <p>
                        私たちは、10年の歴史を持つフリーランスの活用に特化した人材コンサルタント企業です。外部パートナー選びで分からないことがあればご相談ください。私たちは、10年の歴史を持つフリーランスの活用に特化した人材コンサルタント企業です。外部パートナー選びで分からないことがあればご相談ください。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="pankuzu__wrapper">
        <div class="pannkuzu__inner">
            <div class="pankuzu__block">
                <a href="/" class="pankuzu__btn">ホーム</a>/<div>私たちについて</div>
            </div>
        </div>
    </div>
@endsection
