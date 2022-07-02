@extends('layout.navbar')

@section('content')
    <div class="container" style="margin-top: 100px;">
        <section class="py-3">
            <div class="row">
                <div class="col-md-12">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h4 text-white">Edit Project</h1>
                    </div>
                    <form action="/project/edit/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-2">
                            <input type="text" name="title" id=" title" class="form-control" placeholder="title"
                                value="{{ $data->title }}">
                            <label for=" title" class="form-label">Title</label><br>
                        </div>
                        <div class="mb-4">
                            <label for="photo" class="form-label text-white">Photo</label><br>
                            <input type="file" name="photo" id="photo" class="form-control" placeholder="photo">
                            {{-- <img src="{{ asset('photo/' . $data->photo) }}" alt="" width="180px" height=""> --}}
                        </div>
                        <div class="form-floating mb-2">
                            <input type="text" name="prosesor" id=" prosesor" class="form-control" placeholder="prosesor"
                                value="{{ $data->prosesor }}">
                            <label for=" prosesor" class="form-label">Prosesor</label><br>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="vga" id="vga" class="form-control" placeholder="vga"
                                value="{{ $data->vga }}">
                            <label for="vga" class="form-label">Vga</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="cooling" id="cooling" class="form-control" placeholder="cooling"
                                value="{{ $data->cooling }}">
                            <label for="cooling" class="form-label">Cooling</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="psu" id="psu" class="form-control" placeholder="psu"
                                value="{{ $data->psu }}">
                            <label for="psu" class="form-label">Psu</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="ram" id="ram" class="form-control" placeholder="ram"
                                value="{{ $data->ram }}">
                            <label for="ram" class="form-label">Ram</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="casing" id="casing" class="form-control" placeholder="casing"
                                value="{{ $data->casing }}">
                            <label for="casing" class="form-label">Casing</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="fan" id="fan" class="form-control" placeholder="fan"
                                value="{{ $data->fan }}">
                            <label for="fan" class="form-label">Fan</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="price" id="price" class="form-control" placeholder="price"
                                value="{{ $data->price }}">
                            <label for="price" class="form-label">Price</label>
                        </div>
                        <input type="submit" value="Edit" name="edit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
