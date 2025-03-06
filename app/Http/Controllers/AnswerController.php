<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\UnauthorizedException;
use Illuminate\View\View;

class AnswerController extends Controller
{
    public function index(Event $event): View
    {
        if ($event->user_id !== Auth::id()) {
            throw new UnauthorizedException();
        }

        return view('answers', [
            'event' => $event,
            'answers' => $event->answers,
        ]);
    }

    public function create(Event $event): View
    {
        return view('answer-create', ['event' => $event]);
    }

    public function store(Event $event): View
    {
        $answer = new Answer();

        $answer->event_id = $event->id;
        $answer->name = request('name');
        $answer->dates = request('dates');

        $answer->save();

        return view('answer-created', ['event' => $answer]);
    }
}
