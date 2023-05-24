@extends('Backend.layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">About</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">About</li>
            </ol>
            <form action="{{ url('/about.update',$about->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="icon">
                                <h5>birthday</h5>
                            </label>
                            <input type="text" class="form-control" id="bd" name="bd" value="{{$about->bd}}">
                        </div>

                        <div class="mb-3">
                            <label for="tittle">
                                <h5>website</h5>
                            </label>
                            <input type="text" class="form-control" id="website" name="website" value="{{$about->website}}">
                         </div>

                         <div class="mb-3">
                            <label for="tittle">
                                <h5>phone</h5>
                            </label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{$about->phone}}">
                         </div>
                         <div class="mb-3">
                            <label for="tittle">
                                <h5>City</h5>
                            </label>
                            <input type="text" class="form-control" id="city" name="city" value="{{$about->city}}">
                         </div>
                         <div class="mb-3">
                            <label for="tittle">
                                <h5>Age</h5>
                            </label>
                            <input type="text" class="form-control" id="age" name="age" value="{{$about->age}}">
                         </div>
                         <div class="mb-3">
                            <label for="tittle">
                                <h5>Degree</h5>
                            </label>
                            <input type="text" class="form-control" id="degree" name="degree" value="{{$about->degree}}">
                         </div>
                         <div class="mb-3">
                            <label for="tittle">
                                <h5>Email</h5>
                            </label>
                            <input type="text" class="form-control" id="email" name="email" value="{{$about->email}}">
                         </div>
                         <div class="mb-3">
                            <label for="tittle">
                                <h5>Freelance</h5>
                            </label>
                            <input type="text" class="form-control" id="freelance" name="freelance" value="{{$about->freelance}}">
                         </div>

                         <div class="form-group col-md-3 mt-3">
                            <h4>image</h4>
                            <div class="form-group col-md-4 mt-3">
                                <img style="height:30vh" src="" alt="">
                                <input class="mt-3" type="file" id="image" name="image" value="{{$about->image}}">
                            </div>
                        </div>

                    </div>

                </div>

                <input type="submit" name="submit" class="btn btn-primary mt-3" />
            </form>
        </div>
    </main>
@endsection