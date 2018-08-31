<?php

namespace App\Http\Controllers;

use App\Http\Models\Comment;
use App\http\Models\News;
use App\Http\Requests\StoreBlogComment;
use App\Http\Requests\StoreBlogPost;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(StoreBlogComment $request ,  News $news)
    {
        $news->comments()->create([
            'title' => $request->title ,
            'comment' => $request->comment
        ]);
        return redirect()->back();
    }
    public function delete(News $news , Comment $comment)
    {
        $comment->delete();
        return redirect()->route('news.more' , $news);
    }
}
