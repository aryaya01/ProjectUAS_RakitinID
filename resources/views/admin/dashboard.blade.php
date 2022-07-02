@extends('layout.navbaradmin')

@section('content')
    <div class="container" style="margin-top: 100px;">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom text-white">
            <h1 class="h2">Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card text-white" style="background-color: rgb(255, 29, 29);">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8 ">
                                <h1>Project</h1>
                                <h4>{{ $project }}</h4>
                                <a href="/project" style="text-decoration: none; color:#ffffff;">See More</a>
                            </div>
                            <div class="col-4">
                                <i class="bi bi-pc-display" style="font-size:70px; color:#001d3d;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <table id="example" class="table table-striped dt-responsive nowrap text-white" style="width:100%">
                    <thead class="text-white">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle text-white">
                        @php $no=1; @endphp
                        @foreach ($dataproject as $row)
                            <tr class="text-white">
                                <th>{{ $no++ }}</th>
                                <td>{{ $row->title }}</td>
                                <td>
                                    <img src="{{ asset('photo/' . $row->photo) }}" alt="" width="100px">
                                </td>
                                <td>{{ $row->price }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
