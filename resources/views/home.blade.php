@extends('layout')

@section('content')
    <h1>Most viewed articles</h1>
    <ul>
        @foreach ($articles as $article)
            <li><a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a> <i>views : {{$article->views_counter}}</i> </li>
        @endforeach
    </ul>
@endsection
