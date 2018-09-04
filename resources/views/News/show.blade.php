@extends('layouts.layout')
@section('header')
    @parent
    @endsection
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('news.update' , $news)}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <h1 class="text-light">Форма редактирования новости</h1>
        </div>
        <div class="form-group input-group-lg">
            <label for="title"><h4 class="text-light">Title</h4></label>
            <input type="text" class="form-control" id="title" name="title" placeholder="title" value="{{$news->title}}">
        </div>
        <div class="form-group input-group-lg">
            <label for="img"><h4 class="text-light">Img</h4></label>
            <input type="text" class="form-control" id="img" name="img" placeholder="img" value="{{$news->img}}">
        </div>
        <div class="form-grou input-group-lg">
            <label for="news"><h4 class="text-light">News</h4></label>
            <textarea class="form-control" id="news" name="news" rows="3">{{$news->news}}</textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="button" value="Изменить">
        </div>
        <br>
    </form>
    @endsection