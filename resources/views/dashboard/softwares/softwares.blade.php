@extends('layouts.dashboard') @section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Software reviews</h1>
    </div>

    <a href="{{ route('softwares.create') }}" class="btn btn-success">
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
            @foreach($softwares as $software)
                <tr>
                    <td>{{ $software->id }}</td>
                    <td>{{ $software->title_en }}</td>
                    <td>{{ $software->title_it }}</td>
                    <td>{{ $software->description_en }}</td>
                    <td>{{ $software->description_it }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('softwares.edit', $software->id) }}">
                            edit
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('softwares.destroy', $software->id) }}">
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
