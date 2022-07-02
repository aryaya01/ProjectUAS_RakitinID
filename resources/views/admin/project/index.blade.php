@extends('layout.navbaradmin')

@section('content')
    <div class="container" style="margin-top: 100px;">
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
            </symbol>
        </svg>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2 text-white">Project</h1>
        </div>
        <a href="/project/create" type="button" class="btn btn-success mb-3">Tambah +</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <div>
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
        <table id="example" class="table table-striped dt-responsive nowrap text-white mb-5" style="width:100%;">
            <thead class="text-white">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Prosesor</th>
                    <th scope="col">VGA</th>
                    <th scope="col">Cooling</th>
                    <th scope="col">PSU</th>
                    <th scope="col">RAM</th>
                    <th scope="col">Casing</th>
                    <th scope="col">FAN</th>
                    <th scope="col">Pricee</th>
                    <th scope="col">Updated</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="align-middle text-white">
                @php $no=1; @endphp
                @foreach ($data as $row)
                    <tr class="text-white">
                        <th>{{ $no++ }}</th>
                        <td>{{ $row->title }}</td>
                        <td>
                            <img src="{{ asset('photo/' . $row->photo) }}" alt="" width="100px">
                        </td>
                        <td>{{ $row->prosesor }}</td>
                        <td>{{ $row->vga }}</td>
                        <td>{{ $row->cooling }}</td>
                        <td>{{ $row->psu }}</td>
                        <td>{{ $row->ram }}</td>
                        <td>{{ $row->casing }}</td>
                        <td>{{ $row->fan }}</td>
                        <td>{{ $row->price }}</td>
                        <td>{{ $row->updated_at->diffForHumans() }}</td>
                        <td>
                            <div class="btn-group-vertica" role="group" aria-label="Basic mixed styles example">
                                <a href="/project/edit/{{ $row->id }}" type="button" class="btn btn-warning">Edit</a>
                                <a href="/project/delete/{{ $row->id }}" type="button"
                                    class="btn btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br><br>
    </div>
@endsection
