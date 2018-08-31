@extends('layouts.layout')
@section('header')
    @parent
@endsection
@section('content')
    <article id="post-19"
             class="post-19 post type-post status-publish format-standard has-post-thumbnail hentry category-typography tag-html-markup">

        <header class="clearfix entry-header">
                <span class="comments-link"> <a
                            href="#">0</a></span>

            <h2 class="entry-title"><a href=""
                                       rel="bookmark">{{$news->title}}</a></h2>


            <div class="entry-meta">
                    <span class="posted-on">Posted on <a href="#"
                                                         title="5:52 pm" rel="bookmark"><time
                                    class="entry-date published"
                                    datetime="2014-04-24T17:52:23+00:00">April 24, 2014</time></a></span><span
                        class="byline"> by <span class="author vcard"><a class="url fn n"
                                                                         href="#"
                                                                         title="View all posts by aocean">aocean</a></span></span>
            </div>

        </header>


        <div class="entry-thumb-full">
            <a href="#" title="Text Formatting">
                <img width="650" height="300"
                     src="{{$news->img}}"
                     class="attachment-thumb-full size-thumb-full wp-post-image" alt="Text Formatting"/>
            </a>
        </div>

        <div class="entry-summary">
            <p>{{$news->news}}</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="entry-summary">
                    <a href="{{route('news.show' ,$news)}}" class="button">Update</a>
                </div>
                <div class="entry-summary">
                    <a href="{{route('news.delete' , $news)}}" class="button">Delete</a>
                </div>
            </div>
            @forelse($comments as $comment)
                <div class="card" style="width: 34rem">
                    <div class="card-header" style="background: #43c6a9">
                        Comment
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$comment->title}}</h5>
                        <p class="card-text">{{$comment->comment}}</p>
                        <a href="{{route('comment.delete' ,[ $news ,  $comment] )}}" class="btn btn-danger">Delete comment</a>
                    </div>
                </div>
                <br>
            @empty
                <h1>No comments</h1>
            @endforelse
        </div>
    </article>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('comment.store' , $news)}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <h1 class="text-light">Оставить комментарий</h1>
        </div>
        <div class="form-group input-group-lg">
            <label for="title"><h4 class="text-light">Title</h4></label>
            <input type="text" class="form-control" id="title" name="title" placeholder="title">
        </div>
        <div class="form-group input-group-lg">
            <label for="comment"><h4 class="text-light">Comment</h4></label>
            <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="button" value="Создать">
        </div>
        <br>
    </form>
@endsection
