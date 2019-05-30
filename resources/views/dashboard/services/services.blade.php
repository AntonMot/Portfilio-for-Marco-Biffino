@extends('layouts.dashboard') @section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Services</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action={{route( 'serviceheader.update')}}>
                <div class="form-group">
                    <label>English title</label>
                    <input type="text" name="title_en" class="form-control" value="{{ $serviceHeader->title_en }}"
                           placeholder="Title">
                </div>
                <div class="form-group">
                    <label>Italian title</label>
                    <input type="text" name="title_it" class="form-control" value="{{ $serviceHeader->title_it }}"
                           placeholder="Title">
                </div>
                <div class="form-group">
                    <label>English content</label>
                    <textarea name="description_en" class="form-control"
                              placeholder="Description">{{ $serviceHeader->description_en }}</textarea>
                </div>
                <div class="form-group">
                    <label>Italian content</label>
                    <textarea name="description_it" class="form-control"
                              placeholder="Description">{{ $serviceHeader->description_it }}</textarea>
                </div>
                <button class="btn btn-success">Save</button> @method('PUT') {{ csrf_field() }}

            </form>
        </div>
        <div class="col-md-8"></div>
    </div>

    <script>
        CKEDITOR.replace('description_en',);
        CKEDITOR.replace('description_it',);
    </script>



@endsection
