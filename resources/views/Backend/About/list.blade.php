@extends('Backend.layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">List</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">List</li>
            </ol>
            <form action="{{ url('/about.index') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Birtday</th>
                                <th scope="col">Website</th>
                                <th scope="col">phone</th>
                                <th scope="col">City</th>
                                <th scope="col">Age</th>
                                <th scope="col">Degree</th>
                                <th scope="col">Email</th>
                                <th scope="col">Freelance</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @if (count($about) > 0)
                                @foreach ($about as $about)
                                    <tr>
                                        <th scope="row">{{ $about->id }}</th>
                                        <td>{{ $about->bd }}</td>
                                        <td>{{ $about->website }}</td>
                                        <td>{{ $about->phone }}</td>
                                        <td>{{ $about->city }}</td>
                                        <td>{{ $about->age }}</td>
                                        <td>{{ $about->degree }}</td>
                                        <td>{{ $about->email }}</td>
                                        <td>{{ $about->freelance }}</td>
                                        <td><img src="{{url('asset/uploads/portfolio',$about->image)}}" style="height:30vh"></td>
                                        <td>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <a href="{{ url('/about.edit',$about->id) }}" class="btn btn-primary">Edit</a>
                                                </div>
                                                <div class="col-sm-2">
                                                    <form action="{{ url('/about.delete',$about->id) }}" method="post">
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
