@extends('layouts.dashboard') @section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit title and content</h1>

    </div>

    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{ route('about.update', $skill->id) }}" enctype="multipart/form-data">

                <div class="form-group">
                    <label>English title</label>
                    <input type="text" name="title_en" class="form-control" value="{{ $about->title_en }}"
                           disabled="disabled">
                </div>
                <div class="form-group">
                    <label>Italian title</label>
                    <input type="text" name="title_it" class="form-control" value="{{ $about->title_it }}"
                           disabled="disabled">
                </div>
                <div class="form-group">
                    <label>English content</label>
                    <textarea name="content_en" class="form-control"
                              disabled="disabled">{{ $about->content_en }}</textarea>
                </div>
                <div class="form-group">
                    <label>Italian content</label>
                    <textarea name="content_it" class="form-control"
                              disabled="disabled">{{ $about->content_it }}</textarea>
                </div>

                <button class="btn btn-success">Save</button>
                @method('PUT')

                {{ csrf_field() }}
            </form>
        </div>
        <div class="col-md-8"></div>
    </div>
    <script>
        CKEDITOR.replace('content_en',);
        CKEDITOR.replace('content_it',);
    </script>
@endsection
