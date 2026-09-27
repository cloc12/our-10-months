@extends('layouts.gift')

@section('title', 'A Little Quiz About Us 💗')

@section('content')

<section class="journal-quiz">

    <div
        class="journal-intro"
        id="journalIntro"
    >

        <div class="journal-stars">
            ✦ 💗 ✦
        </div>

        <span class="section-label">
            JUST BETWEEN US
        </span>

        <h1>
            A Few Questions
            <span>For You</span>
        </h1>

        <p>
            There aren't any right or wrong answers here baby.
            I just wanted to know what some of our memories
            and little moments look like from your side. 💗
        </p>

        <div class="journal-note">

            <span>💌</span>

            <p>
                Take your time langga. I really want to read
                 what you honestly think. beep 😜
            </p>

        </div>

        <button
            type="button"
            class="journal-start-button"
            id="startJournalQuiz"
        >
            Okay, I'm Ready
            <span>→</span>
        </button>

    </div>


    <form
        method="POST"
        action="{{ route('gift.quiz.submit') }}"
        id="relationshipQuizForm"
        class="relationship-form hidden"
    >

        @csrf


        {{-- QUESTION 1 --}}

        <section
            class="journal-question active-question"
            data-question="1"
        >

            <div class="journal-progress-info">

                <span>
                    QUESTION 01
                </span>

                <span>
                    1 / 10
                </span>

            </div>

            <div class="journal-progress">

                <div
                    class="journal-progress-bar"
                    style="width: 10%;"
                ></div>

            </div>

            <div class="journal-question-card">

                <span class="journal-emoji">
                    👀
                </span>

                <span class="journal-category">
                    FIRST IMPRESSIONS
                </span>

                <h2>
                    What's the first thing you noticed about me?
                </h2>

                <textarea
                    name="answer_1"
                    placeholder="Tell me what you remember..."
                    maxlength="2000"
                    required
                >{{ old('answer_1') }}</textarea>

                <div class="journal-character-count">
                    <span class="current-count">0</span>
                    / 2000
                </div>

                <button
                    type="button"
                    class="journal-next-button"
                >
                    Next Question →
                </button>

            </div>

        </section>


        {{-- QUESTION 2 --}}

        <section
            class="journal-question"
            data-question="2"
        >

            <div class="journal-progress-info">

                <span>
                    QUESTION 02
                </span>

                <span>
                    2 / 10
                </span>

            </div>

            <div class="journal-progress">

                <div
                    class="journal-progress-bar"
                    style="width: 20%;"
                ></div>

            </div>

            <div class="journal-question-card">

                <span class="journal-emoji">
                    📸
                </span>

                <span class="journal-category">
                    MEMORY LANE
                </span>

                <h2>
                    What's your favorite memory from our
                    10 months together?
                </h2>

                <textarea
                    name="answer_2"
                    placeholder="Which memory would you replay?"
                    maxlength="2000"
                    required
                >{{ old('answer_2') }}</textarea>

                <div class="journal-character-count">
                    <span class="current-count">0</span>
                    / 2000
                </div>

                <div class="journal-navigation">

                    <button
                        type="button"
                        class="journal-back-button"
                    >
                        ← Back
                    </button>

                    <button
                        type="button"
                        class="journal-next-button"
                    >
                        Next Question →
                    </button>

                </div>

            </div>

        </section>


        {{-- QUESTION 3 --}}

        <section
            class="journal-question"
            data-question="3"
        >

            <div class="journal-progress-info">

                <span>
                    QUESTION 03
                </span>

                <span>
                    3 / 10
                </span>

            </div>

            <div class="journal-progress">

                <div
                    class="journal-progress-bar"
                    style="width: 30%;"
                ></div>

            </div>

            <div class="journal-question-card">

                <span class="journal-emoji">
                    😊
                </span>

                <span class="journal-category">
                    LITTLE THINGS
                </span>

                <h2>
                    What little thing do I do that makes
                    you smile every time?
                </h2>

                <textarea
                    name="answer_3"
                    placeholder="It can be something really small..."
                    maxlength="2000"
                    required
                >{{ old('answer_3') }}</textarea>

                <div class="journal-character-count">
                    <span class="current-count">0</span>
                    / 2000
                </div>

                <div class="journal-navigation">

                    <button
                        type="button"
                        class="journal-back-button"
                    >
                        ← Back
                    </button>

                    <button
                        type="button"
                        class="journal-next-button"
                    >
                        Next Question →
                    </button>

                </div>

            </div>

        </section>


        {{-- QUESTION 4 --}}

        <section
            class="journal-question"
            data-question="4"
        >

            <div class="journal-progress-info">

                <span>
                    QUESTION 04
                </span>

                <span>
                    4 / 10
                </span>

            </div>

            <div class="journal-progress">

                <div
                    class="journal-progress-bar"
                    style="width: 40%;"
                ></div>

            </div>

            <div class="journal-question-card">

                <span class="journal-emoji">
                    💗
                </span>

                <span class="journal-category">
                    THAT MOMENT
                </span>

                <h2>
                    When did you realize you were
                    in love with me?
                </h2>

                <textarea
                    name="answer_4"
                    placeholder="Was there a certain moment?"
                    maxlength="2000"
                    required
                >{{ old('answer_4') }}</textarea>

                <div class="journal-character-count">
                    <span class="current-count">0</span>
                    / 2000
                </div>

                <div class="journal-navigation">

                    <button
                        type="button"
                        class="journal-back-button"
                    >
                        ← Back
                    </button>

                    <button
                        type="button"
                        class="journal-next-button"
                    >
                        Next Question →
                    </button>

                </div>

            </div>

        </section>


        {{-- QUESTION 5 --}}

        <section
            class="journal-question"
            data-question="5"
        >

            <div class="journal-progress-info">

                <span>
                    QUESTION 05
                </span>

                <span>
                    5 / 10
                </span>

            </div>

            <div class="journal-progress">

                <div
                    class="journal-progress-bar"
                    style="width: 50%;"
                ></div>

            </div>

            <div class="journal-question-card">

                <span class="journal-emoji">
                    🎬
                </span>

                <span class="journal-category">
                    OUR MOVIE
                </span>

                <h2>
                    If our love story was a movie,
                    what would the title be?
                </h2>

                <textarea
                    name="answer_5"
                    placeholder="Give our movie a title..."
                    maxlength="2000"
                    required
                >{{ old('answer_5') }}</textarea>

                <div class="journal-character-count">
                    <span class="current-count">0</span>
                    / 2000
                </div>

                <div class="journal-navigation">

                    <button
                        type="button"
                        class="journal-back-button"
                    >
                        ← Back
                    </button>

                    <button
                        type="button"
                        class="journal-next-button"
                    >
                        Next Question →
                    </button>

                </div>

            </div>

        </section>


        {{-- QUESTION 6 --}}

        <section
            class="journal-question"
            data-question="6"
        >

            <div class="journal-progress-info">

                <span>
                    QUESTION 06
                </span>

                <span>
                    6 / 10
                </span>

            </div>

            <div class="journal-progress">

                <div
                    class="journal-progress-bar"
                    style="width: 60%;"
                ></div>

            </div>

            <div class="journal-question-card">

                <span class="journal-emoji">
                    🎵
                </span>

                <span class="journal-category">
                    OUR SOUNDTRACK
                </span>

                <h2>
                    What song reminds you of me the most?
                </h2>

                <textarea
                    name="answer_6"
                    placeholder="Song title, artist, and why if you want..."
                    maxlength="2000"
                    required
                >{{ old('answer_6') }}</textarea>

                <div class="journal-character-count">
                    <span class="current-count">0</span>
                    / 2000
                </div>

                <div class="journal-navigation">

                    <button
                        type="button"
                        class="journal-back-button"
                    >
                        ← Back
                    </button>

                    <button
                        type="button"
                        class="journal-next-button"
                    >
                        Next Question →
                    </button>

                </div>

            </div>

        </section>


        {{-- QUESTION 7 --}}

        <section
            class="journal-question"
            data-question="7"
        >

            <div class="journal-progress-info">

                <span>
                    QUESTION 07
                </span>

                <span>
                    7 / 10
                </span>

            </div>

            <div class="journal-progress">

                <div
                    class="journal-progress-bar"
                    style="width: 70%;"
                ></div>

            </div>

            <div class="journal-question-card">

                <span class="journal-emoji">
                    ✨
                </span>

                <span class="journal-category">
                    THREE WORDS
                </span>

                <h2>
                    If you could describe me in three words,
                    what would they be?
                </h2>

                <textarea
                    name="answer_7"
                    placeholder="Only three... choose carefully 😌"
                    maxlength="2000"
                    required
                >{{ old('answer_7') }}</textarea>

                <div class="journal-character-count">
                    <span class="current-count">0</span>
                    / 2000
                </div>

                <div class="journal-navigation">

                    <button
                        type="button"
                        class="journal-back-button"
                    >
                        ← Back
                    </button>

                    <button
                        type="button"
                        class="journal-next-button"
                    >
                        Next Question →
                    </button>

                </div>

            </div>

        </section>


        {{-- QUESTION 8 --}}

        <section
            class="journal-question"
            data-question="8"
        >

            <div class="journal-progress-info">

                <span>
                    QUESTION 08
                </span>

                <span>
                    8 / 10
                </span>

            </div>

            <div class="journal-progress">

                <div
                    class="journal-progress-bar"
                    style="width: 80%;"
                ></div>

            </div>

            <div class="journal-question-card">

                <span class="journal-emoji">
                    🥹
                </span>

                <span class="journal-category">
                    CUTEST MOMENT
                </span>

                <h2>
                    What's the cutest thing I've ever
                    done for you?
                </h2>

                <textarea
                    name="answer_8"
                    placeholder="I actually want to know this one..."
                    maxlength="2000"
                    required
                >{{ old('answer_8') }}</textarea>

                <div class="journal-character-count">
                    <span class="current-count">0</span>
                    / 2000
                </div>

                <div class="journal-navigation">

                    <button
                        type="button"
                        class="journal-back-button"
                    >
                        ← Back
                    </button>

                    <button
                        type="button"
                        class="journal-next-button"
                    >
                        Next Question →
                    </button>

                </div>

            </div>

        </section>


        {{-- QUESTION 9 --}}

        <section
            class="journal-question"
            data-question="9"
        >

            <div class="journal-progress-info">

                <span>
                    QUESTION 09
                </span>

                <span>
                    9 / 10
                </span>

            </div>

            <div class="journal-progress">

                <div
                    class="journal-progress-bar"
                    style="width: 90%;"
                ></div>

            </div>

            <div class="journal-question-card">

                <span class="journal-emoji">
                    🌎
                </span>

                <span class="journal-category">
                    OUR FUTURE
                </span>

                <h2>
                    What's one dream you want us
                    to achieve together?
                </h2>

                <textarea
                    name="answer_9"
                    placeholder="Something for our future..."
                    maxlength="2000"
                    required
                >{{ old('answer_9') }}</textarea>

                <div class="journal-character-count">
                    <span class="current-count">0</span>
                    / 2000
                </div>

                <div class="journal-navigation">

                    <button
                        type="button"
                        class="journal-back-button"
                    >
                        ← Back
                    </button>

                    <button
                        type="button"
                        class="journal-next-button"
                    >
                        Last Question →
                    </button>

                </div>

            </div>

        </section>


        {{-- QUESTION 10 --}}

        <section
            class="journal-question"
            data-question="10"
        >

            <div class="journal-progress-info">

                <span>
                    QUESTION 10
                </span>

                <span>
                    10 / 10
                </span>

            </div>

            <div class="journal-progress">

                <div
                    class="journal-progress-bar"
                    style="width: 100%;"
                ></div>

            </div>

            <div class="journal-question-card final-question-card">

                <span class="journal-emoji">
                    🫂
                </span>

                <span class="journal-category">
                    HOME
                </span>

                <h2>
                    What's the most comforting thing
                    about being with me?
                </h2>

                <textarea
                    name="answer_10"
                    placeholder="Last one... tell me honestly 💗"
                    maxlength="2000"
                    required
                >{{ old('answer_10') }}</textarea>

                <div class="journal-character-count">
                    <span class="current-count">0</span>
                    / 2000
                </div>

                <div class="journal-navigation">

                    <button
                        type="button"
                        class="journal-back-button"
                    >
                        ← Back
                    </button>

                    <button
                        type="submit"
                        class="journal-submit-button"
                        id="submitJournalButton"
                    >
                        Send My Answers 💌
                    </button>

                </div>

            </div>

        </section>

    </form>

</section>

@endsection