@extends('layouts.layout')

@section('content')

    <style>
        .uper {
            margin-top: 40px;
        }
    </style>

    <div class="card uper">
        <div class="card-header"> Add user data </div>
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
                <form method="post" action="{{ route('users.store') }}" id="my-form">
                    @csrf
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
                                              <!-- Firstname -->
                                                <div class="form-group col-md-6">
                                                    <label for="fname">First Name:</label>
                                                    <input maxlength="30" type="text" class="form-control" id="fname" placeholder="First Name" name="firstname">
                                                </div>
                                              <!-- Lastname -->
                                                <div class="form-group col-md-6">
                                                    <label for="lname">Last Name:</label>
                                                    <input maxlength="30" type="text" class="form-control" id="lname" placeholder="Last Name" name="lastname">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                              <!-- Email -->
                                                <div class="form-group col-md-6">
                                                    <label for="email">Email:</label>
                                                    <input maxlength="320" type="email" class="form-control" id="email" placeholder="Email" name="email">
                                                </div>
                                              <!-- Phone number -->
                                                <div class="form-group col-md-6">
                                                    <label for="mobno">Phone Number:</label>
                                                    <input type="text" class="form-control" id="mobno" placeholder="Mobile Number" name="phone">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                              <!-- Password -->
                                                <div class="form-group col-md-6">
                                                    <label for="pass">Password:</label>
                                                    <input maxlength="127" type="password" class="form-control" id="pass" placeholder="Password" name="password">
                                                </div>
                                              <!-- Repeat Password -->
                                                <div class="form-group col-md-6">
                                                    <label for="rpass">Repeat Password:</label>
                                                    <input maxlength="127" type="password" class="form-control" id="rpass" placeholder="Repeat Password " name="password_confirmation">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="form-group col-md-6 ">
                                                  <!-- Role -->
                                                    <label>User Role:</label>
                                                    <select class="form-control" id="selectuserrole" name="role">
                                                        <option value="none" selected disabled hidden>Select a role</option>
                                                        <option value="admin">admin</option>
                                                        <option value="user">user</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 offset-md-10">
                                                <button type="submit" class="btn btn-primary btn-lg tm-5 add-confirm ">Add New User</button>
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
    <script>
        $('#my-form').submit(function (e) {
            e.preventDefault();

            var form = $(this);

            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            }, function (isConfirmed) {
                if (isConfirmed) {
                    form.submit();
                }
            });

            return false;
        });
    </script>
@endsection


