@extends('layout')

@section('content')
    <h1>Enchérir sur l'article {{$article->title}}</h1>
    <form method="POST" action="{{ route('articles.auctions.store', $article) }}">
        @csrf
        <label for="amount">Montant en CHF</label>
        <input type="number" name="amount">
        @error('amount')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="email">email</label>
        <input type="email" name="email">
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="submit" value="Enchérir">
    </form>
@endsection
