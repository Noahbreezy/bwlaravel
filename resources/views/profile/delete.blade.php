@extends('layouts.app')

@section('content')
<div class="container">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Account</h5>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('profile.destroy', $user->id) }}">
                    @csrf
                    @method('DELETE')

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <button type="submit" class="btn btn-danger">Delete Account</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection