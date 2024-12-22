@extends('layouts.app')

@section('title', 'Portfolio List')

@section('content')
    <div class="text-center mb-4">
        <h1>Portfolio</h1>
    </div>

    <!-- Center the portfolio container -->
    <div class="d-flex justify-content-center">
        <div class="row" style="max-width: 1400px;"> <!-- Increased max-width to make cards larger -->
            <div class="row">
             @foreach ($portfolios as $portfolio)
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('storage/images/' . $portfolio->image) }}" alt="Card image cap">
                        <div class="card-body">
                                <h5 class="card-title">{{ $portfolio->date }} in {{ $portfolio->location }}</h5>
                                 <p class="card-text">{{ \Illuminate\Support\Str::limit($portfolio->description, 150) }}</p>
                            <a href="{{ route('portfolio.show', $portfolio->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
            @endforeach
            </div>
        </div>
    </div>
    <style>
    .card-img-top{
        height: 200px;
        width: 100%;
    }

    .card{
        margin-top: 10px;
    }
    </style>
@endsection


