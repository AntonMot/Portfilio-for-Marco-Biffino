@extends('layouts.dashboard') @section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Publications</h1>
    </div>

    <a href="{{ route('publications.create') }}" class="btn btn-success">
        Add
    </a>

    <br>
    <br>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>ID</th>
                <th>English Title</th>
                <th>Italian Title</th>
                <th>English Description</th>
                <th>Italian Description</th>
                <th>Link</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($publications as $publication)
                <tr>
                    <td>{{ $publication->id }}</td>
                    <td>{{ $publication->title_en }}</td>
                    <td>{{ $publication->title_it }}</td>
                    <td>{{ $publication->content_en }}</td>
                    <td>{{ $publication->content_it }}</td>
                    <td>{{ $publication->link }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('publications.edit', $publication->id) }}">
                            edit
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('publications.destroy', $publication->id) }}">
                            <button onclick="return confirm('Are You sure?')" class="btn btn-danger">Delete
                            </button> @method('DELETE') {{ csrf_field() }}
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
