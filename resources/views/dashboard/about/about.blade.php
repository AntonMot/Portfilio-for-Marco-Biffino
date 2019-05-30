@extends('layouts.dashboard') @section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Resume</h1>
    </div>

    <div class="row">
        <div class="col-md-12">

            <form method="POST" action={{route( 'aboutheader.update')}}>
                <div class="form-group">
                    <label>English title</label>
                    <input type="text" name="title_en" class="form-control" value="{{ $about->title_en }}">
                </div>
                <div class="form-group">
                    <label>Italian title</label>
                    <input type="text" name="title_it" class="form-control" value="{{ $about->title_it }}">
                </div>
                <div class="form-group">
                    <label>English content</label>
                    <textarea name="content_en" class="form-control">{{ $about->content_en }}</textarea>
                </div>
                <div class="form-group">
                    <label>Italian content</label>
                    <textarea name="content_it" class="form-control">{{ $about->content_it }}</textarea>
                </div>
                <button class="btn btn-success">Save</button> @method('PUT') {{ csrf_field() }}

            </form>
        </div>

    </div>
    <br>
    <a href="{{ route('about.create') }}" class="btn btn-success">
        Add new skill
    </a>

    <br>
    <br>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>ID</th>
                <th>Skill EN</th>
                <th>Skill IT</th>
                <th>Ability</th>
                <th>Descrription EN</th>
                <th>Descrription IT</th>
            </tr>
            </thead>
            <tbody>
            @foreach($skills as $skill)
                <tr>
                    <td>{{ $skill->id }}</td>
                    <td>{{ $skill->skill_en }}</td>
                    <td>{{ $skill->skill_it }}</td>
                    <td>{{ $skill->ability }}</td>
                    <td>{{ $skill->description_en }}</td>
                    <td>{{ $skill->description_it }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('about.edit', $skill->id) }}">
                            edit
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('about.destroy', $skill->id) }}">
                            <button onclick="return confirm('Are You sure?')" class="btn btn-danger">Delete
                            </button> @method('DELETE') {{ csrf_field() }}
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script>
        CKEDITOR.replace('content_en',);
        CKEDITOR.replace('content_it',);
    </script>
@endsection
