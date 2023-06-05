@extends('layouts.main')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">Users</h1>
    
    <div class="row">
        <div class="card mx-auto">
            <div class="card-header">
                <a href="{{ route('users.create') }}" class="float-right">Create</a></a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#Id</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Manage</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>Edit/Delete</td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
