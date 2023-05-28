@extends('Backend.layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Contact</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">List</li>
            </ol>
            <form action="{{ url('/contact.index') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($contact) > 0)
                                @foreach ($contact as $contact)
                                    <tr>
                                        <th scope="row">{{ $contact->id }}</th>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->subject }}</td>
                                        <td>{{ $contact->message }}</td>
                                        {{-- <td>
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
                                        </td> --}}
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
