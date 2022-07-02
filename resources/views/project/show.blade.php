@extends('layout.navbar')

@section('content')
    <div class="container-fluid" id="bgproject"
        style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.626), rgba(12, 0, 9, 0.911)), url({{ asset('photo/' . $project->photo) }}); background-size:cover;">
        <div class="container">
            <div class="card" style="width: fit-content; border:0; background-color:transparent;">
                <div class="row" style="margin-top:150px;">
                    <div class="col mb-5">
                        <div class="card p-1 mt-5" style="background-color: black">
                            <img src="{{ asset('photo/' . $project->photo) }}" alt="poster"
                                class="hover:opacity-75 transition ease-in-out duration-150" id="box-shadow"
                                style="width: 350px; height: 430px; box-shadow: 0 4px 8px 0 rgba(255, 255, 255, 0.2), 0 6px 50px 0 rgba(255, 255, 255, 0.19);">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-body text-white mb-5 mt-5">
                            <h1 style="font-weight: 600">{{ $project->title }}</h1>
                            <hr>
                            <h4 style="font-weight: 300">Prosesor : {{ $project->prosesor }}</h4>
                            <h4 style="font-weight: 300">VGA : {{ $project->vga }}</h4>
                            <h4 style="font-weight: 300">RAM : {{ $project->ram }}</h4>
                            <h4 style="font-weight: 300">Cooling : {{ $project->cooling }}</h4>
                            <h4 style="font-weight: 300">PSU : {{ $project->psu }}</h4>
                            <h4 style="font-weight: 300">Casing : {{ $project->casing }}</h4>
                            <h4 style="font-weight: 300">FAN : {{ $project->fan }}</h4>
                            <br>
                            <h3>Price : {{ $project->price }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
