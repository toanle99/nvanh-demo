<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        if(auth()->user()){
            $user = User::find(auth()->user()->id); 
            return view('home.index')->with('user', $user);
        }else {
            return view('home.index');
        }
    }
    public function event()
    {
        $user = User::find(auth()->user()->id); 
        $events = Event::where('one', '!=' , 0)
        ->where('two', '!=' , 0)
        ->where('three', '!=' , 0)
        ->orderBy('id', 'desc')
        ->limit(10)->get();

        return view('home.event')->with('user', $user)->with('events', $events);
    }
}
