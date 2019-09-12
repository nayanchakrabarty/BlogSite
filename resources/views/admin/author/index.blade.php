@extends('layouts.backend.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $title }}</h4>
                    <a href="{{ route('author.create') }}" class="btn btn-primary">Add New</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($authors as $author)
                            <tr>
                                <td>{{ $serial++ }}</td>
                                <td>{{ $author->name }}</td>
                                <td>{{ $author->email }}</td>
                                <td>{{ $author->phone }}</td>
                                <td>{{ $author->address }}</td>
                                <td>{{ $author->gender }}</td>
                                <td>
                                    <a href="{{ route('author.edit',$author->id) }}">Edit</a>
                                    <form method="post" action="{{ route('author.destroy', $author->id) }}">
                                        @csrf
                                        @method('delete')
                                        <button onclick="return confirm('are you confirm to delete.')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
