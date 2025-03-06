<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\UnauthorizedException;
use Illuminate\View\View;

class EventController extends Controller
{
    public function index(): View
    {
        return view('events', [
            'events' => Event::query()
                ->where('user_id', Auth::id())
                ->orderByDesc('created_at')
                ->get(),
        ]);
    }

    public function store(): RedirectResponse
    {
        $event = new Event();

        $event->user_id = Auth::id();
        $event->name = request('name', '---');
        $event->dates = request('dates');

        $event->save();

        return redirect()->route('events.view', $event);
    }

    public function view(Event $event): View
    {
        if ($event->user_id !== Auth::id()) {
            throw new UnauthorizedException();
        }

        return view('event', ['event' => $event]);
    }

    public function create(): View
    {
        return view('event-create');
    }
}
