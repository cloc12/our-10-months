@extends('layouts.gift')

@section('title', 'Happy Motmot 💗')

@section('content')

<section class="hero">

    <div class="hero-sticker hero-sticker-left">
        ✨
    </div>


    <div class="hero-content">

        <p class="hero-label">
            NOVEMBER 29, 2025 — FOREVER
        </p>


        <h1>

            Happy

            <span class="pink-text">
                10 Months
            </span>

            Langga ko!

        </h1>


        <p class="hero-description">

            Even when we're miles apart,
            you are still my favorite part of every day.

            So I made you your own little place
            on the internet. 💗

        </p>


        <div class="hero-buttons">

            <a
                href="{{ route('gift.memories') }}"
                class="primary-button"
            >

                Start Our Story

                <span>
                    →
                </span>

            </a>


            <a
                href="{{ route('gift.quiz') }}"
                class="secondary-button"
            >

                Take Our Quiz 🧠

            </a>

        </div>

    </div>


{{-- POLAROID PHOTOS --}}
<div class="hero-visual">

    <div class="photo-stack">

        {{-- BACK POLAROID --}}
        <div class="polaroid polaroid-back">

            <img
                src="{{ asset('images/polaroids/memory2.jpeg') }}"
                alt="My favorite person"
                class="polaroid-photo"
            >

            <p>
                my favorite person
            </p>

        </div>


        {{-- FRONT POLAROID --}}
        <div class="polaroid polaroid-front">

            <img
                src="{{ asset('images/polaroids/memory1.jpeg') }}"
                alt="Us"
                class="polaroid-photo"
            >

            <p>
                us &lt;3
            </p>

        </div>

    </div>

</div>

</section>


<section class="section">

    <div class="section-heading">

        <span class="section-label">
            CHOOSE YOUR ADVENTURE
        </span>


        <h2>
            Explore Our Little World
        </h2>


        <p>
            I hid some memories, games and surprises around here.
        </p>

    </div>


    <div class="adventure-grid">

        <a
            href="{{ route('gift.memories') }}"
            class="adventure-card"
        >

            <div class="adventure-icon">
                📸
            </div>

            <span class="card-number">
                01
            </span>

            <h3>
                Memory Lane
            </h3>

            <p>
                Go back through some of my favorite memories of us.
            </p>

            <div class="card-link">
                Start remembering →
            </div>

        </a>


        <a
            href="{{ route('gift.quiz') }}"
            class="adventure-card"
        >

            <div class="adventure-icon">
                🧠
            </div>

            <span class="card-number">
                02
            </span>

            <h3>
                Our Quiz
            </h3>

            <p>
                Let's find out how well you remember our story.
            </p>

            <div class="card-link">
                Take the challenge →
            </div>

        </a>


        <a
            href="{{ route('gift.reasons') }}"
            class="adventure-card"
        >

            <div class="adventure-icon">
                💗
            </div>

            <span class="card-number">
                03
            </span>

            <h3>
                Why You?
            </h3>

            <p>
                Ten little reminders of why you're so special to me.
            </p>

            <div class="card-link">
                Open the hearts →
            </div>

        </a>


        <a
            href="{{ route('gift.distance') }}"
            class="adventure-card"
        >

            <div class="adventure-icon">
                🌎
            </div>

            <span class="card-number">
                04
            </span>

            <h3>
                Miles Apart
            </h3>

            <p>
                Distance might separate us, but never our hearts.
            </p>

            <div class="card-link">
                Visit this page →
            </div>

        </a>


        <a
            href="{{ route('gift.letter') }}"
            class="adventure-card special-card"
        >

            <div class="adventure-icon">
                💌
            </div>

            <span class="card-number">
                FINAL
            </span>

            <h3>
                A Letter For You
            </h3>

            <p>
                Save this one for last. I wrote something just for you.
            </p>

            <div class="card-link">
                Open when you're ready →
            </div>

        </a>

    </div>

</section>

@endsection