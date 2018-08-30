@extends('layouts.layout')
@section('header')
    @parent
@endsection
@section('content')
    @forelse($comments as $comment)
        <h1>{{$comment->title}}</h1>
        <h3>{{$comment->comment}}</h3>
    @empty
        <h1>no comment</h1>
    @endforelse
@endsection