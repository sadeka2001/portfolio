@extends('Backend.layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">List</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">List</li>
            </ol>
            <form action="{{ url('/portfolio.index') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category</th>
                                <th scope="col">Date</th>
                                <th scope="col">Url</th>
                                <th scope="col">Tittle</th>
                                <th scope="col">Description</th>
                                <th scope="col">Big Image</th>
                                <th scope="col">small Image</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @if (count( $portfolios) > 0)
                                @foreach ( $portfolios as  $portfolio)
                                    <tr>
                                        <th scope="row">{{ $portfolio->id }}</th>
                                        <td>{{ $portfolio->category }}</td>
                                        <td>{{ $portfolio->date }}</td>
                                        <td>{{ $portfolio->url }}</td>
                                        <td>{{ $portfolio->tittle }}</td>
                                        <td>{{ $portfolio->description }}</td>
                                        <td> <img src="{{asset('uploads/portfolio_project/'.$portfolio->bg_image)}}" style="height:100px"></td>


                                        <td><img src="{{asset('uploads/portfolio_project/'.$portfolio->sm_image)}}" style="height:100px"></td>
                                        <td>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <a href="{{ url('/portfolio.edit',$portfolio->id) }}" class="btn btn-primary">Edit</a>
                                                </div>
                                                <div class="col-sm-2">
                                                    <form action="{{ url('/portfolio.delete',$portfolio->id) }}" method="post">
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
