<!-- index.blade.php -->

@extends('layouts.layout')
@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="uper">
        <div class="card-header">
            Users List
        </div>
        @if(session()->get('success'))
            <div class="alert alert-success">
            {{ session()->get('success') }}
            </div><br />
        @endif

        <form action="{{ route('users.create')}}" method="get">
            @csrf
            <button class="btn btn-primary mt-3 mb-3 float-right btn-lg" type="submit">Add User</button>
        </form>
        <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
            <thead>
                <tr>
                <td>ID</td>
                <td>Firstname</td>
                <td>Lastname</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Role</td>
                <td colspan="2">Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->firstname}}</td>
                    <td>{{$user->lastname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td><span class="badge iq-bg-primary">{{$user->role}}</span></td>
                    <td>
                        <div class="d-flex align-items-center list-user-action">
                            <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="{{ route('users.edit', $user->id)}}"><i class="ri-pencil-line"></i></a>
                                <a class="iq-bg-primary delete-confirm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" url="{{ route('users.destroys', $user->id) }}"><i class="ri-delete-bin-line"></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>



        <div class="row justify-content-between mt-3">
            <div id="user-list-page-info" class="col-md-6">
                <span>Showing 1 to 5 of 5 entries</span>
            </div>
            <div class="float-right">
                {{$users->links()}}
            </div>
        </div>
    </div>
@endsection




