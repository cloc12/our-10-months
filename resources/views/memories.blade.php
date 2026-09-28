@extends('layouts.gift')

@section('title', 'Our Memory Lane 📸')

@section('content')

<section class="memory-hero">

    <div class="memory-hero-text">

        <span class="section-label">
            CHAPTER ONE
        </span>

        <h1>
            Our Memory Lane
            <span>📸</span>
        </h1>

        <p>
            A little collection of moments, memories,
            and tiny pieces of our story that I never want to forget.
        </p>

        <div class="memory-hero-note">
            💗 Scroll slowly... every card has a little piece of us.
        </div>

    </div>

    <div class="memory-hero-characters">

        <img
            src="/images/characters/minion1.png"
            alt="Cute Minion"
            class="memory-character minion-memory"
        >

        <img
            src="/images/characters/nailong1.png"
            alt="Cute Nailoong"
            class="memory-character nailoong-memory"
        >

    </div>

</section>


<section class="memory-lane">

    {{-- MEMORY 1 --}}
    <article class="memory-entry reveal-memory">

        <div class="memory-date-badge">
            MEMORY 01
        </div>

        <div class="memory-grid">

            <div class="memory-photo-area">

                <div class="memory-polaroid rotate-left">

                    <img
                        src="/images/memories/1.jpg"
                        alt="Our first memory"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                    >

                    <div class="memory-photo-placeholder">
                        📸
                    </div>

                    <p class="polaroid-caption">
                        where it all started ♡
                    </p>

                </div>

            </div>

            <div class="memory-story-card">

                <span class="memory-small-title">
                    THE BEGINNING
                </span>

                <h2>
                    Our first "hello" in person
                </h2>

                <p class="memory-date-text">
                    November 28, 2025
                </p>

                <p>
                    This is where our first met happened.
                    Mga mahiyain pa at first but nag-click din agad.
                    This is also our first picture together.
                </p>

                <p>
                    Looking back at it now, I still think it’s funny how
                    one moment can eventually turn into so many memories.
                </p>

                <div class="memory-note">
                    “The beginning of my favorite plot twist.”
                </div>

            </div>

        </div>

    </article>

{{-- MEMORY 2 --}}
<article class="memory-entry reveal-memory">

    <div class="memory-date-badge">
        MEMORY 02
    </div>

    <div class="memory-grid reverse-memory">

        <div class="memory-photo-area">

            <div class="memory-polaroid rotate-right">

                <img
                    src="/images/memories/funny.jpg"
                    alt="One of our funniest moments"
                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                >

                <div class="memory-photo-placeholder">
                    😂
                </div>

                <p class="polaroid-caption">
                    one of my favorite laughs
                </p>

            </div>

        </div>

        <div class="memory-story-card">

            <span class="memory-small-title">
                THE FUNNY ONE
            </span>

            <h2>
                One of your funny picture
            </h2>

            <p class="memory-date-text">
                June 1, 2026
            </p>

            <p>
                This is your most iconic funny pose baby WHAHWAHAHHAHAHAHWA
                ka-silly masyado ng face mo but still cute pa rin.
            </p>

            <p>
            
            </p>

            <div class="memory-note">
                “Still makes me laugh every time I remember it.”
            </div>

        </div>

    </div>

</article>


{{-- MEMORY 3 --}}
<article class="memory-entry reveal-memory">

    <div class="memory-date-badge">
        MEMORY 03
    </div>

    <div class="memory-grid">

        <div class="memory-photo-area">

            <div class="memory-polaroid rotate-left">

                <img
                    src="/images/memories/basta.jpg"
                    alt="A sweet memory"
                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                >

                <div class="memory-photo-placeholder">
                    🥹
                </div>

                <p class="polaroid-caption">
                    softest memory
                </p>

            </div>

        </div>

        <div class="memory-story-card">

            <span class="memory-small-title">
                THE SWEET ONE
            </span>

            <h2>
                A Moment I’ll Always Remember
            </h2>

            <p class="memory-date-text">
                September 13, 2026
            </p>

            <p>
                To be honest, super dami na nating moments together, pero this is one of those memories na I know I’ll always remember.
Kasi this was the day na nagkaroon tayo ng little space na parang atin lang, which we now call our “bahay” — kahit may iba ring nakatira, dedma na lang XD. What makes it special for me is that it became a place where we could just be ourselves, spend time together, talk about random things, laugh, rest, and enjoy each other’s presence.
            </p>

            <p>
                It may look like a simple place, pero for me, it feels special because it became part of our story. Parang kahit saglit lang, we had our own little corner where being together already felt like home. 💗
            </p>

            <div class="memory-note">
                “Some memories feel small at first, then become everything.”
            </div>

        </div>

    </div>

</article>


    {{-- MEMORY 4 --}}
    <article class="memory-entry reveal-memory">

        <div class="memory-date-badge">
            MEMORY 04
        </div>

        <div class="memory-grid reverse-memory">

            <div class="memory-photo-area">

                <div class="memory-polaroid rotate-right">

                    <img
                        src="/images/memories/gamay.jpg"
                        alt="A random memory"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                    >

                    <div class="memory-photo-placeholder">
                        💬
                    </div>

                    <p class="polaroid-caption">
                        random but special
                    </p>

                </div>

            </div>

            <div class="memory-story-card">

                <span class="memory-small-title">
                    THE RANDOM ONE
                </span>

                <h2>
                    The Little Moments
                </h2>

                <p class="memory-date-text">
                </p>

                <p>
                    I know not every memory has to be a big event. Kasi even the little things and simple moments already make me happy, especially when I’m with you. Those small moments matter so much to me because as long as we’re together Langga ko, everything feels special. I’m grateful even for the ordinary days, random conversations, small laughs, and quiet moments because somehow, being with you makes them worth remembering.
                </p>

                <div class="memory-note">
                    “I love the ordinary moments because they’re ours.”
                </div>

            </div>

        </div>

    </article>


    {{-- MEMORY 6 --}}
    <article class="memory-entry reveal-memory">

        <div class="memory-date-badge">
            MEMORY 06
        </div>

        <div class="memory-grid">

            <div class="memory-photo-area">

                <div class="memory-polaroid rotate-left">

                    <img
                        src="/images/memories/game.png"
                        alt="Long distance memory"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                    >

                    <div class="memory-photo-placeholder">
                        🌙
                    </div>

                    <p class="polaroid-caption">
                        still choosing you
                    </p>

                </div>

            </div>

            <div class="memory-story-card">

                <span class="memory-small-title">
                    EVEN FROM FAR AWAY
                </span>

                <h2>
                    Us, Even With the Distance
                </h2>

                <p class="memory-date-text">
                    August 05, 2026
                </p>

                <p>
                    Being far from each other isn’t always easy,
                    but I’m still grateful that we keep choosing each other.
                </p>

                <p>
                    Distance can change where we are Langga,
                    but it doesn’t change how important you are to me.
                </p>

                <div class="memory-note">
                    “Laro na tayo roblox ulit please 🙏🏻”
                </div>

            </div>

        </div>

    </article>



    {{-- SPECIAL MEMORY --}}
    <article class="memory-entry reveal-memory special-memory-entry">

        <div class="special-memory-label">
            ⭐ SPECIAL MEMORY ⭐
        </div>

        <div class="special-memory-card">

            <div class="special-memory-photo">

                <img
                    src="/images/memories/fave.jpg"
                    alt="Special memory"
                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                >

                <div class="special-photo-placeholder">
                    💖
                </div>

            </div>

            <div class="special-memory-content">

                <span class="memory-small-title">
                    MY FAVORITE
                </span>

                <h2>
                    One Memory I’d Replay Forever
                </h2>

                <p class="memory-date-text">
                    November 29, 2026
                </p>

                <p>
                    This day will always be one of the most special days of my life because this was the day we officially became us. This was the day I got to love someone like you — someone so caring, sweet, generous, kind-hearted, and genuine, someone I never expected would become such a big and important part of my life.
I’m really grateful that out of all the people in this world, I get to call you mine. Thank you for always being there, for caring for me, for making me feel loved, and for choosing me even on the days when things aren’t always easy.
                </p>

                <p>
                    And now, looking at us today, I’m even more thankful because we’re still here, still choosing each other, still making memories, and still growing together. This day didn’t just mark the start of our relationship — it became the beginning of something I’ll always be grateful for. 💗
                </p>

                <div class="memory-note big-note">
                    “If I could replay one moment over and over,
                    this would definitely be one of them.”
                </div>

            </div>

        </div>

    </article>


</section>


<section class="memory-ending reveal-memory">

    <div class="memory-ending-card">

        <div class="memory-ending-stars">
            ✦ ♥ ✦
        </div>

        <span class="section-label">
            TO BE CONTINUED...
        </span>

        <h2>
            And these aren't even all of our memories.
        </h2>

        <p>
            We still have so many more moments to create,
            so many laughs to share,
            and so many chapters that haven’t even happened yet.
        </p>

<a
    href="{{ route('gift.quiz') }}"
    class="primary-button"
    data-turbo="false"
>
    Continue to Our Quiz →
</a>

    </div>

</section>

@endsection