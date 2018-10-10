@extends('layouts.userLayout')

@section('user')
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Date Created</th>
            <th>Role</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($users as $user)

            <tr>
                <td class="id">{{ $user->id }}</td>
                <td><a href="/users/{{ $user->id }}"><img src="/img/avatar/{{ $user->image }}" class="avatar" alt="Avatar">{{ $user->name }}
                    </a></td>
                <td>{{ $user->date }}</td>
                <td>{{ $user->roles->first()['role'] }}</td>
                <td><span class="status {{ $user->status }}">&bull;</span>{{ $user->status }}</td>
                <td>
                    <a href="/users/{{ $user->id }}/edit" data-method="get" class="button settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                    <a href="/users/{{ $user->id }}" data-method="delete" class="button delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                </td>
            </tr>

        @endforeach

        <form id="send_form" action="" method="post">
            @csrf
            <input type="hidden" name="id" value="">
            <input type="hidden" name="_method" value="">
        </form>

        </tbody>
    </table>
@endsection