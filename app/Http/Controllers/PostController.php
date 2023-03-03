<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StorePostRequest;
use App\Traits\UserTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{

    use UserTrait;

    public function create()
    {
        return view('post.add_post');
    }

    public function index()
    {
        $listPost = auth()->user()->post()->paginate(Post::POST_NUMBER_5);
        return view('post.list')->with('user', $listPost);
    }

    public function store(StorePostRequest $request)
    {
        $data = $request->validated();
        $isLimitPost = $this->isUnlimitCreatePost();

        if ($isLimitPost) {
            $listPost = $request->user()->post()->get();
            if (count($listPost) == Post::LIMIT) {
                return redirect()->route('posts.create')->with('messages', 'The allowed number of times has been exceeded');
            }
        }

        $newPost = Post::create([
            'title' => $data['title'],
            'content' => $data['content'],
            'user_id' => auth()->user()->id,
        ]);

        return Redirect::to('/posts');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $status = $post->status == Post::POST_ACTIVE
            ? Post::POST_UNACTIVE
            : Post::POST_ACTIVE;
        $post->status = $status;
        $post->save();

        return Redirect::to('/posts');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', ['post' => $post]);
    }

    public function update(StorePostRequest $request, $id)
    {
        $request->validated();
        $post = Post::findOrFail($id);
        $post->update($request->only('title', 'content'));

        return Redirect::to('/posts')->with('message', 'update success');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return Redirect::to('/posts')->with('message', 'update success');
    }
}
