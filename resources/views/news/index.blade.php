@extends('layouts.layout')

@section('title', 'KENSHOU')

@section('content')
    <section class="mv__wrapper">
        <picture class="mv__bg">
            <source srcset="{{ asset('images/mv-pc.png') }}" media="(min-width: 768px)">
            <img src="{{ asset('images/mv-sp.png') }}" alt="">
        </picture>
        <div class="mv__inner">
            <h1 class="mv__title">
                <span class="mv__title-txt-01">好きな言葉を入れてね。</span>
                <span class="mv__title-txt-02">企業の成長を促進する。</span>
            </h1>
            <div class="mv__text">
                私たちは、外部パートナーを検討している全ての企業様のために、最適なフリーランス選びをサポートします。
            </div>
        </div>
    </section>
    <section class="sec-01__wrapper">
        <div class="sec-01__inner">
            <figure class="sec-01__img">
                <img src="{{ asset('images/sec-01.png') }}" alt="">
            </figure>
            <div class="sec-01__block">
                <h2 class="c-title-01">
                    <span class="c-title-01-txt-01">About</span>
                    <span class="c-title-01-txt-02">私たちについて</span>
                </h2>
                <div class="sec-01__text-area">
                    <p>
                        私たちは、10年の歴史を持つフリーランスの活用に特化した人材コンサルタント企業です。外部パートナー選びで分からないことがあればご相談ください。
                    </p>
                </div>
                <div class="sec-01__btn-area">
                    <a href="/aboutus" class="c-btn c-btn-02">
                        <span class="c-btn-txt">
                            私たちについて
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-02__wrapper">
        <div class="sec-02__inner">
            <h2 class="c-title-01 c-title-01-02">
                <span class="c-title-01-txt-01">Service</span>
                <span class="c-title-01-txt-02">事業内容</span>
            </h2>
            <div class="sec-02__txt-area">
                <p>私たちは、10年の歴史を持つフリーランスの活用に特化した人材コンサルタント企業です。<br class="u__pc-only">
                    外部パートナー選びで分からないことがあればご相談ください。</p>
            </div>
            <div class="sec-02__block">
                <div class="sec-02__block-item">
                    <div class="sec-02__card">
                        <div class="sec-02__card-header">
                            <picture class="sec-02__img">
                                <source srcset="" media="(min-width: 768px)">
                                <img src="{{ asset('images/sec-02-01.png') }}" alt="">
                            </picture>
                        </div>
                        <div class="sec-02__card-body">
                            <h3 class="sec-02__card-title">
                                <span class="sec-02__card-title-01">外壁工事</span>
                                <span class="sec-02__card-title-02">Exterior wall</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="sec-02__block-item">
                    <div class="sec-02__card">
                        <div class="sec-02__card-header">
                            <picture class="sec-02__img">
                                <source srcset="" media="(min-width: 768px)">
                                <img src="{{ asset('images/sec-02-02.png') }}" alt="">
                            </picture>
                        </div>
                        <div class="sec-02__card-body">
                            <h3 class="sec-02__card-title">
                                <span class="sec-02__card-title-01">外装リフォーム</span>
                                <span class="sec-02__card-title-02">exterior renovation</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="sec-02__block-item">
                    <div class="sec-02__card">
                        <div class="sec-02__card-header">
                            <picture class="sec-02__img">
                                <source srcset="" media="(min-width: 768px)">
                                <img src="{{ asset('images/sec-02-03.png') }}" alt="">
                            </picture>
                        </div>
                        <div class="sec-02__card-body">
                            <h3 class="sec-02__card-title">
                                <span class="sec-02__card-title-01">内装リフォーム</span>
                                <span class="sec-02__card-title-02">interior renovation</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sec-02__btn-area">
                <a href="/business" class="c-btn">
                    <span class="c-btn-txt">
                        事業内容
                    </span>
                </a>
            </div>
        </div>
    </section>
    <section class="sec-03__wrapper">
        <h2 class="c-title-01">
            <span class="c-title-01-txt-01">News</span>
            <span class="c-title-01-txt-02">お知らせ</span>
        </h2>
        <div class="sec-03__inner">
            <div class="sec-03__list-area">
                <div class="sec-03__list">
                    <div class="sec-03__list-txt sec-03__list-txt-01">
                        2022.1108
                    </div>
                    <div class="sec-03__list-txt sec-03__list-txt-02">
                        新着情報
                    </div>
                    <div class="sec-03__list-txt sec-03__list-txt-03">
                        Webサイトを開設しました
                    </div>
                </div>
                <div class="sec-03__list">
                    <div class="sec-03__list-txt sec-03__list-txt-01">
                        2022.1108
                    </div>
                    <div class="sec-03__list-txt sec-03__list-txt-02">
                        新着情報
                    </div>
                    <div class="sec-03__list-txt sec-03__list-txt-03">
                        Webサイトを開設しました
                    </div>
                </div>
                <div class="sec-03__list">
                    <div class="sec-03__list-txt sec-03__list-txt-01">
                        2022.1108
                    </div>
                    <div class="sec-03__list-txt sec-03__list-txt-02">
                        新着情報
                    </div>
                    <div class="sec-03__list-txt sec-03__list-txt-03">
                        Webサイトを開設しました
                    </div>
                </div>
                <div class="sec-03__list">
                    <div class="sec-03__list-txt sec-03__list-txt-01">
                        2022.1108
                    </div>
                    <div class="sec-03__list-txt sec-03__list-txt-02">
                        新着情報
                    </div>
                    <div class="sec-03__list-txt sec-03__list-txt-03">
                        Webサイトを開設しました
                    </div>
                </div>
            </div>

            <div class="sec-03__btn-area">
                <a href="/news" class="c-btn c-btn-02">
                    <span class="c-btn-txt">
                        お知らせ一覧
                    </span>
                </a>
            </div>
        </div>
    </section>
    <section class="sec-04__wrapper">
        <div class="sec-04__block">
            <a href="" class="sec-04__btn sec-04__btn-01">
                <figure class="sec-04__btn-bg">
                    <img src="{{ asset('images/sec-04-01.png') }}" alt="">
                </figure>
                <div class="c-title-01">
                    <span class="c-title-01-txt-01">Contact</span>
                    <span class="c-title-01-txt-02">お問い合わせ</span>
                </div>
            </a>
            <a href="" class="sec-04__btn sec-04__btn-02">
                <figure class="sec-04__btn-bg">
                    <img src="{{ asset('images/sec-04-02.png') }}" alt="">
                </figure>
                <div class="c-title-01">
                    <span class="c-title-01-txt-01">Company</span>
                    <span class="c-title-01-txt-02">会社情報</span>
                </div>
            </a>
        </div>
    </section>
@endsection
