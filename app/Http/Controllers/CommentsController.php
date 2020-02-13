<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Carbon\Carbon;

class CommentsController extends Controller
{
  public function index()
  {
    $comments = Comment::orderBy('created_at', 'DESC')
                  // ->get();
                  ->paginate(5);
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

  public function store(Request $request)
  {
    $this->validate($request, [
      'title' => 'required|max:10',  // 入力が必須で，最大10文字
      'body' => 'required'           // 入力が必須
    ]);
    $comment = new Comment();
    $comment->title = $request->title;
    $comment->body = $request->body;
    $timestamp = time();
    $comment->created_at = date("Y-m-d H:i:s", $timestamp);
    $comment->save();
    return redirect('/comments');
    // dd(date("Y-m-d H:i:s", $timestamp), $request, $comment);
  }
}
