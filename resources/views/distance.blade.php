@extends('layouts.gift')

@section('title', 'Different Places, Same Sky 🌙')

@section('content')

<style>

/* =========================================
   LONG DISTANCE PAGE
========================================= */

.distance-page {
    width: 100%;
}


/* HERO */

.distance-hero {
    width: min(1100px, calc(100% - 40px));

    margin: 70px auto 100px;

    display: grid;

    grid-template-columns:
        0.9fr 1.1fr;

    gap: 60px;

    align-items: center;
}


/* SKY CARD */

.distance-sky {
    min-height: 430px;

    position: relative;

    overflow: hidden;

    background:
        linear-gradient(
            180deg,
            #cbb7ff 0%,
            #e8cfff 35%,
            #ffd7e8 70%,
            #fff5fa 100%
        );

    border: 3px solid var(--dark);

    border-radius: 30px;

    box-shadow:
        10px 12px 0
        rgba(60, 38, 51, 0.12);
}


.distance-moon {
    position: absolute;

    top: 60px;

    left: 50%;

    transform: translateX(-50%);

    font-size: 105px;

    animation:
        distanceMoonFloat
        4s ease-in-out infinite;
}


.distance-star {
    position: absolute;

    color: white;

    font-size: 25px;

    animation:
        distanceTwinkle
        2s ease-in-out infinite;
}


.star-a {
    top: 50px;
    left: 45px;
}


.star-b {
    top: 100px;
    right: 55px;

    animation-delay: 0.4s;
}


.star-c {
    top: 185px;
    left: 70px;

    animation-delay: 0.8s;
}


.star-d {
    top: 225px;
    right: 85px;

    animation-delay: 1.2s;
}


.star-e {
    bottom: 70px;
    left: 48%;

    animation-delay: 1.6s;
}


.distance-cloud {
    position: absolute;

    font-size: 80px;

    opacity: 0.85;
}


.cloud-one {
    bottom: 35px;
    left: -10px;

    animation:
        cloudMoveOne
        8s ease-in-out infinite;
}


.cloud-two {
    bottom: 75px;
    right: -20px;

    animation:
        cloudMoveTwo
        9s ease-in-out infinite;
}


/* HERO TEXT */

.distance-hero-content h1 {
    margin: 18px 0;

    font-family: 'Fredoka', sans-serif;

    font-size:
        clamp(
            52px,
            7vw,
            84px
        );

    line-height: 0.95;
}


.distance-hero-content h1 span {
    display: block;

    color: var(--pink-500);
}


.distance-hero-content > p {
    max-width: 650px;

    font-size: 18px;

    line-height: 1.8;
}


.distance-note {
    display: inline-block;

    margin-top: 25px;

    padding: 15px 18px;

    background: #fff0a6;

    border:
        2px dashed
        var(--dark);

    border-radius: 13px;

    font-weight: 800;

    line-height: 1.6;

    transform: rotate(-1deg);
}


/* =========================================
   COUNTDOWN
========================================= */

.countdown-section {
    width:
        min(
            900px,
            calc(100% - 40px)
        );

    margin:
        0 auto 110px;
}


.countdown-card {
    position: relative;

    padding:
        clamp(
            35px,
            6vw,
            65px
        );

    text-align: center;

    background: white;

    border:
        3px solid
        var(--dark);

    border-radius: 28px;

    box-shadow:
        10px 11px 0
        var(--pink-300);
}


.countdown-card::before {
    content: "";

    position: absolute;

    width: 110px;
    height: 28px;

    top: -14px;
    left: 50%;

    background:
        rgba(
            255,
            229,
            128,
            0.9
        );

    transform:
        translateX(-50%)
        rotate(-3deg);
}


.countdown-card h2 {
    margin: 18px 0 10px;

    font-family: 'Fredoka', sans-serif;

    font-size:
        clamp(
            36px,
            5vw,
            55px
        );
}


.countdown-card h2 span {
    display: block;

    color: var(--pink-500);
}


.countdown-date {
    margin-bottom: 35px;

    color: var(--pink-600);

    font-weight: 900;

    letter-spacing: 1px;
}


.countdown-grid {
    display: grid;

    grid-template-columns:
        repeat(
            4,
            minmax(0, 1fr)
        );

    gap: 15px;
}


.countdown-box {
    padding: 22px 10px;

    background:
        var(--pink-50);

    border:
        2px solid
        var(--dark);

    border-radius: 18px;

    box-shadow:
        4px 4px 0
        rgba(
            60,
            38,
            51,
            0.1
        );
}


.countdown-number {
    display: block;

    color: var(--pink-500);

    font-family:
        'Fredoka',
        sans-serif;

    font-size:
        clamp(
            32px,
            5vw,
            52px
        );

    line-height: 1;
}


.countdown-label {
    display: block;

    margin-top: 8px;

    font-size: 10px;

    font-weight: 900;

    letter-spacing: 2px;
}


.countdown-message {
    margin: 30px auto 0;

    max-width: 550px;

    padding: 15px;

    background: var(--pink-100);

    border:
        2px dashed
        var(--pink-400);

    border-radius: 14px;

    font-weight: 700;

    line-height: 1.6;
}


/* =========================================
   SECTION HEADINGS
========================================= */

.distance-section-heading {
    max-width: 760px;

    margin:
        0 auto 45px;

    text-align: center;
}


.distance-section-heading h2 {
    margin: 15px 0;

    font-family:
        'Fredoka',
        sans-serif;

    font-size:
        clamp(
            40px,
            6vw,
            62px
        );

    line-height: 1;
}


.distance-section-heading h2 span {
    display: block;

    color: var(--pink-500);
}


/* =========================================
   CONNECTION
========================================= */

.distance-connection-section {
    width:
        min(
            1000px,
            calc(100% - 40px)
        );

    margin:
        0 auto 110px;
}


.distance-connection-card {
    padding: 45px;

    display: grid;

    grid-template-columns:
        1fr 1.5fr 1fr;

    gap: 30px;

    align-items: center;

    background: white;

    border:
        3px solid
        var(--dark);

    border-radius: 28px;

    box-shadow:
        10px 11px 0
        rgba(
            60,
            38,
            51,
            0.1
        );
}


.distance-person {
    text-align: center;
}


.distance-avatar {
    width: 100px;
    height: 100px;

    margin:
        0 auto 15px;

    display: flex;

    align-items: center;

    justify-content: center;

    background:
        var(--pink-100);

    border:
        3px solid
        var(--dark);

    border-radius: 50%;

    font-size: 45px;
}


.distance-person h3 {
    margin: 5px 0;

    font-family:
        'Fredoka',
        sans-serif;

    font-size: 24px;
}


.distance-person p {
    margin: 5px 0;

    opacity: 0.6;

    font-size: 13px;
}


.distance-line-wrap {
    text-align: center;
}


.distance-line {
    height: 6px;

    position: relative;

    background:
        repeating-linear-gradient(
            to right,
            var(--pink-400) 0 15px,
            transparent 15px 25px
        );
}


.distance-moving-heart {
    position: absolute;

    top: 50%;

    left: 0;

    font-size: 30px;

    transform:
        translateY(-50%);

    animation:
        heartTravel
        4s ease-in-out infinite;
}


.distance-line-text {
    display: block;

    margin-top: 22px;

    color:
        var(--pink-600);

    font-size: 11px;

    font-weight: 900;

    letter-spacing: 1.5px;
}


/* =========================================
   THINGS I MISS
========================================= */

.distance-miss-section {
    width:
        min(
            1100px,
            calc(100% - 40px)
        );

    margin:
        0 auto 120px;
}


.distance-miss-grid {
    display: grid;

    grid-template-columns:
        repeat(
            2,
            minmax(0, 1fr)
        );

    gap: 22px;
}


.distance-miss-card {
    padding: 30px;

    background: white;

    border:
        3px solid
        var(--dark);

    border-radius: 22px;

    box-shadow:
        7px 8px 0
        rgba(
            60,
            38,
            51,
            0.09
        );

    transition: 0.25s ease;
}


.distance-miss-card:hover {
    transform:
        translateY(-6px)
        rotate(-1deg);

    box-shadow:
        9px 10px 0
        rgba(
            60,
            38,
            51,
            0.13
        );
}


.distance-miss-icon {
    font-size: 45px;
}


.distance-miss-card h3 {
    margin:
        17px 0 8px;

    font-family:
        'Fredoka',
        sans-serif;

    font-size: 26px;
}


.distance-miss-card p {
    margin: 0;

    line-height: 1.7;
}


/* =========================================
   SAME MOON
========================================= */

.same-moon-section {
    width:
        min(
            780px,
            calc(100% - 40px)
        );

    margin:
        0 auto 120px;
}


.same-moon-card {
    padding:
        clamp(
            40px,
            7vw,
            75px
        );

    position: relative;

    text-align: center;

    background:
        linear-gradient(
            180deg,
            #eee6ff,
            #fff6fb
        );

    border:
        3px solid
        var(--dark);

    border-radius: 30px;

    box-shadow:
        12px 12px 0
        var(--pink-300);
}


.same-moon-icon {
    margin-bottom: 15px;

    font-size: 85px;

    animation:
        sameMoonFloat
        4s ease-in-out infinite;
}


.same-moon-card h2 {
    margin: 18px 0;

    font-family:
        'Fredoka',
        sans-serif;

    font-size:
        clamp(
            38px,
            6vw,
            58px
        );

    line-height: 1;
}


.same-moon-card h2 span {
    display: block;

    color: var(--pink-500);
}


.same-moon-card p {
    max-width: 580px;

    margin: 15px auto;

    font-size: 17px;

    line-height: 1.8;
}


/* =========================================
   FUTURE PLANS
========================================= */

.distance-future-section {
    width:
        min(
            1100px,
            calc(100% - 40px)
        );

    margin:
        0 auto 120px;
}


.distance-future-grid {
    display: grid;

    grid-template-columns:
        repeat(
            3,
            minmax(0, 1fr)
        );

    gap: 20px;
}


.future-card {
    min-height: 180px;

    padding: 25px;

    display: flex;

    flex-direction: column;

    align-items: center;

    justify-content: center;

    text-align: center;

    background: white;

    border:
        3px solid
        var(--dark);

    border-radius: 20px;

    box-shadow:
        6px 7px 0
        rgba(
            60,
            38,
            51,
            0.09
        );

    transition: 0.25s ease;
}


.future-card:hover {
    background:
        var(--pink-100);

    transform:
        translateY(-6px)
        rotate(1deg);
}


.future-card span {
    font-size: 45px;
}


.future-card p {
    margin:
        15px 0 0;

    font-weight: 800;

    line-height: 1.5;
}


/* =========================================
   CHARACTERS
========================================= */

.distance-character-section {
    width:
        min(
            900px,
            calc(100% - 40px)
        );

    margin:
        0 auto 120px;

    display: grid;

    grid-template-columns:
        repeat(
            2,
            minmax(0, 1fr)
        );

    gap: 30px;
}


.distance-character-message {
    text-align: center;
}


.distance-character-image {
    max-width: 190px;

    height: 200px;

    object-fit: contain;

    animation:
        distanceCharacterFloat
        4s ease-in-out infinite;
}


.distance-character-note {
    margin-top: 15px;

    padding: 15px;

    background: #fff0a6;

    border:
        2px dashed
        var(--dark);

    border-radius: 15px;

    font-weight: 800;

    line-height: 1.5;
}


/* =========================================
   ENDING
========================================= */

.distance-ending {
    width:
        min(
            800px,
            calc(100% - 40px)
        );

    margin:
        0 auto 130px;
}


.distance-ending-card {
    padding:
        clamp(
            40px,
            7vw,
            75px
        );

    text-align: center;

    background: white;

    border:
        3px solid
        var(--dark);

    border-radius: 30px;

    box-shadow:
        12px 12px 0
        var(--pink-300);
}


.distance-ending-sparkles {
    margin-bottom: 18px;

    color:
        var(--pink-500);

    font-size: 24px;

    letter-spacing: 9px;
}


.distance-ending-card h2 {
    margin: 20px 0;

    font-family:
        'Fredoka',
        sans-serif;

    font-size:
        clamp(
            40px,
            6vw,
            60px
        );

    line-height: 1;
}


.distance-ending-card h2 span {
    display: block;

    color:
        var(--pink-500);
}


.distance-ending-card p {
    max-width: 570px;

    margin: 15px auto;

    font-size: 17px;

    line-height: 1.8;
}


.distance-ending-card .primary-button {
    margin-top: 25px;
}


/* =========================================
   ANIMATIONS
========================================= */

@keyframes distanceMoonFloat {

    0%,
    100% {
        transform:
            translateX(-50%)
            translateY(0);
    }

    50% {
        transform:
            translateX(-50%)
            translateY(-12px);
    }

}


@keyframes sameMoonFloat {

    0%,
    100% {
        transform:
            translateY(0);
    }

    50% {
        transform:
            translateY(-12px);
    }

}


@keyframes distanceTwinkle {

    0%,
    100% {
        opacity: 0.35;

        transform: scale(0.8);
    }

    50% {
        opacity: 1;

        transform: scale(1.25);
    }

}


@keyframes cloudMoveOne {

    0%,
    100% {
        transform:
            translateX(0);
    }

    50% {
        transform:
            translateX(30px);
    }

}


@keyframes cloudMoveTwo {

    0%,
    100% {
        transform:
            translateX(0);
    }

    50% {
        transform:
            translateX(-30px);
    }

}


@keyframes heartTravel {

    0% {
        left: 0%;
    }

    50% {
        left:
            calc(100% - 25px);
    }

    100% {
        left: 0%;
    }

}


@keyframes distanceCharacterFloat {

    0%,
    100% {
        transform:
            translateY(0);
    }

    50% {
        transform:
            translateY(-12px);
    }

}


/* =========================================
   RESPONSIVE
========================================= */

@media (max-width: 850px) {

    .distance-hero {
        grid-template-columns: 1fr;

        text-align: center;
    }

    .distance-hero-content > p {
        margin-left: auto;
        margin-right: auto;
    }

    .distance-connection-card {
        grid-template-columns: 1fr;
    }

    .distance-line {
        width: 80%;

        margin:
            20px auto;
    }

    .distance-miss-grid {
        grid-template-columns: 1fr;
    }

    .distance-future-grid {
        grid-template-columns:
            repeat(
                2,
                minmax(0, 1fr)
            );
    }

}


@media (max-width: 650px) {

    .countdown-grid {
        grid-template-columns:
            repeat(
                2,
                minmax(0, 1fr)
            );
    }

    .distance-future-grid {
        grid-template-columns: 1fr;
    }

    .distance-character-section {
        grid-template-columns: 1fr;
    }

    .distance-sky {
        min-height: 350px;
    }

    .distance-moon {
        font-size: 85px;
    }

}

</style>


<section class="distance-page">


    {{-- =========================================
         HERO
    ========================================== --}}

    <section class="distance-hero">


        <div class="distance-sky">

            <span class="distance-star star-a">
                ✦
            </span>

            <span class="distance-star star-b">
                ★
            </span>

            <span class="distance-star star-c">
                ✧
            </span>

            <span class="distance-star star-d">
                ✦
            </span>

            <span class="distance-star star-e">
                ★
            </span>


            <div class="distance-moon">
                🌙
            </div>


            <div class="distance-cloud cloud-one">
                ☁️
            </div>


            <div class="distance-cloud cloud-two">
                ☁️
            </div>

        </div>


        <div class="distance-hero-content">

            <span class="section-label">
                DIFFERENT PLACES — SAME HEART
            </span>


            <h1>

                Different Places,

                <span>
                    Same Sky.
                </span>

            </h1>


            <p>

                We may be far from each other right now baby,
                but somehow you still feel close to me every single day.

                Even with the distance,
                you're still such a big part of my day.

            </p>


            <div class="distance-note">

                🌙 No matter how far we are,
                we still look up at the same moon.

            </div>

        </div>

    </section>



    {{-- =========================================
         LIVE COUNTDOWN
    ========================================== --}}

    <section class="countdown-section">

        <div class="countdown-card">

            <span class="section-label">
                UNTIL I SEE YOU AGAIN
            </span>


            <h2>

                Getting closer

                <span>
                    every second. 💗
                </span>

            </h2>


            <p class="countdown-date">

                October 31, 2026

            </p>


            <div class="countdown-grid">


                <div class="countdown-box">

                    <span
                        class="countdown-number"
                        id="countdownDays"
                    >
                        00
                    </span>

                    <span class="countdown-label">
                        DAYS
                    </span>

                </div>


                <div class="countdown-box">

                    <span
                        class="countdown-number"
                        id="countdownHours"
                    >
                        00
                    </span>

                    <span class="countdown-label">
                        HOURS
                    </span>

                </div>


                <div class="countdown-box">

                    <span
                        class="countdown-number"
                        id="countdownMinutes"
                    >
                        00
                    </span>

                    <span class="countdown-label">
                        MINUTES
                    </span>

                </div>


                <div class="countdown-box">

                    <span
                        class="countdown-number"
                        id="countdownSeconds"
                    >
                        00
                    </span>

                    <span class="countdown-label">
                        SECONDS
                    </span>

                </div>

            </div>


            <div
                class="countdown-message"
                id="countdownMessage"
            >

                Just a little more waiting, langga.
                I'll see you soon. 🥹💗

            </div>

        </div>

    </section>



    {{-- =========================================
         CONNECTION
    ========================================== --}}

    <section class="distance-connection-section">


        <div class="distance-section-heading">

            <span class="section-label">
                STILL CONNECTED
            </span>


            <h2>

                Miles Between Us,

                <span>
                    But Never Apart
                </span>

            </h2>

        </div>


        <div class="distance-connection-card">


           
<div class="distance-person">

    <div
        style="
            width: 110px;
            height: 110px;
            min-width: 110px;
            min-height: 110px;
            max-width: 110px;
            max-height: 110px;
            margin: 0 auto 14px;
            overflow: hidden;
            border: 3px solid #3c2633;
            border-radius: 50%;
            background: #fff4f8;
        "
    >
        <img
            src="{{ asset('images/me.jpg') }}"
            alt="Me"
            style="
                width: 110px !important;
                height: 110px !important;
                min-width: 110px !important;
                min-height: 110px !important;
                max-width: 110px !important;
                max-height: 110px !important;
                display: block !important;
                object-fit: cover !important;
                object-position: center !important;
                margin: 0 !important;
                padding: 0 !important;
                border-radius: 50% !important;
            "
        >
    </div>

    <h3 class="distance-person-name">
        Me
    </h3>

    <p class="distance-person-subtitle">
        Thinking about you
    </p>

</div>


            <div class="distance-line-wrap">

                <div class="distance-line">

                    <span class="distance-moving-heart">
                        💗
                    </span>

                </div>


                <span class="distance-line-text">

                    NO DISTANCE CAN STOP THIS

                </span>

            </div>


<div class="distance-person">

    <div
        style="
            width: 110px;
            height: 110px;
            min-width: 110px;
            min-height: 110px;
            max-width: 110px;
            max-height: 110px;
            margin: 0 auto 14px;
            overflow: hidden;
            border: 3px solid #3c2633;
            border-radius: 50%;
            background: #fff4f8;
        "
    >
        <img
            src="{{ asset('images/her.jpg') }}"
            alt="You"
            style="
                width: 110px !important;
                height: 110px !important;
                min-width: 110px !important;
                min-height: 110px !important;
                max-width: 110px !important;
                max-height: 110px !important;
                display: block !important;
                object-fit: cover !important;
                object-position: center !important;
                margin: 0 !important;
                padding: 0 !important;
                border-radius: 50% !important;
            "
        >
    </div>

    <h3 class="distance-person-name">
        You
    </h3>

    <p class="distance-person-subtitle">
        My favorite person
    </p>

</div>

    </section>



    {{-- =========================================
         THINGS I MISS
    ========================================== --}}

    <section class="distance-miss-section">


        <div class="distance-section-heading">

            <span class="section-label">
                THINGS I MISS
            </span>


            <h2>

                Little Things I Miss

                <span>
                    About You
                </span>

            </h2>

        </div>


        <div class="distance-miss-grid">


            <div class="distance-miss-card">

                <span class="distance-miss-icon">
                    📞
                </span>

                <h3>
                    Hearing your voice
                </h3>

                <p>
                    Even a simple call with you
                    can make my whole day feel better.
                </p>

            </div>


            <div class="distance-miss-card">

                <span class="distance-miss-icon">
                    😂
                </span>

                <h3>
                    Laughing with you
                </h3>

                <p>
                    I miss those moments where we laugh
                    at something that probably isn't even that funny.
                </p>

            </div>


            <div class="distance-miss-card">

                <span class="distance-miss-icon">
                    🫂
                </span>

                <h3>
                    Being close to you
                </h3>

                <p>
                    I miss the comfort of simply knowing
                    you're right there beside me.
                </p>

            </div>


            <div class="distance-miss-card">

                <span class="distance-miss-icon">
                    🌙
                </span>

                <h3>
                    Our random conversations
                </h3>

                <p>
                    I miss the conversations that start with
                    something small and somehow turn into everything.
                </p>

            </div>

        </div>

    </section>



    {{-- =========================================
         SAME MOON
    ========================================== --}}

    <section class="same-moon-section">


        <div class="same-moon-card">


            <div class="same-moon-icon">
                🌙
            </div>


            <span class="section-label">
                A LITTLE REMINDER
            </span>


            <h2>

                Look at the moon

                <span>
                    when you miss me.
                </span>

            </h2>


            <p>

                Whenever the distance feels too much,
                remember that somewhere out there,
                I'm probably missing you too.

            </p>


            <p>

                Same sky. Same moon.
                Still us, Langga. 💗

            </p>

        </div>

    </section>



    {{-- =========================================
         FUTURE PLANS
    ========================================== --}}

    <section class="distance-future-section">


        <div class="distance-section-heading">

            <span class="section-label">
                WHEN WE'RE TOGETHER AGAIN
            </span>


            <h2>

                Things I Want To Do

                <span>
                    With You
                </span>

            </h2>

        </div>


        <div class="distance-future-grid">


            <div class="future-card">

                <span>
                    🍜
                </span>

                <p>
                    Go on a food date together
                </p>

            </div>


            <div class="future-card">

                <span>
                    🎬
                </span>

                <p>
                    Watch a movie beside each other
                </p>

            </div>


            <div class="future-card">

                <span>
                    📸
                </span>

                <p>
                    Take way too many pictures together
                </p>

            </div>


            <div class="future-card">

                <span>
                    💤
                </span>

                <p>
                    Sleeping beside each other
                </p>

            </div>


            <div class="future-card">

                <span>
                    🛍️
                </span>

                <p>
                    Walk around somewhere with no real plan
                </p>

            </div>


            <div class="future-card">

                <span>
                    🫶
                </span>

                <p>
                    Just enjoy finally being beside each other again
                </p>

            </div>

        </div>

    </section>



    {{-- =========================================
         CHARACTERS
    ========================================== --}}

    <section class="distance-character-section">


        <div class="distance-character-message">

            <img
                src="/images/characters/minion2.png"
                alt="Cute Minion"
                class="distance-character-image"
            >

            <div class="distance-character-note">

                Even your Minions are waiting for October 31 (Saturday kasi yan) 😭💛

            </div>

        </div>


        <div class="distance-character-message">

            <img
                src="/images/characters/nailong4.png"
                alt="Cute Nailoong"
                class="distance-character-image"
            >

            <div class="distance-character-note">

                Nailoong says:
                Unta mag kita na tang duwa (Bisakol sya) 🦖💗

            </div>

        </div>

    </section>



    {{-- =========================================
         ENDING
    ========================================== --}}

    <section class="distance-ending">

        <div class="distance-ending-card">

            <div class="distance-ending-sparkles">
                ✦ 💗 ✦
            </div>


            <span class="section-label">
                ONE MORE PAGE
            </span>


            <h2>

                Distance is only

                <span>
                    part of our story.
                </span>

            </h2>


            <p>

                It isn't always easy,
                but I still choose you.

            </p>


            <p>

                And I'll be waiting for you Langga,
                sa next natin na kita, see you soon my Palangga. 🥹💗

            </p>


            <a
                href="{{ route('gift.letter') }}"
                class="primary-button"
            >

                One Last Thing For You 💌

            </a>

        </div>

    </section>

</section>



{{-- =========================================
     LIVE COUNTDOWN SCRIPT
========================================== --}}

<script>

function setupDistanceCountdown() {

    const daysElement =
        document.getElementById('countdownDays');

    const hoursElement =
        document.getElementById('countdownHours');

    const minutesElement =
        document.getElementById('countdownMinutes');

    const secondsElement =
        document.getElementById('countdownSeconds');


    if (
        !daysElement ||
        !hoursElement ||
        !minutesElement ||
        !secondsElement
    ) {
        return;
    }


    /*
     * Prevent multiple countdown timers
     * if Turbo visits this page more than once.
     */
    const countdownContainer =
        daysElement.closest('.countdown-grid') ||
        daysElement.parentElement;


    if (
        countdownContainer &&
        countdownContainer.dataset.countdownInitialized === 'true'
    ) {
        return;
    }


    if (countdownContainer) {
        countdownContainer.dataset.countdownInitialized = 'true';
    }


    /*
     * October 2, 2026
     *
     * You can change the time if you know
     * exactly when you'll see each other.
     *
     * Right now this uses midnight.
     */
    const targetDate =
        new Date(
            '2026-10-31T00:00:00+08:00'
        );


    function updateCountdown() {

        const now =
            new Date();


        const difference =
            targetDate.getTime() -
            now.getTime();


        /*
         * Countdown finished
         */
        if (difference <= 0) {

            daysElement.textContent =
                '00';

            hoursElement.textContent =
                '00';

            minutesElement.textContent =
                '00';

            secondsElement.textContent =
                '00';

            return;
        }


        const totalSeconds =
            Math.floor(
                difference / 1000
            );


        const days =
            Math.floor(
                totalSeconds /
                86400
            );


        const hours =
            Math.floor(
                (
                    totalSeconds %
                    86400
                ) /
                3600
            );


        const minutes =
            Math.floor(
                (
                    totalSeconds %
                    3600
                ) /
                60
            );


        const seconds =
            totalSeconds % 60;


        daysElement.textContent =
            String(days).padStart(
                2,
                '0'
            );


        hoursElement.textContent =
            String(hours).padStart(
                2,
                '0'
            );


        minutesElement.textContent =
            String(minutes).padStart(
                2,
                '0'
            );


        secondsElement.textContent =
            String(seconds).padStart(
                2,
                '0'
            );

    }


    /*
     * Run immediately
     */
    updateCountdown();


    /*
     * Update every second
     */
    const timer =
        setInterval(
            updateCountdown,
            1000
        );


    /*
     * Clean timer before Turbo replaces page.
     */
    document.addEventListener(
        'turbo:before-cache',
        function cleanupCountdown() {

            clearInterval(timer);

            document.removeEventListener(
                'turbo:before-cache',
                cleanupCountdown
            );

        }
    );

}


/*
 * Normal browser load
 */
if (
    document.readyState ===
    'loading'
) {

    document.addEventListener(
        'DOMContentLoaded',
        setupDistanceCountdown
    );

} else {

    setupDistanceCountdown();

}


/*
 * Turbo navigation
 */
document.addEventListener(
    'turbo:load',
    setupDistanceCountdown
);

</script>

@endsection