@extends('layouts.gift')

@section('title', 'Quiz Answers 💌')

@section('content')

<section class="saved-answers-page">

    <div class="page-header">

        <span class="section-label">
            SAVED RESPONSES
        </span>

        <h1>
            Her Answers 💌
        </h1>

        <p>
            Responses submitted through the relationship quiz.
        </p>

    </div>


    @if($responses->isEmpty())

        <div class="coming-soon-card">

            <span class="big-emoji">
                💭
            </span>

            <h2>
                No answers yet.
            </h2>

            <p>
                Once the quiz is submitted,
                the answers will appear here.
            </p>

        </div>

    @else

        @foreach($responses as $response)

            <article class="saved-response">

                <div class="saved-response-header">

                    <span>
                        Response #{{ $response->id }}
                    </span>

                    <span>
                        {{ $response->created_at->format('F j, Y - g:i A') }}
                    </span>

                </div>


                <div class="saved-answer">

                    <h3>
                        1. What's the first thing you noticed about me?
                    </h3>

                    <p>
                        {{ $response->answer_1 }}
                    </p>

                </div>


                <div class="saved-answer">

                    <h3>
                        2. What's your favorite memory from our 10 months together?
                    </h3>

                    <p>
                        {{ $response->answer_2 }}
                    </p>

                </div>


                <div class="saved-answer">

                    <h3>
                        3. What little thing do I do that makes you smile every time?
                    </h3>

                    <p>
                        {{ $response->answer_3 }}
                    </p>

                </div>


                <div class="saved-answer">

                    <h3>
                        4. When did you realize you were in love with me?
                    </h3>

                    <p>
                        {{ $response->answer_4 }}
                    </p>

                </div>


                <div class="saved-answer">

                    <h3>
                        5. If our love story was a movie, what would the title be?
                    </h3>

                    <p>
                        {{ $response->answer_5 }}
                    </p>

                </div>


                <div class="saved-answer">

                    <h3>
                        6. What song reminds you of me the most?
                    </h3>

                    <p>
                        {{ $response->answer_6 }}
                    </p>

                </div>


                <div class="saved-answer">

                    <h3>
                        7. If you could describe me in three words, what would they be?
                    </h3>

                    <p>
                        {{ $response->answer_7 }}
                    </p>

                </div>


                <div class="saved-answer">

                    <h3>
                        8. What's the cutest thing I've ever done for you?
                    </h3>

                    <p>
                        {{ $response->answer_8 }}
                    </p>

                </div>


                <div class="saved-answer">

                    <h3>
                        9. What's one dream you want us to achieve together?
                    </h3>

                    <p>
                        {{ $response->answer_9 }}
                    </p>

                </div>


                <div class="saved-answer">

                    <h3>
                        10. What's the most comforting thing about being with me?
                    </h3>

                    <p>
                        {{ $response->answer_10 }}
                    </p>

                </div>

            </article>

        @endforeach

    @endif

</section>

@endsection