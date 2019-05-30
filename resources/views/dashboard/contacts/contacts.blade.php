@extends('layouts.dashboard') @section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Contacts</h1>

    </div>

    <form action="{{ route('contacts.store') }}" method="post">

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{ $contacts->email }}" placeholder="Email" class="form-control">
        </div>

        <div class="form-group">
            <label>Phone number</label>
            <input type="text" name="tel" value="{{ $contacts->tel }}" placeholder="Tel" class="form-control">
        </div>

        <div class="form-group">
            <label>Facebook</label>
            <input type="text" name="facebook" value="{{ $contacts->facebook }}" placeholder="Title"
                   class="form-control">
        </div>

        <div class="form-group">
            <label>LinkedIn</label>
            <input type="text" name="linkedin" value="{{ $contacts->linkedin }}" placeholder="LinkedIn"
                   class="form-control">
        </div>

        <div class="form-group">
            <label>Instagram</label>
            <input type="text" name="instagram" value="{{ $contacts->instagram }}" placeholder="Instagram"
                   class="form-control">
        </div>

        <div class="form-group">
            <label>Twitter</label>
            <input type="text" name="twitter" value="{{ $contacts->twitter }}" placeholder="Twitter"
                   class="form-control">
        </div>
        <button class='btn btn-success'>Save</button> {{csrf_field()}} @method('PUT')
    </form>
@endsection
