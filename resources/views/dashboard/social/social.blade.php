@extends('layouts.dashboard') @section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Social policy</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action={{route( 'social.store')}}>
                <div class="form-group">
                    <label>English title</label>
                    <input type="text" name="title_en" class="form-control" value="{{ $social->title_en }}"
                           placeholder="Title">
                </div>
                <div class="form-group">
                    <label>Italian title</label>
                    <input type="text" name="title_it" class="form-control" value="{{ $social->title_it }}"
                           placeholder="Title">
                </div>
                <div class="form-group">
                    <label>English content</label>
                    <textarea name="content_en" class="form-control"
                              placeholder="Description">{{ $social->content_en }}</textarea>
                </div>
                <div class="form-group">
                    <label>Italian content</label>
                    <textarea name="content_it" class="form-control"
                              placeholder="Description">{{ $social->content_it }}</textarea>
                </div>
                <button class="btn btn-success">Save</button> @method('PUT') {{ csrf_field() }}

            </form>
        </div>
        <div class="col-md-8"></div>
    </div>

    <script>
        CKEDITOR.replace('content_en',);
        CKEDITOR.replace('content_it',);
    </script>



@endsection
