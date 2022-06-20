@extends('layouts.layout')

@section('content')

    <style>
        .uper {
            margin-top: 40px;
        }
    </style>

    <div class="card uper">
        <div class="card-header">Edit user</div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

         <!-- Content -->
            <div id="content-page" class="content">
                <form method="post" action="{{ route('users.update', $user->id ) }}">
                     @csrf
                     @method('PATCH')
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="iq-card">
                                    <div class="iq-card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">New User Information</h4>
                                        </div>
                                    </div>
                                    <div class="iq-card-body">
                                        <div class="new-user-info">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="fname">First Name:</label>
                                                    <input maxlength="30" type="text" class="form-control" id="fname" name="firstname" value="{{ $user->firstname }}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="lname">Last Name:</label>
                                                    <input maxlength="30" type="text" class="form-control" id="lname" name="lastname" value="{{ $user->lastname }}">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="email">Email:</label>
                                                    <input maxlength="320" type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="mobno">Phone Number:</label>
                                                    <input type="text" class="form-control" id="mobno" name="phone" value="{{ $user->phone }}">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="form-group col-md-6 ">
                                                    <label>User Role:</label>
                                                    <select class="form-control" id="selectuserrole" name="role" value="{{ $user->role }}">
                                                        <option value="none" selected disabled hidden>Select a role</option>
                                                        <option value="admin">admin</option>
                                                        <option value="user">user</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 offset-md-10">
                                                <button type="submit" class="btn btn-primary btn-lg tm-5">Update User</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </form>
            </div>
        </div>
    </div>

@endsection
