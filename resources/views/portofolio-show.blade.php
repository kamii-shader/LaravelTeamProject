@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $portfolio->title }}</h1>
    <img src="{{ asset('storage/images/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" class="img-fluid mb-4">
    <p>{{ $portfolio->description }}</p>
    <p><strong>Date:</strong> {{ $portfolio->date }}</p>
    <p><strong>Location:</strong> {{ $portfolio->location }}</p>
    <a href="{{ route('portfolio.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
