@extends('Backend.layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">List</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">List</li>
            </ol>
            <form action="{{ url('/services.index') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">icon</th>
                                <th scope="col">Tittle</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($services) > 0)
                                @foreach ($services as $service)
                                    <tr>
                                        <th scope="row">{{ $service->id }}</th>
                                        <td>{{ $service->icon }}</td>
                                        <td>{{ $service->tittle }}</td>
                                        <td>{{ $service->description }}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <a href="{{ url('/services.edit', $service->id) }}"
                                                        class="btn btn-primary">Edit</a>
                                                </div>
                                                <div class="col-sm-2">
                                                    <form action="{{ url('/services.delete', $service->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="submit" name="submit" value="delete"
                                                            class="btn btn-danger">
                                                    </form>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif



                        </tbody>
                    </table>

                </div>


            </form>
        </div>
    </main>
@endsection
