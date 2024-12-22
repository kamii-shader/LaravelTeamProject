@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <div class="hero">
        <h1>Together We Sustain the Environment,<h1>
        One Action at a Time</h1>
        <p>Join us in our mission to create a cleaner, greener, and healthier planet <p>
            for future generations.</p>
        <a href="/campaign" class="btn1 btn-primary">Our Campaign</a>
    </div>

    <!-- Objectives Section -->
    <div class="objectives container">
        <div class="section-title">Our Objectives</div>
        <div class="row">
          <!-- Mission Section -->
          <div class="col-md-6 d-flex align-items-center">
            <img src="{{ asset('images/objective.png') }}" alt="Mission Icon" style="width: 150px; height: 150px; margin-right: 15px;" />
            <div>
              <h4>Mission</h4>
              <p>Educate and empower communities to adopt eco-friendly habits, reduce waste, and promote sustainable practices for a healthier environment.</p>
            </div>
          </div>
          <!-- Vision Section -->
          <div class="col-md-6 d-flex align-items-center">
            <img src="{{ asset('images/light-bulb.png') }}" alt="Vision Icon" style="width: 150px; height: 150px; margin-right: 15px;" />
            <div>
              <h4>Vision</h4>
              <p>Build a world where environmental preservation is a shared priority, ensuring clean ecosystems and a safe planet for future generations.
              </p>
            </div>
          </div>
        </div>
      </div>

    <!-- Highlight Section -->
    <div class="highlight">
        <h2>In the Past 2 Years</h2>
        <p>We have successfully raised awareness and implemented solutions to reduce waste, <p>
            promote recycling, and foster active participation in environmental conservation.</p>
        <a href="/works" class="btn2 btn-success">Recent Works</a>
    </div>

    <!-- Campaign Statistics Section -->
    <div class="cta">
        <h3>We Reached Thousands and Raised Awareness Globally!</h3>
        <p>Click below to learn more about our ongoing efforts and impactful campaigns.</p>
        <a href="/about" class="btn3 btn-warning">About Us</a>
    </div>

    <!-- Call-to-Action Section -->
    <div class="cta1">
        <h3>Interested? Let’s Take Action Together!</h3>
        <p>Your contribution can drive change, inspire others, and help preserve the planet.</p>
        <a href="/donation" class="btn4 btn-danger">Donate Now</a>
    </div>
@endsection
