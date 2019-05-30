@extends('layouts.dashboard') @section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit achievement</h1>

    </div>

    <div class="row">
        <div class="col-md-4">
            <form method="post" action="{{ route('achievements.update', $achievement->id) }}">

                <div class="form-group">
                    <label>English name</label>
                    <input type="text" name="name_en" class="form-control"
                           value="{{ $achievement->name_en }}"> @if ($errors->has('name_en'))
                        <span class="text-danger" role="alert">
                        <strong>{{ $errors->first('name_en') }}</strong>
                    </span> @endif
                </div>

                <div class="form-group">
                    <label>Italian name</label>
                    <input type="text" name="name_it" class="form-control"
                           value="{{ $achievement->name_it }}"> @if ($errors->has('name_it'))
                        <span class="text-danger" role="alert">
                        <strong>{{ $errors->first('name_it') }}</strong>
                    </span> @endif
                </div>

                <div class="form-group">
                    <label>Value</label>
                    <input type="text" name="value" class="form-control"
                           value="{{ $achievement->value }}"> @if ($errors->has('value'))
                        <span class="text-danger" role="alert">
                        <strong>{{ $errors->first('value') }}</strong>
                    </span> @endif
                </div>


                <button class="btn btn-success">Save</button> @method('PUT') {{ csrf_field() }}
            </form>
        </div>
        <div class="col-md-8"></div>
    </div>
@endsection
