@extends('Backend.layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ url('/main') }}">Main</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <form action="{{url('/update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="form-group col-md-3 mt-3">
                    <h4>Background image</h4>
                    <div class="form-group col-md-4 mt-3">
                        <img style="height:30vh" src="{{ url($main->bg_image) }}" alt="">
                        <input class="mt-3" type="file" id="bg-image" name="bg-image">
                    </div>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="tittle">
                            <h5>Tittle</h5>
                        </label>
                        <input type="text" class="form-control" id="tittle" name="tittle"
                            value="{{ $main->tittle }}">
                    </div>

                    <div class="mb-5">
                        <label for="tittle">
                            <h5>Sub Tittle</h5>
                        </label>
                        <input type="text" class="form-control" id="sub_tittle" name="sub_tittle"
                            value="{{ $main->sub_tittle }}">
                    </div>
                </div>

            </div>

            <input type="submit" name="submit"  class="btn btn-primary mt-3"/>
        </form>
        </div>
    </main>
@endsection
