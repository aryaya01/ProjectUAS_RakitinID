@extends('layout.navbar')

@section('content')
    {{-- carousel --}}
    <div id="carouselExampleControls" class="carousel slide" style="top: 0" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{!! asset('asset/img/pg1.png') !!}" class="cr d-block w-100" alt="">
                <div class="carousel-caption d-none d-md-block bg-transparent">
                    <p class="bg-transparent fs-3 fw-light">Lets Build!<br> And Play Together</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{!! asset('asset/img/pg2.png') !!}" class="cr d-block w-100" alt="">
                <div class="carousel-caption d-none d-md-block bg-transparent">
                    <p class="bg-transparent fs-3 fw-light">Lets Build!<br> And Play Together</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{!! asset('asset/img/pg3.png') !!}" class="cr d-block w-100" alt="">
                <div class="carousel-caption d-none d-md-block bg-transparent">
                    <p class="bg-transparent fs-3 fw-light">Lets Build!<br> And Play Together</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-transparent" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-transparent" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- carousel --}}
    <div class="container mt-5" style="text-align: center">
        <h2 class="uppercase tracking-wider text-lg font-bold" id="popular" style="color: #ffffff;">My Top Project
        </h2>
        <div class="row mt-3">
            @forelse ($data->take(3) as $now)
                <div class="col-12 col-md-3 col-lg-4 mb-5">
                    <div class="container" id="poto">
                        <a href="{{ route('project.show', ['project' => $now->title]) }}">
                            <img src="{{ asset('photo/' . $now->photo) }}" alt="poster" class="image"
                                style="width: 250px; height: 330px;">
                        </a>
                    </div>
                </div>
            @empty
                <h3>We Have 0 Project Yet</h3>
            @endforelse
        </div>
        <div class="row mt-5 mb-5 text-white">
            <h1>Video PC Build</h1>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/ISOctDT8LJU?autoplay=1&mute=1" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>

    </div>
@endsection
