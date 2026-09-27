@extends('layouts.gift')

@section('title', 'A Letter For You 💌')

@section('content')

<style>

/* =========================================
   LOVE LETTER PAGE
========================================= */

.letter-page {
    width: min(950px, calc(100% - 40px));
    margin: 70px auto 130px;
}


/* HEADER */

.letter-page-header {
    max-width: 760px;
    margin: 0 auto 45px;
    text-align: center;
}

.letter-page-header h1 {
    margin: 18px 0;

    font-family: 'Fredoka', sans-serif;

    font-size: clamp(50px, 8vw, 82px);

    line-height: 0.95;
}

.letter-page-header h1 span {
    display: block;

    color: var(--pink-500);
}

.letter-page-header p {
    max-width: 600px;

    margin: 20px auto;

    font-size: 18px;

    line-height: 1.8;
}


/* =========================================
   ENVELOPE AREA
========================================= */

.envelope-section {
    width: 100%;

    min-height: 620px;

    display: flex;

    flex-direction: column;

    justify-content: center;

    align-items: center;

    position: relative;

    padding: 60px 20px 100px;
}


/* WRAPPER */

.envelope-wrapper {
    width: min(520px, 92vw);

    height: 360px;

    position: relative;

    cursor: pointer;

    perspective: 1400px;

    transition:
        opacity 0.6s ease,
        transform 0.6s ease;
}


/* ENVELOPE BODY */

.envelope-body {
    width: 100%;
    height: 100%;

    position: absolute;

    bottom: 0;

    background:
        linear-gradient(
            145deg,
            #ffc1db,
            #ff8fbd
        );

    border:
        3px solid var(--dark);
    
    border-top:
    3px solid
    var(--dark);

    border-radius:
        18px;

    box-shadow:
        12px 14px 0
        rgba(60, 38, 51, 0.14);

    overflow: hidden;
}


/* BOTTOM FOLDS */

.envelope-body::before,
.envelope-body::after {
    content: "";

    position: absolute;

    bottom: 0;

    width: 0;
    height: 0;

    border-style: solid;
}


.envelope-body::before {
    left: 0;

    border-width:
        180px
        0
        0
        260px;

    border-color:
        transparent
        transparent
        transparent
        rgba(255, 255, 255, 0.22);
}


.envelope-body::after {
    right: 0;

    border-width:
        180px
        260px
        0
        0;

    border-color:
        transparent
        rgba(255, 255, 255, 0.15)
        transparent
        transparent;
}


/* FLAP */

.envelope-flap {
    width: 100%;
    height: 190px;

    position: absolute;

    top: 0;
    left: 0;

    z-index: 5;

    transform-origin:
        top center;

    transition:
        transform
        0.8s ease;

    transform-style:
        preserve-3d;
}


.envelope-flap::before {
    content: "";

    position: absolute;

    width: 0;
    height: 0;

    border-left:
        260px solid
        transparent;

    border-right:
        260px solid
        transparent;

    border-top:
        190px solid
        #ffadd0;

    filter:
        drop-shadow(0 -3px 0 var(--dark))
        drop-shadow(-3px 0 0 var(--dark))
        drop-shadow(3px 0 0 var(--dark));
}


/* HEART SEAL */

.envelope-seal {
    width: 70px;
    height: 70px;

    position: absolute;

    top: 135px;
    left: 50%;

    z-index: 8;

    display: flex;

    align-items: center;

    justify-content: center;

    transform:
        translateX(-50%);

    background:
        var(--pink-500);

    border:
        3px solid
        var(--dark);

    border-radius:
        50%;

    box-shadow:
        4px 4px 0
        var(--dark);

    font-size: 32px;

    transition:
        opacity 0.35s ease,
        transform 0.35s ease;
}


/* OPEN TEXT */

.envelope-hint {
    position: absolute;

    left: 50%;
    bottom: -65px;

    transform:
        translateX(-50%);

    white-space: nowrap;

    font-weight: 900;

    color: var(--pink-600);

    animation:
        letterBounce
        2s ease-in-out infinite;
}


/* =========================================
   LETTER PAPER
========================================= */

.letter-sheet {
    width: min(820px, calc(100vw - 50px));

    max-height: 78vh;

    padding:
        clamp(35px, 6vw, 70px);

    position: fixed;

    top: 50%;

    left: 50%;

    z-index: 5000;

    overflow-y: auto;

    overflow-x: hidden;

    background:
        linear-gradient(
            rgba(255, 253, 248, 0.96),
            rgba(255, 253, 248, 0.96)
        ),
        repeating-linear-gradient(
            to bottom,
            transparent 0,
            transparent 38px,
            #f5d9e5 39px
        );

    border:
        3px solid
        var(--dark);

    border-radius: 22px;

    box-shadow:
        18px 20px 0
        rgba(60, 38, 51, 0.14);

    transform:
        translate(-50%, -45%)
        scale(0.92);

    opacity: 0;

    visibility: hidden;

    pointer-events: none;

    transition:
        opacity 0.7s ease,
        transform 0.7s ease,
        visibility 0.7s ease;

    scrollbar-width: thin;

    scrollbar-color:
        var(--pink-400)
        var(--pink-100);
}


/* SCROLLBAR */

.letter-sheet::-webkit-scrollbar {
    width: 10px;
}

.letter-sheet::-webkit-scrollbar-track {
    background: var(--pink-100);

    border-radius: 20px;
}

.letter-sheet::-webkit-scrollbar-thumb {
    background: var(--pink-400);

    border-radius: 20px;

    border:
        2px solid
        var(--pink-100);
}


/* OPEN STATE */

.envelope-wrapper.opened
.envelope-flap {
    transform:
        rotateX(180deg);
}


.envelope-wrapper.opened
.envelope-seal {
    opacity: 0;

    transform:
        translateX(-50%)
        scale(0.6);
}


.envelope-wrapper.opened
.letter-sheet {
    opacity: 1;

    visibility: visible;

    pointer-events: auto;

    transform:
        translate(-50%, -50%)
        scale(1);
}


.envelope-wrapper.opened
.envelope-hint {
    display: none;
}
/* =========================================
   LETTER BACKDROP
========================================= */

.letter-backdrop {
    position: fixed;

    inset: 0;

    z-index: 4900;

    background:
        rgba(60, 38, 51, 0.42);

    backdrop-filter:
        blur(5px);

    opacity: 0;

    visibility: hidden;

    pointer-events: none;

    transition:
        opacity 0.5s ease,
        visibility 0.5s ease;
}


.envelope-wrapper.opened
.letter-backdrop {
    opacity: 1;

    visibility: visible;

    pointer-events: auto;
}


/* =========================================
   LETTER CLOSE BUTTON
========================================= */

.letter-close-button {
    width: 45px;
    height: 45px;

    position: sticky;

    top: 0;

    margin-left: auto;

    display: flex;

    align-items: center;
    justify-content: center;

    z-index: 20;

    background:
        var(--pink-100);

    color:
        var(--dark);

    border:
        2px solid
        var(--dark);

    border-radius: 50%;

    box-shadow:
        3px 3px 0
        var(--dark);

    cursor: pointer;

    font-size: 26px;

    font-weight: 900;

    transition:
        transform 0.2s ease,
        background 0.2s ease;
}


.letter-close-button:hover {
    background:
        var(--pink-300);

    transform:
        rotate(8deg)
        scale(1.05);
}

/* =========================================
   LETTER CONTENT
========================================= */

.letter-sheet-inner {
    opacity: 0;

    transform:
        translateY(15px);

    transition:
        opacity
        0.8s ease
        0.7s,
        transform
        0.8s ease
        0.7s;
}


.envelope-wrapper.opened
.letter-sheet-inner {
    opacity: 1;

    transform:
        translateY(0);
}


.letter-date {
    margin-bottom: 15px !important;

    text-align: right;

    color:
        rgba(60, 38, 51, 0.55) !important;

    font-size:
        13px !important;

    font-weight: 700;
}


.letter-sheet h2 {
    margin:
        5px 0 30px;

    font-family:
        'Fredoka',
        sans-serif;

    font-size:
        clamp(32px, 5vw, 46px);

    color:
        var(--pink-500);
}


.letter-sheet p {
    max-width: 680px;

    margin:
        0 auto 25px;

    color:
        var(--dark);

    font-size:
        17px;

    line-height:
        2;

    letter-spacing:
        0.1px;
}


.letter-signature {
    margin-top:
        45px !important;

    color:
        var(--pink-500) !important;

    font-family:
        'Fredoka',
        sans-serif;

    font-size:
        21px !important;

    line-height:
        1.6 !important;
}


/* =========================================
   FINAL MESSAGE
========================================= */

.letter-final {
    margin-top: 230px;

    opacity: 0;

    transform:
        translateY(30px);

    transition:
        opacity
        0.8s ease,
        transform
        0.8s ease;
}


.letter-final.show {
    opacity: 1;

    transform:
        translateY(0);
}


.letter-final-card {
    max-width: 760px;

    margin: 0 auto;

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

    border-radius:
        30px;

    box-shadow:
        12px 12px 0
        var(--pink-300);
}


.letter-final-card h2 {
    margin:
        18px 0;

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


.letter-final-card h2 span {
    display: block;

    color:
        var(--pink-500);
}


.letter-final-card p {
    max-width: 580px;

    margin:
        15px auto;

    font-size: 17px;

    line-height: 1.8;
}


.final-buttons {
    margin-top: 28px;

    display: flex;

    flex-wrap: wrap;

    justify-content: center;

    gap: 15px;
}


/* =========================================
   ANIMATIONS
========================================= */

@keyframes letterBounce {

    0%,
    100% {
        transform:
            translateX(-50%)
            translateY(0);
    }

    50% {
        transform:
            translateX(-50%)
            translateY(-7px);
    }

}


/* =========================================
   MOBILE
========================================= */

/* =========================================
   LETTER PAGE - MOBILE FIX
========================================= */

@media (max-width: 650px) {

    .letter-page {
        width: calc(100% - 24px);

        margin:
            40px auto
            80px;
    }


    .letter-page-header {
        width: 100%;

        margin:
            0 auto
            35px;

        padding:
            0 8px;

        box-sizing: border-box;
    }


    .letter-page-header h1 {
        font-size:
            clamp(
                42px,
                13vw,
                58px
            );

        line-height: 1;
    }


    .letter-page-header p {
        font-size: 15px;

        line-height: 1.7;
    }


    /* ==============================
       ENVELOPE AREA
    ============================== */

    .envelope-section {
        width: 100%;

        min-height: 560px;

        padding:
            45px 0
            90px;

        box-sizing: border-box;

        display: flex;

        align-items: center;
        justify-content: center;
    }


    .envelope-wrapper {
        width: min(340px, 90vw);

        height: 300px;

        margin:
            0 auto;

        position: relative;
    }


    .envelope-flap {
        height: 160px;
    }


    .envelope-flap::before {
        border-left-width: 45vw;

        border-right-width: 45vw;

        border-top-width: 160px;
    }


    .envelope-seal {
        top: 110px;
    }


    /* ==============================
       LETTER PAPER
    ============================== */

    .letter-sheet {
        width: calc(100% - 20px);

        max-width: 330px;

        min-height: 390px;

        max-height: 68vh;

        padding:
            30px
            22px
            35px;

        box-sizing: border-box;

        left: 50%;

        bottom: 15px;

        overflow-y: auto;
        overflow-x: hidden;

        transform:
            translateX(-50%)
            translateY(100px)
            scale(0.95);
    }


    /* Opened letter stays centered */

    .envelope-wrapper.opened
    .letter-sheet {
        left: 50%;

        transform:
            translateX(-50%)
            translateY(-230px)
            scale(1);

        opacity: 1;

        z-index: 7;
    }


    /* ==============================
       LETTER TEXT
    ============================== */

    .letter-sheet-inner {
        width: 100%;

        box-sizing: border-box;
    }


    .letter-sheet-inner h2 {
        font-size:
            clamp(
                27px,
                8vw,
                36px
            );

        line-height: 1.15;

        overflow-wrap: break-word;
    }


    .letter-sheet-inner p {
        font-size: 14px;

        line-height: 1.75;

        overflow-wrap: break-word;
    }


    .letter-date {
        font-size: 12px !important;
    }


    .letter-signature {
        margin-top: 25px;
    }


    .letter-final {
        margin-top: 200px;
    }

}

/* =========================================
   REMOVE BLUR OVERLAY ON MOBILE
========================================= */

.letter-backdrop {
    display: none !important;

    visibility: hidden !important;
    opacity: 0 !important;

    pointer-events: none !important;

    backdrop-filter: none !important;
    -webkit-backdrop-filter: none !important;

    background: transparent !important;
}

.envelope-wrapper.opened
.letter-backdrop {
    display: none !important;

    visibility: hidden !important;
    opacity: 0 !important;

    pointer-events: none !important;
}


/* Keep the actual letter above everything */

.envelope-wrapper.opened
.letter-sheet {
    z-index: 9999 !important;
}

</style>


<section class="letter-page">


    {{-- =========================================
         HEADER
    ========================================== --}}

    <div class="letter-page-header">

        <span class="section-label">
            ONE LAST THING
        </span>

        <h1>
            A Letter
            <span>For You</span>
        </h1>

        <p>
            I saved this part for last.
            Click the envelope when you're ready, baby. 💗
        </p>

    </div>


    {{-- =========================================
         ENVELOPE
    ========================================== --}}

    <section class="envelope-section">

        <div
            class="envelope-wrapper"
            id="loveEnvelope"
        >

            {{-- LETTER --}}
            <div
                class="letter-backdrop"
                id="letterBackdrop"
            ></div>
            <div class="letter-sheet">
                <button
                    type="button"
                    class="letter-close-button"
                    id="closeLoveLetter"
                >
                    ×
                </button>
                <div class="letter-sheet-inner">

                    <p class="letter-date">
                        September 29, 2026
                    </p>

                    <h2>
                        To my langga,
                    </h2>


                    <p>
                        Happy 10th monthsary, langga. 💗
                    </p>


                    <p>
                        I honestly can’t believe it has already been 10 months since we started this journey together. Sometimes it feels like time moved so fast, but at the same time, when I look back at everything we’ve shared, it feels like we’ve already made so many memories, had so many conversations, laughed at so many random things, and gone through so many little moments that became special just because they were with you and if there’s one thing I keep realizing over and over again, it’s how grateful I am that I have you in my life.
                    </p>


                    <p>
                        I’m so happy that it’s you, baby.
                    </p>


                    <p>
                        I’m really, really happy baby na ikaw yung kasama ko sa ganitong klase ng relationship. Hindi man tayo laging magkasama physically, hindi man kita laging nahahawakan, nayayakap, or nakikita anytime I want, I still feel so lucky because kahit may distance sa pagitan natin, you still make me feel loved, cared for, and connected to you and honestly langga, hindi madali ang long-distance relationship. There are days na miss na miss kita like sobra as in, days na gusto lang kitang makita agad kahit kakakita lang natin, days na sana katabi lang kita palagi pero kahit ganon, I’m still happy that it’s you langga.
                    </p>


                    <p>
                        I’m happy that you’re the person I miss. I’m happy that you’re the person I want to come home to after a long day. I’m happy that you’re the person I want to tell my random thoughts to, even when they don’t make any sense. Ikaw yung gusto kong makasama kapag pagod ako, kapag happy ako, kapag may problem ako, or kahit normal lang yung araw kahit malayo ka, you still somehow became such a big part of my everyday life baby.
                    </p>


                    <p>
                        Thank you for staying with me, thank you for choosing me, thank you for being patient with me, for listening to me, for understanding me kahit minsan ang hirap kong intindihin. Thank you for making time for me kahit may sarili ka ring ginagawa, pagod ka rin, or may pinagdadaanan ka rin. Thank you for all the little things that you probably don’t even realize mean so much to me.
                    </p>


                    <p>
                        Sobrang grateful ako na meron akong ikaw langga. Hindi ko man palaging nasasabi nang maayos, but gusto kong malaman mo na I really appreciate you. I appreciate your effort, your patience, your love, your time, your presence, and even the simple way you stay, minsan kasi ang dali lang sabihin na “I love you,” pero gusto kong malaman mo na hindi lang siya words para sa akin. I love you in the way na gusto kitang piliin araw-araw. I love you in the way na gusto kong ayusin kapag may problema tayo. I love you in the way na kahit may misunderstanding, ayoko lang basta sumuko or lumayo.
                    </p>


                    <p>
                        I know na hindi perfect yung relationship natin langga, and I don’t expect it to be perfect. May mga times na nagkakaroon talaga tayo ng misunderstandings, tampuhan, or moments na hindi tayo agad nagkakaintindihan. May times na pareho tayong emotional, pagod, sensitive, or hindi natin alam kung paano i-explain yung nararamdaman natin and I know normal lang naman iyon sa relationship. Hindi naman ibig sabihin na may problem tayo just because we disagree sometimes.
                    </p>


                    <p>
                        What's important sa akin is kahit may mga ganong moments, we still find our way back to each other. We still choose to stay. We still choose to talk. We still try to understand each other and sobrang thankful ako doon langga.
                    </p>


                    <p>
                        Sana habang tumatagal tayo, lagi nating tandaan na hindi tayo magkalaban kapag may problema tayo. Hindi ikaw versus ako. Dapat TAYO versus the problem. Sana kapag may misunderstanding tayo, matuto pa tayo na maging calm, gentle, and patient with each other kahit upset tayo, sana hindi natin maforget na love na love natin yung kausap natin. Sana lagi nating i-try na makinig muna bago magalit, mag-explain nang maayos, and sabihin kung ano talaga yung nararamdaman natin instead na kimkimin lang lahat.
                    </p>


                    <p>
                        I hope na kahit anong problem pa ang dumating sa atin in the future langga, we’ll always try to fix it together. Hindi ko naman hinihingi na hindi na tayo magkakaroon ng arguments or misunderstandings ever again, kasi impossible naman yon diba?. Ang wish ko lang is sana kapag dumating yung mga ganong moments, piliin pa rin nating maging gentle sa isa’t isa. Piliin nating mag-usap ng maayos at mahinahon. Piliin nating intindihin yung side ng kada isa. Piliin nating ayusin kaysa hayaan lang.
                    </p>


                    <p>
                        Because I really want this relationship to grow with us., ayoko lang na love kita kapag okay lahat. Gusto kong matutunan din kung paano ka mahalin kapag mahirap, kapag hindi tayo nagkakaintindihan, kapag may stressful days, at kapag kailangan natin ng extra patience sa isa’t isa.
                    </p>


                    <p>
                        And baby, sobrang proud ako sa atin. Proud ako kasi despite the distance, we’re still here. Despite the misunderstandings, we’re still here. Despite the days na miss na miss natin yung isa’t isa, we’re still here. Ten months might not sound super long to other people, pero para sa akin, every month with you matters. Every day na pinipili natin yung isa’t isa matters.
                    </p>


                    <p>
                        And nakakatuwa rin isipin na kahit long distance tayo ngayon as we celebrate our 10th monthsary, hindi naman forever ganito. Makikita rin naman kita ulit and honestly, just thinking about that makes me so excited, yung thought na after all the calls, messages, waiting, and missing each other, makikita rin kita ulit in person and ilang days nalang din yun. I can’t wait for that day. I can’t wait to see you, talk to you face-to-face, spend time with you, makatabi ikaw ulit matulog, kakain ng luto mo and just enjoy the fact na finally, hindi screen yung pagitan natin.
                    </p>


                    <p>
                        I want more memories with you. More months or years. More dates. More random conversations. More laughs. More pictures together. More simple days. More late-night talks. More moments na wala naman tayong ginagawa pero happy lang tayo dahil magkasama tayo.
                    </p>


                    <p>
                        I don’t know exactly what the future will look like langga, and I know marami pa tayong matututunan about each other and about ourselves. But what I do know is I want to keep trying with you. I want to keep growing with you. I want us to become better partners for each other as time goes by.
                    </p>


                    <p>
                        I hope never kang magsawa na sabihin sa akin kapag may bumabother sa’yo. I hope you’ll always feel safe enough to tell me when something hurts you, when something bothers you, or when you simply need reassurance. And I hope I can do the same with you. I want our relationship to be a place where we can be honest without being afraid, where we can make mistakes and learn, where we can be soft with each other even when things are hard.
                    </p>


                    <p>
                        Please always remember baby na sobrang importante mo sa akin. I’m so grateful for your existence, for your love, and for everything that makes you who you are. Your smile, your personality, your little habits, your humor, your softness, your patience, your random thoughts, even the things about you na baka tingin mo maliit lang kasi I notice them, and I love them.
                    </p>


                    <p>
                        You make me happy in ways na minsan hindi ko ma-explain nang maayos. You make ordinary days feel more special. You give me someone to look forward to talking to. Someone to miss. Someone to care about deeply. Someone I genuinely want to make happy.
                    </p>


                    <p>
                        And I really hope I also make you feel loved. I hope I make you feel appreciated. I hope I make you feel safe and important. I know I’m not perfect and I know there are still many things I need to improve, but please know that I’m trying because you matter to me.
                    </p>


                    <p>
                        Thank you for these 10 months, langga. Thank you for every memory, every conversation, every laugh, every sweet moment, every misunderstanding we managed to fix, every time we chose to stay, and every time we chose each other again.
                    </p>


                    <p>
                        I hope this is only the beginning of so many more months and memories for us. I hope someday we’ll look back at this chapter of our relationship even this long-distance part and smile because we made it through together.
                    </p>


                    <p>
                        Happy 10th monthsary, baby. 💗
                    </p>


                    <p>
                        I love you so much more than I probably say properly sometimes, more than this website can show, more than all these words can explain.
                    </p>


                    <p>
                        Kahit may distance, kahit may misunderstandings, kahit hindi always easy, I’m still grateful that it’s you.
                    </p>


                    <p>
                        And as long as we keep choosing each other, communicating, being gentle, being patient, and loving each other the best way we know how, I believe we can continue building something really beautiful together.
                    </p>


                    <p>
                        I love you so so so so much langga. Always take care of yourself for me. I’ll see you soon. 💗
                    </p>


                    <p class="letter-signature">
                        Always yours,<br>
                        Sayrababy 💌
                    </p>

                </div>

            </div>


            {{-- ENVELOPE --}}
            <div class="envelope-body"></div>

            <div class="envelope-flap"></div>


            <div class="envelope-seal">
                💗
            </div>


            <div class="envelope-hint">
                Click to open 💌
            </div>

        </div>

    </section>


    {{-- =========================================
         FINAL MESSAGE
    ========================================== --}}

    <section
        class="letter-final"
        id="letterFinal"
    >

        <div class="letter-final-card">

            <div>
                ✦ 💗 ✦
            </div>


            <span class="section-label">
                HAPPY 10 MONTHS
            </span>


            <h2>
                This isn't the end.

                <span>
                    It's just another chapter.
                </span>
            </h2>


            <p>
                Thank you for exploring this little website
                I made just for you, baby.
            </p>


            <p>
                I hope one day we can look back at this
                and remember this part of our story too. 💗
            </p>


            <div class="final-buttons">

                <a
                    href="{{ route('gift.home') }}"
                    class="secondary-button"
                >
                    Back to the Beginning
                </a>


                <a
                    href="{{ route('gift.memories') }}"
                    class="primary-button"
                >
                    Visit Our Memories Again
                </a>

            </div>

        </div>

    </section>

</section>


<script>

function setupLoveLetter() {

    const envelope =
        document.getElementById(
            'loveEnvelope'
        );

    const closeButton =
        document.getElementById(
            'closeLoveLetter'
        );

    const backdrop =
        document.getElementById(
            'letterBackdrop'
        );

    const letterSheet =
        document.querySelector(
            '.letter-sheet'
        );

    const finalSection =
        document.getElementById(
            'letterFinal'
        );


    /*
     * Stop if this isn't the letter page.
     */
    if (!envelope) {
        return;
    }


    /*
     * Prevent duplicate click listeners
     * if Turbo initializes this page again.
     */
    if (
        envelope.dataset.letterInitialized ===
        'true'
    ) {
        return;
    }


    envelope.dataset.letterInitialized =
        'true';


    function openLetter() {

        envelope.classList.add(
            'opened'
        );


        if (letterSheet) {

            letterSheet.scrollTop = 0;

        }


        setTimeout(
            function () {

                if (finalSection) {

                    finalSection
                        .classList
                        .add(
                            'show'
                        );

                }

            },
            1000
        );

    }


    function closeLetter(event) {

        if (event) {

            event.preventDefault();

            event.stopPropagation();

        }


        envelope.classList.remove(
            'opened'
        );

    }


    /*
     * OPEN THE ENVELOPE
     */
    envelope.addEventListener(
        'click',
        function (event) {

            /*
             * Don't trigger another open
             * while clicking inside the letter.
             */
            if (
                event.target.closest(
                    '.letter-sheet'
                )
            ) {
                return;
            }


            openLetter();

        }
    );


    /*
     * CLOSE BUTTON
     */
    if (closeButton) {

        closeButton.addEventListener(
            'click',
            function (event) {

                closeLetter(event);

            }
        );

    }


    /*
     * CLICKING THE BACKDROP
     * ALSO CLOSES THE LETTER
     */
    if (backdrop) {

        backdrop.addEventListener(
            'click',
            function (event) {

                closeLetter(event);

            }
        );

    }

}


/*
 * Normal page load
 */
if (
    document.readyState ===
    'loading'
) {

    document.addEventListener(
        'DOMContentLoaded',
        setupLoveLetter
    );

} else {

    setupLoveLetter();

}


/*
 * Turbo page navigation
 */
document.addEventListener(
    'turbo:load',
    setupLoveLetter
);

</script>
@endsection