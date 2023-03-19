@extends('layouts.layout')

@section('title', 'KENSHOU')

@section('content')
    <div class="mv-02__wrapper">
        <picture class="mv-02__bg">
            <source srcset="{{ asset('images/company-bg.png') }}" media="(min-width: 768px)">
            <img src="{{ asset('images/company-bg-sp.png') }}" alt="">
        </picture>
        <div class="mv-02__inner">
            <h1 class="mv-02__title">
                <span class="mv-02__title-01">Company</span>
                <span class="mv-02__title-02">会社情報</span>
            </h1>
        </div>
    </div> 
    <section class="sec-08__wrapper">
        <div class="sec-08__inner">
                <div class="sec-08__list-area">
                    <div class="sec-08__list">
                        <div class="sec-08__list-01">会社名</div>
                        <div class="sec-08__list-02">株式会社KENSHO</div>
                    </div>
                    <div class="sec-08__list">
                        <div class="sec-08__list-01">設立</div>
                        <div class="sec-08__list-02">2010年1月1日</div>
                    </div>
                    <div class="sec-08__list">
                        <div class="sec-08__list-01">所在地</div>
                        <div class="sec-08__list-02">〒284-0012　千葉県四街道市物井1595-2</div>
                    </div>
                    <div class="sec-08__list">
                        <div class="sec-08__list-01">資本金</div>
                        <div class="sec-08__list-02">100万円</div>
                    </div>
                    <div class="sec-08__list">
                        <div class="sec-08__list-01">TEL/FAX</div>
                        <div class="sec-08__list-02">043-376-2497</div>
                    </div>
                    <div class="sec-08__list">
                        <div class="sec-08__list-01">営業時間</div>
                        <div class="sec-08__list-02">AM9:00~PM7:00</div>
                    </div>
                    <div class="sec-08__list">
                        <div class="sec-08__list-01">定休日</div>
                        <div class="sec-08__list-02">不定休</div>
                    </div>
                    <div class="sec-08__list">
                        <div class="sec-08__list-01">業務内容</div>
                        <div class="sec-08__list-02">水回りリフォーム、内外装リフォーム、新築外壁工事、塗装、屋根工事、解体工事</div>
                    </div>
                    <div class="sec-08__list">
                        <div class="sec-08__list-01">エリア</div>
                        <div class="sec-08__list-02">千葉県郊外</div>
                    </div>
                </div>
        </div>
    </section>
    <div class="sec-09__wrapper" id="mapArea">
        <div class="sec-09__inner">
            <h2 class="c-title-01">
                {{-- <span class="c-title-01-txt-01">News</span> --}}
                <span class="c-title-01-txt-02">マップ情報</span>
            </h2>
            <div class="sec-09__map-area">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27665706.36708695!2d119.0362187600471!3d32.1729215592436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34674e0fd77f192f%3A0xf54275d47c665244!2z5pel5pys!5e0!3m2!1sja!2sjp!4v1679207751293!5m2!1sja!2sjp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>


    <div class="pankuzu__wrapper">
        <div class="pannkuzu__inner">
            <div class="pankuzu__block">
                <a href="/" class="pankuzu__btn">ホーム</a>/<div>会社情報</div>
            </div>
        </div>
    </div>
@endsection
