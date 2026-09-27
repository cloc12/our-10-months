@extends('layouts.gift')

@section('title', 'Thank You For Answering 💗')

@section('content')

<section class="quiz-thankyou-page">

    <div class="quiz-thankyou-card">

        <div class="quiz-thankyou-decoration">
            ✦ 💗 ✦
        </div>

        <div class="quiz-thankyou-icon">
            💌
        </div>

        <span class="section-label">
            ANSWERS SAVED
        </span>

        <h1>
            Thank You For
            <span>Answering</span>
            <span>Langga ko</span>
        </h1>

        <p>
            I know some of those questions were a little sentimental,
            but I genuinely wanted to know your answers.
        </p>

        <p>
            Your answers have been safely sent to me. 💗
        </p>

        <div class="quiz-thankyou-note">

            One day, I think it'll be really nice to look back
            at what we both thought and felt during this part
            of our story.

        </div>

        <a
            href="{{ route('gift.reasons') }}"
            class="primary-button"
        >
            Continue Our Story →
        </a>

    </div>

</section>

@endsection