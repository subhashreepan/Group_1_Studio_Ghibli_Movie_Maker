@extends('layouts.dashboard')

@section('content')
    <main>
    <div class="container-fluid">
            <h1 class="mt-4">User Module</h1>
            <main>
                <div class="card mb-4">
                    <!-- <div class="card-header"><i class="fas fa-table mr-1"></i>Course  Details
                    <div class="col-4">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                    </div> -->
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                        <i class="fa fa-pencil mr-2" aria-hidden="true"></i>Edit Users Details
                        </div>
                         <!-- Back Button -->
                        <div>
                            <a href="{{ route('users') }}" class="btn btn-primary">
                                <i class="fa fa-arrow-left mr-1"></i> Back
                            </a>
                        </div>
                    </div>
                    <div id="layoutAuthentication">
                            <div id="layoutAuthentication_content">
                                <main>
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-12">
                                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit User Details</h3></div>
                                                    <div class="card-body">
                                                        <form action="{{ route('users.update', $User->id) }}" method="POST">
                                                            @csrf
                                                            <div class="form-row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group"><label class="small mb-1" for="first_name">First Name</label>
                                                                        <input class="form-control py-3" id="first_name" type="text" name="first_name" value="{{ $User->first_name }}"  required/>
                                                                            @error('first_name') 
                                                                                <div class="text-danger">{{ $message }}</div>
                                                                            @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group"><label class="small mb-1" for="last_name">Last Name</label>
                                                                        <input class="form-control py-3" id="last_name" type="text" name="last_name" value="{{ $User->last_name }}" required />
                                                                                @error('last_name') 
                                                                                <div class="text-danger">{{ $message }}</div>
                                                                                @enderror  
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group"><label class="small mb-1" for="email">Email</label>
                                                                        <input class="form-control py-3" id="email" type="text" name="email"  value="{{ $User->email }}"  required/>
                                                                            @error('email') 
                                                                            <div class="text-danger">{{ $message }}</div>
                                                                            @enderror 
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group"><label class="small mb-1" for="password">Password</label>
                                                                        <input class="form-control py-3" id="password" type="password" name="password" value="{{ $User->password }}" required />
                                                                            @error('password') 
                                                                            <div class="text-danger">{{ $message }}</div>
                                                                            @enderror 
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group"><label class="small mb-1" for="role">User Role</label>
                                                                        <input class="form-control py-3" id="role" type="role" name="role" value="{{ $User->role }}" required />
                                                                            @error('role') 
                                                                            <div class="text-danger">{{ $message }}</div>
                                                                            @enderror 
                                                                    </div>
                                                                </div>
                                                                 <div class="col-12">
                                                                    <button class="btn btn-primary w-100 py-3" type="submit">Update User</button>
                                                                </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </main>
                            </div>
                    </div> 
                </div>
            </main>
        </div>
    </main>
@endsection