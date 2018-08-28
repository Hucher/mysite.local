@extends('layouts.layout')
@section('header')
    @parent
@endsection
@section('content')
    @forelse( $article as $news)
        <article id="post-19"
                 class="post-19 post type-post status-publish format-standard has-post-thumbnail hentry category-typography tag-html-markup">

            <header class="clearfix entry-header">
                <span class="comments-link"> <a
                            href="#">{{$news->id}}</a></span>

                <h2 class="entry-title"><a href="https://modernwpthemes.com/demo/aocean/text-formatting/"
                                           rel="bookmark">{{$news->title}}</a></h2>


                <div class="entry-meta">
                    <span class="posted-on">Posted on <a href="#"
                                                         title="5:52 pm" rel="bookmark"><time
                                    class="entry-date published"
                                    datetime="2014-04-24T17:52:23+00:00">April 24, 2014</time></a></span><span
                            class="byline"> by <span class="author vcard"><a class="url fn n"
                                                                             href="#"
                                                                             title="View all posts by aocean"></a></span></span>
                </div>

            </header>


            <div class="entry-thumb-full">
                <a href="#" title="Text Formatting">
                    <img width="650" height="300"
                         src="{{$news->img}}"
                         class="attachment-thumb-full size-thumb-full wp-post-image" alt="Text Formatting"/>
                </a>
            </div>
            <p>{{mb_substr($news->news , 0, 50)}}<p>
            <div class="container">
                <div class="row">
                    <div class="entry-summary">
                        <a href="{{route('news.more' , $news)}}" class="button">More</a>
                    </div>
                    <div class="entry-summary">
                        <a href="{{route('news.show' ,$news)}}" class="button">Update</a>
                    </div>
                    <div class="entry-summary">
                        <a href="{{route('news.delete' , $news)}}" class="button">Delete</a>
                    </div>
                </div>
            </div>
        </article>
    @empty
        <h1>Нет новостей</h1>
    @endforelse
    {{--<nav role="navigation" id="nav-below" class="paging-navigation">--}}
        {{--<h1 class="screen-reader-text">Post navigation</h1>--}}
        {{--<div class='wp-pagenavi'>--}}
            {{--<span class='current'>1</span>--}}
            {{--<a class="page larger" href="#">2</a>--}}
            {{--<a class="nextpostslink" rel="next" href="#">&raquo;</a>--}}
        {{--</div>--}}
    {{--</nav><!-- #nav-below -->--}}

    {{ $article->links() }}

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('news.create')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="title">
        </div>
        <div class="form-group">
            <label for="title">img</label>
            <input type="text" class="form-control" id="img" name="img" placeholder="img">
        </div>
        <div class="form-group">
            <label for="news">News</label>
            <textarea class="form-control" id="news" name="news" rows="3"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="button" value="Создать">
        </div>
        <br>
    </form>
@endsection
