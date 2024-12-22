@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="container">
    <div class="section d-flex align-items-center my-5">
        <div class="section-content w-50 pe-4">
            <h1>WHAT’S OUR STORY?</h1>
            <p>Life on Land focuses on protecting, restoring, and promoting sustainable use of terrestrial ecosystems, sustainably managing forests, combating desertification, and halting biodiversity loss. This goal highlights the urgent need to conserve our natural habitats for a sustainable future.</p>
        </div>
        <div class="w-50">
            <img src="{{ asset('images/About1.png') }}" alt="Story Image" class="img-fluid">
        </div>
    </div>

    <div class="section d-flex align-items-center flex-row-reverse my-5">
        <div class="section-content w-50 ps-4">
            <h1>WHAT WE DO?</h1>
            <p>Our initiatives focus on reforestation, habitat conservation, and supporting local communities to adopt sustainable agricultural practices. We work alongside global partners to protect endangered species, restore degraded land, and combat desertification.</p>
        </div>
        <div class="w-50">
            <img src="{{ asset('images/image.jpg') }}" alt="Donate Image" class="img-fluid">
        </div>
    </div>

    <div class="section d-flex align-items-center my-5">
        <div class="section-content w-50 pe-4">
            <h1>WHAT ARE THE BENEFIT?</h1>
            <p>By participating in our programs, you help preserve biodiversity, reduce carbon emissions, and protect vital ecosystems. Every effort contributes to creating a sustainable future for generations to come, ensuring life on land thrives.</p>
        </div>
        <div class="w-50">
            <img src="{{ asset('images/About3.png') }}" alt="Thumbs Up Image" class="img-fluid">
        </div>
    </div>
</div>

<style>
    .benefit-icon img {
       width: 80px;
    }
    img.mb-n2 {
       margin-bottom: -10px;
    }
</style>

@endsection