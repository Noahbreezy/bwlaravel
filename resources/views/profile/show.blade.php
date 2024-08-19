@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $user->name }}</h1>
    <p>{{ $user->aboutMe }}</p>
    <img src="{{ $user->avatar }}" alt="User Avatar">
    <p>Birthday: {{ $user->birthday }}</p>

    @if(Auth::user()->id == $user->id || Auth::user()->isAdmin())
        <a href="{{ route('profile.edit', ['id' => $user->id]) }}" class="btn btn-primary float-right">Edit Profile</a>
    @endif
</div>
@endsection