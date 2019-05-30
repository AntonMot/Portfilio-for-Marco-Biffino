@extends('layouts.dashboard') @section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Achievements</h1>
    </div>

    <a href="{{ route('achievements.create') }}" class="btn btn-success">
        Add
    </a>

    <br>
    <br>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>ID</th>
                <th>English name</th>
                <th>Italian name</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            @foreach($achievements as $achievement)
                <tr>
                    <td>{{ $achievement->id }}</td>
                    <td>{{ $achievement->name_en }}</td>
                    <td>{{ $achievement->name_it }}</td>
                    <td>{{ $achievement->value }}</td>

                    <td>
                        <a class="btn btn-success" href="{{ route('achievements.edit', $achievement->id) }}">
                            edit
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('achievements.destroy', $achievement->id) }}">
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
