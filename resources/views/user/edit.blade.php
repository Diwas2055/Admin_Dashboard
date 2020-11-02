@extends('layouts.app')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
         <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="card-title d-inline-block">Edit User</div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" action="{{ route('user.update',$users->id)}}" method="POST">
                   @csrf
                   {{ csrf_field() }}
                   {{ method_field('PUT')}}
                   <div class="modal-body">
                      <div class="form-group">
                        <label for="exampleInput">Name</label>
                        <input type="text" name="name" class="form-control"  placeholder="Enter First Name" value="{{ $users->name }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control"  placeholder="Enter email" value="{{ $users->email }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control"  placeholder="Password" value="{{ $users->password}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInput">Role</label>
                      <select class="form-control" name="role" value="{{ $users-> role }}">
                          <option selected>Role select</option>
                          <option>Admin</option>
                          <option>User</option>
                        </select>
                    </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <a href="{{url('user')}}" class="btn btn-default">Close<a>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection
