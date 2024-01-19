@extends('layout')

@section('content')
    <h1>Articles les plus vus</h1>
    <ul>
        @foreach ($articles as $article)
            <li><a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a> <i>vues : {{$article->views_counter}}</i> </li>
        @endforeach
    </ul>
@endsection
