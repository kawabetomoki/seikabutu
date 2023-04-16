<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index(Comment $comment)
    {
        return view('comments.index')->with(['posts' => $comment->getBycomment()]);
    }
    
    public function store(PostRequest $request, Comment $comment)
    {
        $input = $request['comment'];
        $post->fill($input);
        $post->user_id=1;
        $post->save();
        return redirect('/comments/' . $comment->id);
    }
}
