@extends('layouts.dashboard') @section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit publication</h1>

    </div>

    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{ route('publications.update', $publication->id) }}"
                  enctype="multipart/form-data">

                <div class="form-group">
                    <label>English Title</label>
                    <input type="text" name="title_en" class="form-control" placeholder="English Title"
                           value="{{ $publication->title_en }}"> @if ($errors->has('title_en'))
                        <span class="text-danger" role="alert">
                        <strong>{{ $errors->first('title_en') }}</strong>
                    </span> @endif
                </div>

                <div class="form-group">
                    <label>Italian Title</label>
                    <input type="text" name="title_it" class="form-control" placeholder="Italian Title"
                           value="{{ $publication->title_it }}"> @if ($errors->has('title_it'))
                        <span class="text-danger" role="alert">
                        <strong>{{ $errors->first('title_it') }}</strong>
                    </span> @endif
                </div>

                <div class="form-group">
                    <label>Link</label>
                    <input type="text" name="link" class="form-control" placeholder="Link"
                           value="{{ $publication->link }}">
                </div>

                <div class="form-group">
                    <label>English Description</label>
                    <textarea name="content_en" class="form-control" placeholder="English Description">{{ $publication->content_en }}
			    </textarea>
                </div>

                <div class="form-group">
                    <label>Italian Description</label>
                    <textarea name="content_it" class="form-control" placeholder="Italian Description">{{ $publication->content_it }}
			    </textarea>
                </div>

                <button class="btn btn-success">Save</button> @method('PUT') {{ csrf_field() }}
            </form>
        </div>
        <div class="col-md-8"></div>
    </div>
@endsection
