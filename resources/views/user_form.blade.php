@extends('layouts.userLayout')

@section('user_form')

    <div class="col-md-12">
        <h4>Fill in user info</h4>
        <form class="userForm" action="/users{{ (!empty($user->image) ?  '/' . $user->image : '') }}" method="post">
            @csrf
            @if(!empty($user))
                <input type="hidden" name="_method" value="put">
                <input type="hidden" name="id" value="{{ $user->id }}">
                <div class="form-group">
                    <input type="text" name="image" required value="{{ (!empty($user->image) ? $user->image : '') }}">
                </div>
            @endif
            <div class="form-group">
                <input type="name" name="name" placeholder="Name" required value="{{ (!empty($user->name) ? $user->name : '') }}">
            </div>
            <div class="form-group">
                <input type="text" name="role" placeholder="Role" required value="{{ (!empty($user->role) ? $user->role : '') }}">
            </div>
            <div class="form-group">
                <select name="status" required>
                    <option>{{ (!empty($user->status) ? $user->status : '') }}</option>
                    <option>Active</option>
                    <option>Inactive</option>
                    <option>Suspended</option>
                </select>
            </div>
            <div class="form-group">
                <input class="btn" type="submit" name="send" value="{{ (!empty($user) ? 'Edit user' : 'Create user') }}">
            </div>
        </form>
    </div>
    <a href="/users"><h3>Go back</h3></a>
@endsection