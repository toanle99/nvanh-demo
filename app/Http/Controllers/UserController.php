<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function info()
    {
        $id = auth()->user()->id;
        $user = User::findOrFail($id);

        return view('auth.userinfo')->with('user', $user);
    }
    public function detail($id)
    {
        $user = User::findOrFail($id);

        return view('admin.detail')->with('user', $user);
    }

    public function getListPostByIdUser($id)
    {
        $posts = User::findOrFail($id)->post()->paginate(Post::LIMIT);
        return view('admin.list_post')->with('posts', $posts);
    }
}
