@extends('Backend.layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">List</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">List</li>
            </ol>
            <form action="{{ url('/skills.index') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>

                                <th scope="col">Tittle</th>
                                <th scope="col">Score</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($skills) > 0)
                                @foreach ($skills as $skills)
                                    <tr>
                                        <th scope="row">{{ $skills->id }}</th>

                                        <td>{{ $skills->tittle }}</td>
                                        <td>{{ $skills->score}}</td>

                                        <td>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <a href="{{ url('/skills.edit',$skills->id) }}"
                                                        class="btn btn-primary">Edit</a>
                                                </div>
                                                <div class="col-sm-2">
                                                    <form action="{{ url('/skills.delete',$skills->id)}}"
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
