@extends('layouts.dashboard') @section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>

    </div>

    <form method="POST" action="/dashboard/main">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $main->title }}" placeholder="Title">
        </div>
        <div class="form-group">
            <label>Content</label>
            <textarea name="description_en" class="form-control"
                      placeholder="Content">{{ $main->description_en }}</textarea>
        </div>
        <div class="form-group">
            <label>Content</label>
            <textarea name="description_it" class="form-control"
                      placeholder="Content">{{ $main->description_it }}</textarea>
        </div>
        <button class="btn btn-success">Save</button> {{ csrf_field() }}

    </form>



@endsection
