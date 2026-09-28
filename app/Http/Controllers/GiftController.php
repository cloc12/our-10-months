<?php

namespace App\Http\Controllers;

use App\Models\QuizResponse;
use Illuminate\Http\Request;


class GiftController extends Controller
{
    public function unlockPage()
    {
        return view('unlock');
    }

    public function unlock(Request $request)
    {
        $request->validate([
            'passcode' => ['required', 'string'],
        ]);

        $enteredPasscode = preg_replace(
            '/[^0-9]/',
            '',
            $request->passcode
        );

        $correctPasscode = preg_replace(
            '/[^0-9]/',
            '',
            config('gift.passcode')
        );

        if (hash_equals($correctPasscode, $enteredPasscode)) {
            return redirect()->route('gift.home');
        }

        return back()
            ->withInput()
            ->withErrors([
                'passcode' =>
                    'Hmm... that is not our special date 💭',
            ]);
    }

    public function home()
    {
        return view('home');
    }

    public function memories()
    {
        return view('memories');
    }

    public function quiz()
    {
        return view('quiz');
    }

public function submitQuiz(Request $request)
{
    $validated = $request->validate([
        'answer_1' => ['required', 'string', 'max:2000'],
        'answer_2' => ['required', 'string', 'max:2000'],
        'answer_3' => ['required', 'string', 'max:2000'],
        'answer_4' => ['required', 'string', 'max:2000'],
        'answer_5' => ['required', 'string', 'max:2000'],
        'answer_6' => ['required', 'string', 'max:2000'],
        'answer_7' => ['required', 'string', 'max:2000'],
        'answer_8' => ['required', 'string', 'max:2000'],
        'answer_9' => ['required', 'string', 'max:2000'],
        'answer_10' => ['required', 'string', 'max:2000'],
    ]);

    QuizResponse::create($validated);
    
    return redirect()
        ->route('gift.quiz.thankyou');
}

    public function quizThankYou()
    {
        return view('quiz-thank-you');
    }

    public function quizAnswers()
    {
        $responses = QuizResponse::latest()->get();

        return view(
            'quiz-answers',
            compact('responses')
        );
    }

    public function reasons()
    {
        return view('reasons');
    }

    public function distance()
    {
        return view('distance');
    }

    public function letter()
    {
        return view('letter');
    }

    public function lock()
    {
        return redirect()->route('gift.unlock');
    }
}