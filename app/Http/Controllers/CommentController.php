<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;

class CommentController extends Controller
{
    public function create(Request $request)
    {
        $validated = $request->validate([
            'post_id'       => 'required|exists:posts,id',
            'user_id'       => 'required|exists:users,id',
            'comment_text'  => 'required|max:255',
        ]);
        $data = Comment::create($validated);
        return $validated;
    }

    public function getListCommentByIdPost($id)
    {
        $post = Post::findOrFail($id);
        $listComment = $post->comments()->paginate(Comment::LIMIT);
        $listLike = $post->likes()->paginate(Like::LIMIT);
        return view('admin.detail_post')->with([
            'comments' => $listComment,
            'postTitle' => $post->title,
            'likes' => $listLike,
        ]);
    }
}
