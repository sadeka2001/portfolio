@extends('Backend.layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Skills</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Skills</li>
            </ol>
            <form action="{{ url('/skills.store') }}" method="POST">
                @csrf

                <div class="row">

                    <div class="form-group col-md-2 mt-3">
                        <div class="mb-3">
                            <label for="icon">
                                <h5>Tittle</h5>
                            </label>
                            <input type="text" class="form-control" id="tittle" name="tittle">
                        </div>

                        <div class="mb-5">
                            <label for="tittle">
                                <h5>Score</h5>
                            </label>
                            <input type="text" class="form-control" id="score" name="score">

                        </div>

                    </div>

                </div>

                <input type="submit" name="submit" class="btn btn-primary mt-1" />
            </form>
        </div>
    </main>
@endsection
