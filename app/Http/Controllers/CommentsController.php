<?php

namespace App\Http\Controllers;

use App\Http\Models\Comment;
use App\http\Models\News;
use App\Http\Requests\StoreBlogComment;
use App\Http\Requests\StoreBlogPost;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
//    public function index(News $news)
//    {
//        $allcomments = $news->comments()->get();
//        return view('news.more' , [
//            'comments' => $allcomments
//        ]);
//    }
    public function store(StoreBlogComment $request ,  News $news)
    {
        $news->comments()->create([
            'title' => $request->title ,
            'comment' => $request->comment
        ]);
        return redirect()->back();
    }
}
