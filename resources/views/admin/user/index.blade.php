@extends('layouts.back-end.master')
@section('content')
<div class="container-fluid flex-grow-1 container-p-y">
    <div class="card mt-4">
        <h5 class="card-header">User</h5>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead class="table-dark">
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($user as $users)
              <tr>
                <td>{{ $users->id }}</td>
                <td>{{ $users->name }}</td>
                <td>{{ $users->address }}</td>
                <td>{{ $users->email }}</td>
                <td>{{ $users->phone }}</td>
                <td>{{ $users->created_at }}</td>
                <td>{{ $users->updated_at }}</td>
                <td>
                  <a href="{{ route('user.edit',$users->id) }}" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                  @if (Auth::user()->name == $users->name)
                  <a href="" class="btn btn-secondary"><i class="fa-sharp fa-solid fa-trash"></i></a>
                  @else
                  <a href="{{ route('user.delete',$users->id) }}" class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></a>
                  @endif
                  
                </td>
                </tr>      
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection