<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserEvent;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserEventController extends Controller
{

    public function setCostNow(Request $request)
    {
        // return auth()->user()->id; 
        $userevent = UserEvent::where('event_id', $request->event)->orderBy('id', 'desc')->first();
        implode('|', $request->data);
        $user = auth()->user();
        $cost = $user->cost; 
        if(isset($userevent)) {
            return 0; // da cuoc roi
        } else {
            if ($user->cost - (count($request->data) * $request->cost) < 0) {
                return 1; // khong du tien
            } else {
                $user->cost -= (count($request->data) * $request->cost);
                UserEvent::create([ 
                    'user_id'   => auth()->user()->id,
                    'event_id'  => $request->event,
                    'select'    => implode('|', $request->data),
                    'cost'      => $request->cost,
                ]);
                $user->save();
                return 4;
            }
        }
    }  
}
