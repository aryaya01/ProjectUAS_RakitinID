@extends('layout.navbar')

@section('content')
    <div class="container mt-5">
        <br>
        <div class="container mt-5" style="text-align: center">
            <h2 class="uppercase tracking-wider text-lg font-bold" id="popular" style="color: #ffffff;">All Of My Project
            </h2>
            <div class="row mt-4">
                @forelse ($projects as $now)
                    <div class="col-6 col-md-2 col-lg-3 mb-5">
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
        </div>
    </div>
@endsection
