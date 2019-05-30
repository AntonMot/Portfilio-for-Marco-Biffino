@extends('layouts.dashboard') @section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add software</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{route('softwares.store')}}" enctype="multipart/form-data">

                <div class="form-group">
                    <label>English Title</label>
                    <input type="text" name="title_en" class="form-control"
                           placeholder="English Title"> @if ($errors->has('title_en'))
                        <span class="text-danger" role="alert">
                        <strong>{{ $errors->first('title_en') }}</strong>
                    </span> @endif
                </div>

                <div class="form-group">
                    <label>Italian Title</label>
                    <input type="text" name="title_it" class="form-control"
                           placeholder="Italian Title"> @if ($errors->has('title_it'))
                        <span class="text-danger" role="alert">
                        <strong>{{ $errors->first('title_it') }}</strong>
                    </span> @endif
                </div>

                <div class="form-group">
                    <label>Link</label>
                    <input type="text" name="link" class="form-control" placeholder="link">
                </div>

                <div class="form-group">
                    <label>Preview</label>
                    <input type="file" name="preview" class="form-control"
                           placeholder="preview"> @if ($errors->has('preview'))
                        <span class="text-danger" role="alert">
                        <strong>{{ $errors->first('preview') }}</strong>
                    </span> @endif
                </div>

                <div class="form-group">
                    <label>English Discription</label>
                    <textarea name="description_en" class="form-control" placeholder="English description"></textarea>
                </div>

                <div class="form-group">
                    <label>Italian Discription</label>
                    <textarea name="description_it" class="form-control" placeholder="Italian description"></textarea>
                </div>

                <button class="btn btn-success">Save</button> {{ csrf_field() }}

            </form>
        </div>
        <div class="col-md-8"></div>
    </div>
@endsection
