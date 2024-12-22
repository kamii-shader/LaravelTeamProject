@extends('layouts.app')

@section('title', 'Article')

@section('content')
    <div class="container my-5">
        <h1 class="mb-4 text-center">Article List</h1>
        <div class="list-group">
            
            @forelse($list_article as $data)
                @php
                    $link = "article?id=" . $data->uuid;
                @endphp
                <div class="list-group-item list-group-item-action d-flex align-items-start">
                    <img alt="Article Image" src={{$data->images}} class="me-3 rounded" style="width: 150px; height: auto;">
                    <div>
                        <h5 class="mb-1">{{$data->title}}</h5>
                        <p class="text-muted mb-2">By <strong>{{$data->author}}</strong> | Date: {{$data->publish_date}}</p>
                        <p class="mb-2">{{ Str::limit($data->content, 150) }}</p>
                        <a href={{$link}} class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            
            @empty
                <h2 class="text-center mb-4">Nothing Article Founded</h2>
            @endforelse
        </div>
    </div>
@endsection