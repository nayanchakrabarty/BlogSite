@extends('layouts.backend.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $title }}</h4>
                    <a href="{{ route('category.create') }}" class="btn btn-primary">Add New</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Details</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $serial++ }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->details }}</td>
                                    <td>
                                        <a href="{{ route('category.edit',$category->id) }}">Edit</a>
                                        <form method="post" action="{{ route('category.destroy', $category->id) }}">
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
