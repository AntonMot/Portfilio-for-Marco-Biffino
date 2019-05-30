@extends('layouts.dashboard') @section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Skill</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{route('about.store')}}" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Skill EN</label>
                    <input type="text" name="skill_en" class="form-control"
                           placeholder="Skill EN"> @if ($errors->has('skill_en'))
                        <span class="text-danger" role="alert">
                        <strong>{{ $errors->first('skill_en') }}</strong>
                    </span> @endif
                </div>

                <div class="form-group">
                    <label>Skill IT</label>
                    <input type="text" name="skill_it" class="form-control"
                           placeholder="Skill IT"> @if ($errors->has('skill_it'))
                        <span class="text-danger" role="alert">
                        <strong>{{ $errors->first('skill_it') }}</strong>
                    </span> @endif
                </div>

                <div class="form-group">
                    <label>Ability</label>
                    <input type="text" name="ability" class="form-control"
                           placeholder="Ability"> @if ($errors->has('ability'))
                        <span class="text-danger" role="alert">
                        <strong>{{ $errors->first('ability') }}</strong>
                    </span> @endif
                </div>

                <div class="form-group">
                    <label>Description EN</label>
                    <textarea name="description_en" class="form-control" placeholder="description EN"></textarea>
                </div>

                <div class="form-group">
                    <label>Description IT</label>
                    <textarea name="description_it" class="form-control" placeholder="description IT"></textarea>
                </div>
                <button class="btn btn-success">Save</button>

                {{ csrf_field() }}

            </form>
        </div>
        <div class="col-md-8"></div>
    </div>
    <script>
        CKEDITOR.replace('description_en',);
        CKEDITOR.replace('description_it',);
    </script>
@endsection
