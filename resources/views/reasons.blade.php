@extends('layouts.gift')

@section('title', '10 Things I Love About You 💗')

@section('content')

<style>

.love-reasons-page {
    width: min(1100px, calc(100% - 40px));
    margin: 70px auto 120px;
}

.love-reasons-header {
    max-width: 760px;
    margin: 0 auto 55px;
    text-align: center;
}

.love-sparkles {
    margin-bottom: 20px;
    font-size: 26px;
    letter-spacing: 10px;
}

.love-reasons-header h1 {
    margin: 20px 0;
    font-family: 'Fredoka', sans-serif;
    font-size: clamp(50px, 8vw, 82px);
    line-height: 0.95;
}

.love-reasons-header h1 span {
    display: block;
    color: var(--pink-500);
}

.love-reasons-header p {
    max-width: 620px;
    margin: 20px auto;
    font-size: 18px;
    line-height: 1.8;
}

.love-instruction {
    display: inline-block;
    margin-top: 15px;
    padding: 11px 18px;

    background: #fff2a8;

    border: 2px dashed var(--dark);
    border-radius: 12px;

    font-weight: 800;

    transform: rotate(-1deg);
}


/* PROGRESS */

.love-progress-wrap {
    max-width: 720px;
    margin: 0 auto 45px;
}

.love-progress-text {
    display: flex;
    justify-content: space-between;

    margin-bottom: 8px;

    font-size: 11px;
    font-weight: 900;
    letter-spacing: 2px;
}

.love-progress-track {
    height: 16px;

    overflow: hidden;

    background: white;

    border: 2px solid var(--dark);
    border-radius: 100px;
}

.love-progress-fill {
    width: 0;
    height: 100%;

    background: var(--pink-400);

    transition: width 0.4s ease;
}


/* GRID */

.love-reasons-grid {
    display: grid;

    grid-template-columns:
        repeat(2, minmax(0, 1fr));

    gap: 28px;
}


/* CARD */

.love-reason-card {
    width: 100%;
    height: 350px;

    position: relative;

    padding: 0;

    background: transparent;
    border: none;

    cursor: pointer;

    perspective: 1200px;
}


/* FRONT AND BACK */

.love-card-front,
.love-card-back {
    width: 100%;
    height: 100%;

    position: absolute;

    top: 0;
    left: 0;

    padding: 35px;

    display: flex;

    flex-direction: column;

    justify-content: center;
    align-items: center;

    border: 3px solid var(--dark);

    border-radius: 24px;

    backface-visibility: hidden;
    -webkit-backface-visibility: hidden;

    transition: transform 0.7s ease;
}


/* FRONT */

.love-card-front {
    background:
        linear-gradient(
            135deg,
            #fff8fc,
            #ffddea
        );

    box-shadow:
        8px 8px 0
        rgba(60, 38, 51, 0.12);

    transform: rotateY(0deg);
}


/* BACK */

.love-card-back {
    background: white;

    box-shadow:
        8px 8px 0
        var(--pink-300);

    transform: rotateY(180deg);
}


/* FLIP */

.love-reason-card.opened .love-card-front {
    transform: rotateY(-180deg);
}

.love-reason-card.opened .love-card-back {
    transform: rotateY(0deg);
}


/* FRONT CONTENT */

.love-number {
    position: absolute;

    top: 20px;
    right: 22px;

    color: var(--pink-600);

    font-size: 13px;
    font-weight: 900;

    letter-spacing: 2px;
}

.love-heart-icon {
    margin-bottom: 15px;

    font-size: 70px;

    animation: heartPulse 2s ease-in-out infinite;
}

.love-card-front h2 {
    margin: 5px 0;

    font-family: 'Fredoka', sans-serif;
    font-size: 30px;
}

.love-card-front p {
    margin: 5px 0;

    font-size: 13px;

    opacity: 0.6;
}


/* BACK CONTENT */

.love-small-title {
    color: var(--pink-600);

    font-size: 10px;
    font-weight: 900;

    letter-spacing: 2px;
}

.love-card-back h3 {
    margin: 15px 0;

    color: var(--pink-500);

    font-family: 'Fredoka', sans-serif;

    font-size: clamp(25px, 3vw, 34px);

    line-height: 1.2;
}

.love-card-back p {
    max-width: 430px;

    margin: 0;

    color: var(--dark);

    font-size: 15px;

    line-height: 1.8;
}

.love-reason-final .love-card-front {
    background:
        linear-gradient(
            135deg,
            #ffd5e7,
            #fff0a6
        );
}


/* FINAL MESSAGE */

.love-final-message {
    margin-top: 85px;
}

.love-final-card {
    max-width: 760px;

    margin: 0 auto;

    padding: 65px 45px;

    text-align: center;

    background: white;

    border: 3px solid var(--dark);

    border-radius: 30px;

    box-shadow:
        12px 12px 0
        var(--pink-300);
}

.love-final-card h2 {
    margin: 20px 0;

    font-family: 'Fredoka', sans-serif;

    font-size: clamp(40px, 6vw, 62px);

    line-height: 1;
}

.love-final-card h2 span {
    display: block;

    color: var(--pink-500);
}

.love-final-card p {
    max-width: 580px;

    margin: 15px auto;

    font-size: 17px;

    line-height: 1.8;
}


/* ANIMATION */

@keyframes heartPulse {

    0%,
    100% {
        transform: scale(1);
    }

    50% {
        transform: scale(1.12);
    }

}


/* MOBILE */

@media (max-width: 750px) {

    .love-reasons-grid {
        grid-template-columns: 1fr;
    }

    .love-reason-card {
        height: 330px;
    }

}

</style>
<section class="love-reasons-page">

    <div class="love-reasons-header">

        <div class="love-sparkles">
            ✦ 💗 ✦
        </div>

        <span class="section-label">
            TEN MONTHS — TEN REASONS
        </span>

        <h1>
            10 Things I Love
            <span>About You</span>
        </h1>

        <p>
            I could probably write way more than ten,
            but let's start with these, baby. 💗
        </p>

        <div class="love-instruction">
            💌 Click each heart one by one.
        </div>

    </div>


    <div class="love-progress-wrap">

        <div class="love-progress-text">

            <span>
                OPENED
            </span>

            <strong>
                <span id="openedLoveCount">0</span>
                / 10
            </strong>

        </div>

        <div class="love-progress-track">

            <div
                class="love-progress-fill"
                id="loveProgressFill"
            ></div>

        </div>

    </div>


    <div class="love-reasons-grid">


        {{-- 1 --}}
        <button
            type="button"
            class="love-reason-card"
        >

            <div class="love-card-front">

                <span class="love-number">
                    01
                </span>

                <div class="love-heart-icon">
                    💗
                </div>

                <h2>
                    Open Me
                </h2>

                <p>
                    tap to reveal
                </p>

            </div>


            <div class="love-card-back">

                <span class="love-small-title">
                    REASON #1
                </span>

                <h3>
                    Your smile
                </h3>

                <p>
                    I love your smile because it always makes me feel
                    a little happier. Even when I'm having a bad day,
                    seeing you smile somehow makes everything feel lighter.
                </p>

            </div>

        </button>


        {{-- 2 --}}
        <button
            type="button"
            class="love-reason-card"
        >

            <div class="love-card-front">

                <span class="love-number">
                    02
                </span>

                <div class="love-heart-icon">
                    💕
                </div>

                <h2>
                    Open Me
                </h2>

                <p>
                    tap to reveal
                </p>

            </div>


            <div class="love-card-back">

                <span class="love-small-title">
                    REASON #2
                </span>

                <h3>
                    The way you care about me
                </h3>

                <p>
                    I love the way you care about me.
                    Even the little things you do make me feel remembered,
                    appreciated, and loved.
                </p>

            </div>

        </button>


        {{-- 3 --}}
        <button
            type="button"
            class="love-reason-card"
        >

            <div class="love-card-front">

                <span class="love-number">
                    03
                </span>

                <div class="love-heart-icon">
                    🥹
                </div>

                <h2>
                    Open Me
                </h2>

                <p>
                    tap to reveal
                </p>

            </div>


            <div class="love-card-back">

                <span class="love-small-title">
                    REASON #3
                </span>

                <h3>
                    How comfortable I feel with you
                </h3>

                <p>
                    I love how comfortable I can be with you.
                    I don't feel like I always have to pretend or act
                    differently around you. I can just be myself.
                </p>

            </div>

        </button>


        {{-- 4 --}}
        <button
            type="button"
            class="love-reason-card"
        >

            <div class="love-card-front">

                <span class="love-number">
                    04
                </span>

                <div class="love-heart-icon">
                    😂
                </div>

                <h2>
                    Open Me
                </h2>

                <p>
                    tap to reveal
                </p>

            </div>


            <div class="love-card-back">

                <span class="love-small-title">
                    REASON #4
                </span>

                <h3>
                    Your sense of humor
                </h3>

                <p>
                    I love how you make me laugh.
                    We can turn the most random conversation into something funny,
                    and those little moments always become some of my favorites.
                </p>

            </div>

        </button>


        {{-- 5 --}}
        <button
            type="button"
            class="love-reason-card"
        >

            <div class="love-card-front">

                <span class="love-number">
                    05
                </span>

                <div class="love-heart-icon">
                    🌙
                </div>

                <h2>
                    Open Me
                </h2>

                <p>
                    tap to reveal
                </p>

            </div>


            <div class="love-card-back">

                <span class="love-small-title">
                    REASON #5
                </span>

                <h3>
                    Our random conversations
                </h3>

                <p>
                    I love our random conversations.
                    We can start talking about one thing and somehow end up
                    somewhere completely different, and I never get tired of it.
                </p>

            </div>

        </button>


        {{-- 6 --}}
        <button
            type="button"
            class="love-reason-card"
        >

            <div class="love-card-front">

                <span class="love-number">
                    06
                </span>

                <div class="love-heart-icon">
                    🫶
                </div>

                <h2>
                    Open Me
                </h2>

                <p>
                    tap to reveal
                </p>

            </div>


            <div class="love-card-back">

                <span class="love-small-title">
                    REASON #6
                </span>

                <h3>
                    Your patience with me
                </h3>

                <p>
                    I appreciate how patient you are with me,
                    especially when I'm stressed, confused, annoying,
                    or simply not at my best.
                </p>

            </div>

        </button>


        {{-- 7 --}}
        <button
            type="button"
            class="love-reason-card"
        >

            <div class="love-card-front">

                <span class="love-number">
                    07
                </span>

                <div class="love-heart-icon">
                    ✨
                </div>

                <h2>
                    Open Me
                </h2>

                <p>
                    tap to reveal
                </p>

            </div>


            <div class="love-card-back">

                <span class="love-small-title">
                    REASON #7
                </span>

                <h3>
                    Your little habits
                </h3>

                <p>
                    I love your little habits,
                    especially the ones you probably don't even notice.
                    They're small, but somehow they make you even more lovable to me.
                </p>

            </div>

        </button>


        {{-- 8 --}}
        <button
            type="button"
            class="love-reason-card"
        >

            <div class="love-card-front">

                <span class="love-number">
                    08
                </span>

                <div class="love-heart-icon">
                    🌎
                </div>

                <h2>
                    Open Me
                </h2>

                <p>
                    tap to reveal
                </p>

            </div>


            <div class="love-card-back">

                <span class="love-small-title">
                    REASON #8
                </span>

                <h3>
                    How you still choose us despite the distance
                </h3>

                <p>
                    I love that even while we're far from each other,
                    you still choose us. You still make an effort,
                    stay connected with me, and make this relationship feel real.
                </p>

            </div>

        </button>


        {{-- 9 --}}
        <button
            type="button"
            class="love-reason-card"
        >

            <div class="love-card-front">

                <span class="love-number">
                    09
                </span>

                <div class="love-heart-icon">
                    🏡
                </div>

                <h2>
                    Open Me
                </h2>

                <p>
                    tap to reveal
                </p>

            </div>


            <div class="love-card-back">

                <span class="love-small-title">
                    REASON #9
                </span>

                <h3>
                    How you make me feel safe
                </h3>

                <p>
                    I love how safe and comforted I feel with you.
                    Even when we're far apart, talking to you can make
                    everything feel a little less heavy.
                </p>

            </div>

        </button>


        {{-- 10 --}}
        <button
            type="button"
            class="love-reason-card love-reason-final"
        >

            <div class="love-card-front">

                <span class="love-number">
                    10
                </span>

                <div class="love-heart-icon">
                    💖
                </div>

                <h2>
                    Last One
                </h2>

                <p>
                    save this for last
                </p>

            </div>


            <div class="love-card-back">

                <span class="love-small-title">
                    REASON #10
                </span>

                <h3>
                    Everything that makes you, you
                </h3>

                <p>
                    I love everything that makes you who you are.
                    Your personality, your little habits, your flaws,
                    your softness, your craziness, and all the small things
                    that make you uniquely you.
                </p>

            </div>

        </button>

    </div>


    <section
        class="love-final-message hidden"
        id="loveFinalMessage"
    >

        <div class="love-final-card">

            <div class="love-final-sparkles">
                ✦ 💗 ✦
            </div>

            <span class="section-label">
                ALL TEN OPENED
            </span>

            <h2>
                And I could still
                <span>keep going.</span>
            </h2>

            <p>
                Ten reasons are nowhere near enough to explain
                everything I love about you.
            </p>

            <p>
                Happy 10 months, baby. 💗
            </p>

            <a
                href="{{ route('gift.distance') }}"
                class="primary-button"
            >
                Continue Our Story →
            </a>

        </div>

    </section>

</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const cards = document.querySelectorAll('.love-reason-card');

    const counter = document.getElementById('openedLoveCount');

    const progress = document.getElementById('loveProgressFill');

    const finalMessage = document.getElementById('loveFinalMessage');

    if (!cards.length) {
        return;
    }

    let openedCount = 0;

    cards.forEach(function (card) {

        card.addEventListener('click', function () {

            if (card.classList.contains('opened')) {
                return;
            }

            card.classList.add('opened');

            openedCount++;

            if (counter) {
                counter.textContent = openedCount;
            }

            if (progress) {

                const percentage =
                    (openedCount / cards.length) * 100;

                progress.style.width =
                    percentage + '%';
            }

            if (
                openedCount === cards.length &&
                finalMessage
            ) {

                setTimeout(function () {

                    finalMessage.classList.remove('hidden');

                    finalMessage.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });

                }, 700);
            }

        });

    });

});
</script>
@endsection