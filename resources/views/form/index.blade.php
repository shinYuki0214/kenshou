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

    <section class="frm__wrapper">
        <div class="frm__inner">
            <h2 class="frm__title-02 c-title-01 c-title-01-02">
                <span class="frm__title-txt">お申し込みフォーム</span>
            </h2>
            <div class="frm__text-area">
                <p>
                    下記のフォームからお問い合わせ内容をご記入ください。<br class="frm__sp-only">2日以内に担当者からメールにてご連絡いたします。
                </p>
            </div>
            {{-- ▼▼ エラーメッセージ　--}}
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="frm__error">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- ▲▲ エラーメッセージ　--}}
            {{-- ▼▼ フォーム --}}
            <form action="{{ route('form') }}" method="POST">
                @csrf
                {{-- ▼ 会社名 --}}
                <div class="frm__block-01">
                    <label class="frm__title" for="company">会社名</label>
                    <input id="company" type="text" name="company" value="{{ old('company') }}" placeholder="例）〇〇株式会社">
                    @if ($errors->has('company'))
                        <p class="frm__error">{{ $errors->first('company') }}</p>
                    @endif
                </div>
                {{-- ▼ お名前 --}}
                <div class="frm__block-01">
                    <label class="frm__title frm__required" for="name">お名前</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="例）鈴木一郎">
                    @if ($errors->has('name'))
                        <p class="frm__error">{{ $errors->first('name') }}</p>
                    @endif
                </div>
                {{-- ▼ フリガナ --}}
                <div class="frm__block-01">
                    <label class="frm__title" for=name_kana>お名前（フリガナ）</label>
                    <input id="name_kana" type="text" name="name_kana" value="{{ old('name_kana') }}" placeholder="例）スズキイチロウ">
                    @error('name_kana')
                        <p class="frm__error">{{ $message }}</p>
                    @enderror
                </div>
                {{-- ▼ 電話番号 --}}
                <div class="frm__block-01">
                    <label class="frm__title frm__required" for="phone">電話番号</label>
                    <input id="phone" type="text" name="phone" value="{{ old('phone') }}" placeholder="例）000-0000-0000">
                    @if ($errors->has('phone'))
                    <p class="frm__error">{{ $errors->first('phone') }}</p>
                @endif
                </div>
                {{-- ▼ メールアドレス --}}
                <div class="frm__block-01">
                    <label class="frm__title frm__required" for="email">メールアドレス</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="例）info@example.com">
                    @if ($errors->has('email'))
                        <p class="frm__error">{{ $errors->first('email') }}</p>
                    @endif
                </div>
                {{-- ▼ お問い合わせ内容 --}}
                <div class="frm__block-01">
                    <label class="frm__title frm__required" for="category">ご用件</label>
                    <select name="category" id="">
                        <option value="">選択してください</option>
                        <option value="サービスに関するお問い合わせ" @if(old('category') === 'サービスに関するお問い合わせ') selected @endif>サービスに関するお問い合わせ</option>
                        <option value="料金に関するお問い合わせ" @if(old('category') === '料金に関するお問い合わせ') selected @endif>料金に関するお問い合わせ</option>
                        <option value="その他" @if(old('category') === 'その他') selected @endif>その他</option>
                    </select>
                    @if ($errors->has('category'))
                        <p class="frm__error">{{ $errors->first('category') }}</p>
                    @endif
                </div>
                {{-- ▼ お問い合わせ内容 --}}
                <div class="frm__block-01">
                    <label class="frm__title" for="body">お問い合わせ内容</label>
                    <textarea id="body" type="text" name="body" placeholder="ご自由にご記入ください" class="frm__textarea">{{ old('body') }}</textarea>
                    @if ($errors->has('body'))
                        <p class="frm__error">{{ $errors->first('body') }}</p>
                    @endif
                </div>

                <div class="frm__block-02">
                        <input type="checkbox" name="confirm" value="1" class="frm__checkbox" @if(old('confirm') == "1") checked @endif>
                        <span><a href="#" class="frm__point">個人情報保護方針</a>に同意します</span>
                        @if ($errors->has('confirm'))
                        <p class="frm__error">{{ $errors->first('confirm') }}</p>
                    @endif
                </div>
                {{-- ▼ 送信ボタン --}}
                <div class="frm__block-01">
                    <button type="submit" class="c-btn">
                        <span class="c-btn-txt">
                            送信
                        </span>
                    </button>
                </div>
            </form>
            {{-- ▲▲ フォーム --}}
        </div>

    </section>


    <div class="pankuzu__wrapper">
        <div class="pannkuzu__inner">
            <div class="pankuzu__block">
                <a href="/" class="pankuzu__btn">ホーム</a>/<div>会社情報</div>
            </div>
        </div>
    </div>
@endsection
