@extends('layouts.layout')
@section('header')
    @parent
    @endsection
@section('content')
    <form action="{{route('news.update' , $news)}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="title"value="{{$news->title}}">
        </div>
        <div class="form-group">
            <label for="title">img</label>
            <input type="text" class="form-control" id="img" name="img" placeholder="img"value="{{$news->img}}">
        </div>
        <div class="form-group">
            <label for="news">News</label>
            <textarea class="form-control" id="news" name="news" rows="3">{{$news->news}}</textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="button" value="Update">
        </div>
    </form>
    @endsection