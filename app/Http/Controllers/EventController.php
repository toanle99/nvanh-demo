<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class EventController extends Controller
{

    public function getNow()
    {
        return Event::orderBy('id', 'desc')
        ->first();
    }

    public function getOldNow()
    {
        return Event::where('one', '!=' , 0)
        ->where('two', '!=' , 0)
        ->where('three', '!=' , 0)
        ->orderBy('id', 'desc')
        ->first();
    }
    public function eventHistory()
    {
        $events = Event::where('one', '!=' , 0)
        ->where('two', '!=' , 0)
        ->where('three', '!=' , 0)
        ->orderBy('id', 'desc')->limit(100)->get();
        return view('event.index')->with('events', $events);
    }
    public function get10OldNow()
    {
        return Event::where('one', '!=' , 0)
        ->where('two', '!=' , 0)
        ->where('three', '!=' , 0)
        ->orderBy('id', 'desc')
        ->first();
    }
}
