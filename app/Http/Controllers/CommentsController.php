<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
  public function index()
  {
    $comments = Comment::get();
    // dd($comments);
    return view('comments.index')
                  ->with('comments', $comments);
  }

  public function show($_id)
  {
    $comment = Comment::where('_id', '=', $_id)
                      ->first();
    // dd($_id, $comment);
    return view('comments.show')
          ->with('comment', $comment);
  }
}
