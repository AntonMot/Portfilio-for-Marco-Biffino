@extends('layouts.dashboard') @section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Calculator reviews</h1>
    </div>

    <a href="{{ route('calculators.create') }}" class="btn btn-success">
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
            @foreach($calculators as $calculator)
                <tr>
                    <td>{{ $calculator->id }}</td>
                    <td>{{ $calculator->title_en }}</td>
                    <td>{{ $calculator->title_it }}</td>
                    <td>{{ $calculator->description_en }}</td>
                    <td>{{ $calculator->description_it }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('calculators.edit', $calculator->id) }}">
                            edit
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('calculators.destroy', $calculator->id) }}">
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
