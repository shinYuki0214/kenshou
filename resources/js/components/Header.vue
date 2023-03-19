

<template>
    <header class="hdr__wrapper">
        <div class="hdr__pc-inner">
            <div class="hdr__inner">
                <a href="/" class="hdr__logo">
                    <svg viewBox="0 0 200 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M148.604 25.3472V0.911865H172.626V25.3472H148.604Z" fill="#CD883B" />
                        <path d="M166.294 7.11182H155.121V19.1471H166.294V7.11182Z" fill="white" />
                        <path d="M175.792 24.9824V0.364746H182.123V18.053H193.669V0.364746H199.814V24.9824H175.792Z"
                            fill="#CD883B" />
                        <path
                            d="M56.6109 26.0765V0.729411H62.9424V5.28823L81.0057 0V26.0765H73.9293V8.93529L62.9424 12.5823V26.0765H56.6109Z"
                            fill="#CD883B" />
                        <path d="M29.4227 26.0765V0.547119H53.4451V16.5941H35.9404V19.5118H53.4451V26.0765H29.4227Z"
                            fill="#CD883B" />
                        <path d="M48.6034 6.01758H36.6853V11.1235H48.6034V6.01758Z" fill="white" />
                        <path
                            d="M0 31V0.729472H6.33148V14.5883L20.6704 0.547119L25.8846 5.653L16.7598 14.5883L25.8846 23.5236L21.9739 27.353L12.8492 18.4177L0 31Z"
                            fill="#CD883B" />
                        <path
                            d="M93.6685 15.8648V0.729492H117.877V7.11185H100.372V10.5766H117.877V25.5295H93.6685V19.6942H111.359V15.8648H93.6685Z"
                            fill="#CD883B" />
                        <path
                            d="M120.671 25.3471V0.729492H127.561V9.11771H137.989V0.729492H145.252V25.3471H137.989V16.5942H127.561V25.3471H120.671Z"
                            fill="#CD883B" />
                        <path
                            d="M87.151 26.0764C89.1051 26.0764 90.6892 24.5252 90.6892 22.6117C90.6892 20.6982 89.1051 19.147 87.151 19.147C85.1969 19.147 83.6128 20.6982 83.6128 22.6117C83.6128 24.5252 85.1969 26.0764 87.151 26.0764Z"
                            fill="#CD883B" />
                    </svg>
                </a>
                <div class="hdr__nav-btn js__nav-btn" @click="showElement">
                    <span class="hdr__nav-btn-parts hdr__nav-btn-parts-01"></span>
                    <span class="hdr__nav-btn-parts hdr__nav-btn-parts-02"></span>
                    <span class="hdr__nav-btn-parts hdr__nav-btn-parts-03"></span>
                </div>
            </div>
            <nav class="nav__wrapper js__nav-area" v-bind:class="{'js__nav-active' : message }">
                <ul class="nav__list-area">
                    <li class="nav__list">
                        <a href="/aboutus" class="nav__list-btn"><span class="nav__list-btn-txt">私たちについて</span></a>
                    </li>
                    <li class="nav__list">
                        <a href="/business" class="nav__list-btn"><span class="nav__list-btn-txt">事業内容</span></a>
                    </li>
                    <li class="nav__list">
                        <a href="/news" class="nav__list-btn"><span class="nav__list-btn-txt">お知らせ</span></a>
                    </li>
                    <li class="nav__list">
                        <a href="/company" class="nav__list-btn"><span class="nav__list-btn-txt">会社情報</span></a>
                    </li>
                    <li class="nav__list">
                        <a href="/company#mapArea" class="nav__list-btn"><span class="nav__list-btn-txt">アクセス</span></a>
                    </li>
                    <li class="nav__list u__pc-none">
                        <a href="" class="nav__list-btn"><span class="nav__list-btn-txt">電話番号
                                080-1016-4693</span></a>
                    </li>
                    <li class="nav__list">
                        <a href="" class="c-btn">
                            <span class="c-btn-txt">
                                お問い合わせ
                            </span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
</template>
<script>
import { ref } from 'vue';
export default {
  setup() {
    const message = ref(false);
    function showElement() {
      message.value = !message.value;
    }
    return { message, showElement };
  },
};
</script>