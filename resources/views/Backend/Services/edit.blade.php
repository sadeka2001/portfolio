@extends('Backend.layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
            <form action="{{ url('/services.update',$services->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="icon">
                                <h5>icon</h5>
                            </label>
                            <input type="text" class="form-control" id="icon" name="icon" value="{{ $services->icon }}">
                        </div>

                        <div class="mb-5">
                            <label for="tittle">
                                <h5>Tittle</h5>
                            </label>
                            <input type="text" class="form-control" id="tittle" name="tittle" value="{{ $services->tittle }}">

                        </div>
                        <div class="mb-5">
                            <label for="description">
                                <h4>Description</h4>
                            </label>
                            <textarea type="text" class="form-control" name="description" id="description">{{$services->description}}</textarea>
                        </div>

                    </div>

                </div>

                <input type="submit" name="submit" class="btn btn-primary mt-3" />
            </form>
        </div>
    </main>
@endsection
