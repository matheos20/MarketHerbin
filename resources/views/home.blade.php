@include('layouts.navbar')
<main>
    <style>

        :root {
            --clr-bg: #fed;
            --clr-bg-focus: #ddd;
            --clr-txt: #111;
            --time: 300ms;
            /* fallback */
            /* --img-height: 12ch; */
            --img-height: calc(50svh + 1rem);
            --img-width: 160ch;
        }
        * {

        }
        html {
            scroll-behavior: smooth;
        }
        body {
            background: var(--clr-bg);
            color: var(--clr-txt);
        }
        main {
            height: calc(100svh - 1rem);
            width: calc(100svw - 2rem);
            margin-inline: auto;
            display: grid;
            place-items: center;
        }
        .row {
            width: 90%;
            max-width: var(--img-width);
            display: flex;
            overflow-x: auto;
            overscroll-behavior-inline: contain;
            scroll-snap-type: x mandatory;
        }
        .content {
            transition: background var(--time) ease-in-out;
            margin-inline: .25rem;
            scroll-snap-align: start;
        }
        .content-img {
            width: auto;
            display: grid;
            place-items: center;
        }
        .content:hover,
        .content:focus-within {
            background: var(--clr-bg-focus);
        }
        .content-img img {
            height: var(--img-height);
            aspect-ratio: .625;
            border-radius: 1rem;
        }
        @media(prefers-color-scheme: dark) {
            :root {
                --clr-bg: #000;
                --clr-txt: #ccd;
                --clr-bg-focus: #222;
            }

        }


        .editorial {
            display: block;
            width: 100%;
            height: 60px;
            max-height: 60px;
            margin: 0;
            z-index:5;
            bottom:0;
            position:absolute;
            left:0px;
            float:left;
        }

        .parallax1 > use {
            animation: move-forever1 10s linear infinite;
        &:nth-child(1) {
             animation-delay: -2s;
         }
        }
        .parallax2 > use {
            animation: move-forever2 8s linear infinite;
        &:nth-child(1) {
             animation-delay: -2s;
         }
        }
        .parallax3 > use {
            animation: move-forever3 6s linear infinite;
        &:nth-child(1) {
             animation-delay: -2s;
         }
        }
        .parallax4 > use {
            animation: move-forever4 4s linear infinite;
        &:nth-child(1) {
             animation-delay: -2s;
         }
        }
        @keyframes move-forever1 {
            0% {
                transform: translate(85px, 0%);
            }
            100% {
                transform: translate(-90px, 0%);
            }
        }
        @keyframes move-forever2 {
            0% {
                transform: translate(-90px, 0%);
            }
            100% {
                transform: translate(85px, 0%);
            }
        }
        @keyframes move-forever3 {
            0% {
                transform: translate(85px, 0%);
            }
            100% {
                transform: translate(-90px, 0%);
            }
        }
        @keyframes move-forever4 {
            0% {
                transform: translate(-90px, 0%);
            }
            100% {
                transform: translate(85px, 0%);
            }
        }
        .h-divider {
            margin: auto;
            margin-top: 80px;
            width: 80%;
            position: relative;
        }

        .h-divider .shadow {
            overflow: hidden;
            height: 20px;
        }

        .h-divider .shadow:after {
            content: '';
            display: block;
            margin: -25px auto 0;
            width: 100%;
            height: 25px;
            border-radius: 125px/12px;
            box-shadow: 0 0 8px black;
        }

        .h-divider .text {
            width: 100px;
            height: 45px;
            padding: 10px;
            position: absolute;
            bottom: 100%;
            margin-bottom: -33px;
            left: 50%;
            margin-left: -60px;
            border-radius: 100%;
            box-shadow: 0 2px 4px #999;
            background: white;
        }

        .h-divider .text i {
            position: absolute;
            top: 4px;
            bottom: 4px;
            left: 4px;
            right: 4px;
            border-radius: 100%;
            border: 1px dashed #aaa;
            text-align: center;
            line-height: 50px;
            font-style: normal;
            color: #111;
            font-weight:bold;
        }
    </style>
    <script src={{asset('js/home.js')}}></script>
</main>

<svg class="editorial"
     xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink"
     viewBox="0 24 150 28 "
     preserveAspectRatio="none">
    <defs>
        <path id="gentle-wave"
              d="M-160 44c30 0
    58-18 88-18s
    58 18 88 18
    58-18 88-18
    58 18 88 18
    v44h-352z" />
    </defs>
    <g class="parallax1">
        <use xlink:href="#gentle-wave" x="50" y="3" fill="#f461c1"/>
    </g>
    <g class="parallax2">
        <use xlink:href="#gentle-wave" x="50" y="0" fill="#4579e2"/>
    </g>
    <g class="parallax3">
        <use xlink:href="#gentle-wave" x="50" y="9" fill="#3461c1"/>
    </g>
    <g class="parallax4">
        <use xlink:href="#gentle-wave" x="50" y="6" fill="#fff"/>
    </g>
</svg>
<div class="h-divider">
    <div class="shadow"></div>
    <div class="text"><i>Herbin10</i></div>
    <h1>Herbin10</h1>
</div>

<div class="h-divider"></div>

@include('layouts.footer')
