@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1 class="mb-4">{{ $article->title }}</h1>
    <p class="text-muted">By {{ $article->author }} | Published on {{ $article->publish_date }}</p>

    @if ($article->images)
        <img src="{{ $article->images }}" alt="Image for {{ $article->title }}" class="img-fluid rounded mb-3" style="max-height: 400px;">
    @endif

    <div class="content mt-4">
        <p>{!! nl2br(e($article->content)) !!}</p> <!-- Isi artikel dengan format HTML -->
    </div>

    <a href="/campaign" class="btn btn-secondary mt-4">Back to Articles List</a>
    <br><br>
@endsection
