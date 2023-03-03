<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Like;

class LikeController extends Controller
{
    public function create(Request $request)
    {
        $validated = $request->validate([
            'post_id'       => 'required|exists:posts,id',
            'user_id'       => 'required|exists:users,id',
        ]);
        $data = Like::create($validated);
        return $validated;
    }
}
