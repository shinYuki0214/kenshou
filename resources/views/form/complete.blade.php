@extends('layouts.layout')

@section('title', 'KENSHOU')

@section('content')
    <div class="mv-02__wrapper">
        <picture class="mv-02__bg">
            <source srcset="{{ asset('images/contact-bg-pc.png') }}" media="(min-width: 768px)">
            <img src="{{ asset('images/contact-bg.png') }}" alt="">
        </picture>
        <div class="mv-02__inner">
            <h1 class="mv-02__title">
                <span class="mv-02__title-01">Contact</span>
                <span class="mv-02__title-02">お問い合わせ</span>
            </h1>
        </div>
    </div> 
<div class="thanks__wrapper">
    <div class="thanks__inner">
        お問い合わせありがとうございます。<br>
        担当よりご連絡いたします。
        <a href="/" class="thanks__btn">トップへ戻る</a>
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
