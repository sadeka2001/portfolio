@extends('Backend.layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Contact</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Contact</li>
            </ol>
            <form action="{{ url('/contact.store') }}" method="POST">
                @csrf

                <div class="row">

                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="name">
                                <h5>Name</h5>
                            </label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>

                        <div class="mb-5">
                            <label for="email">
                                <h5>Email</h5>
                            </label>
                            <input type="text" class="form-control" id="email" name="email">

                        </div>
                        <div class="mb-5">
                            <label for="subject">
                                <h4>Subject</h4>
                            </label>
                            <textarea type="text" class="form-control" name="subject" id="subject" ></textarea>
                        </div>

                        <div class="mb-5">
                            <label for="message">
                                <h4>Message</h4>
                            </label>
                            <textarea type="text" class="form-control" name="message" id="message" ></textarea>
                        </div>

                    </div>

                </div>

                <input type="submit" name="submit" class="btn btn-primary mt-3" />
            </form>
        </div>
    </main>
@endsection
