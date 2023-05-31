@extends('Backend.layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Protfolio</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Protfolio</li>
            </ol>
            <form action="{{ url('/portfolio.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="icon">
                                <h5>category</h5>
                            </label>
                            <input type="text" class="form-control" id="category" name="category">
                        </div>

                        <div class="mb-3">
                            <label for="tittle">
                                <h5>date</h5>
                            </label>
                            <input type="text" class="form-control" id="date" name="date">
                         </div>

                         <div class="mb-3">
                            <label for="tittle">
                                <h5>url</h5>
                            </label>
                            <input type="text" class="form-control" id="url" name="url">
                         </div>
                         <div class="mb-3">
                            <label for="tittle">
                                <h5>Tittle</h5>
                            </label>
                            <input type="text" class="form-control" id="tittle" name="tittle">
                         </div>
                         <div class="mb-3">
                            <label for="Description">
                                <h5>Description</h5>
                            </label>
                            <input type="text" class="form-control" id="description" name="description">
                         </div>

                         <div class="form-group col-md-3 mt-3">
                            <h4>Big image</h4>
                            <div class="form-group col-md-4 mt-3">
                                <img style="height:30px" src="{{ asset('uploads/portfolio_project') }}" alt="">
                                <input class="mt-3" type="file" id="bg_image" name="bg_image">
                            </div>
                        </div>

                        <div class="form-group col-md-3 mt-3">
                            <h4>small image</h4>
                            <div class="form-group col-md-4 mt-3">
                                <img style="height:30px" src="{{asset('uploads/portfolio_project')  }}" alt="">
                                <input class="mt-3" type="file" id="sm_image" name="sm_image">
                            </div>
                        </div>

                    </div>

                </div>

                <input type="submit" name="submit" class="btn btn-primary mt-3" />
            </form>
        </div>
    </main>
@endsection
