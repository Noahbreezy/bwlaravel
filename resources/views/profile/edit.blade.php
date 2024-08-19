@extends('layouts.app')

@section('content')
<div class="container">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Profile</h5>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('profile.update', $user->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                    </div>

                    <div class="form-group">
                        <label for="avatar">Avatar</label>
                        <input type="file" class="form-control-file" id="avatar" name="avatar">
                    </div>

                    <div class="form-group">
                        <label for="birthday">Birthday</label>
                        <input type="date" class="form-control" id="birthday" name="birthday" value="{{ $user->birthday }}">
                    </div>

                    <div class="form-group">
                        <label for="aboutMe">About Me</label>
                        <textarea class="form-control" id="aboutMe" name="aboutMe">{{ $user->aboutMe }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </form>
            </div>
            <div class="modal-footer">
                <a href="{{ route('profile.showDeleteForm', $user->id) }}" class="btn btn-danger">Delete Account</a>
            </div>
        </div>
    </div>
</div>
@endsection