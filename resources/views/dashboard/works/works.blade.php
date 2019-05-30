@extends('layouts.dashboard') @section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Book reviews</h1>
    </div>

    <a href="{{ route('works.create') }}" class="btn btn-success">
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
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($works as $work)
                <tr>
                    <td>{{ $work->id }}</td>
                    <td>{{ $work->title_en }}</td>
                    <td>{{ $work->title_it }}</td>
                    <td>{{ $work->description_en }}</td>
                    <td>{{ $work->description_it }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('works.edit', $work->id) }}">
                            edit
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('works.destroy', $work->id) }}">
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
