@extends('layouts.userLayout')
@section('single_user')


<div class="container user_wrapper">
    <img src="/img/avatar/{{ $user->image }}" class="avatar" alt="Avatar">
    <h3>Name:</h3>
    <p>{{ $user->name }}</p>
    <h3>Date Created:</h3>
    <p>{{ $user->date }}</p>
    <h3>Role:</h3>
    <p>{{ $user->role }}</p>
    <h3>Status</h3>
    <p>{{ $user->status }}</p>
</div>
<a href="/users"><h3>Go back</h3></a>
@endsection