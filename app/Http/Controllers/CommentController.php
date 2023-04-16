<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Post;

class CommentController extends Controller
{
    public function index(Comment $comment, Post $post)
    {
        return view('comments.index')->with(['comments' => $comment->where('post_id', $post->id)->get(), 'post'=>$post]);
    }
    
   public function comment(Comment $comment)
    {
        return view('comments/{{ $post->id }}/comment')->with(['comments' => $comment->get()]);
    }
    
    public function store(Request $request, Comment $comment, Post $post)
    {
        $input = $request['comment'];
        $comment->fill($input);
        $comment->user_id=1;
        $comment->post_id=$post->id;
        $comment->save();
        return redirect('/comments/'.$post->id.'/comment');
    }
}
