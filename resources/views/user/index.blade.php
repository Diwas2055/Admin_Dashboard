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
                <div class="card-title d-inline-block">User</div>
                <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#createModal"><i class="fas fa-plus"></i> Add User</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email ID</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @if (count($users)>0)
                    @foreach ($users as $user)
                  <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role}}</td>
                    <td>
                        <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                      <a href="{{ route('user.edit', $user->id) }}" class="btn btn-info"><i class="fas fa-pen"></i> Edit</a> &nbsp;
                      @csrf
                      @method('DELETE')
                      <button onclick="
                      if(confirm('Are you sure, you want to delete ?'))
                      {
                      user.preventDefault();
                      document.getElementById('delete-form-{{ $user->id }}').submit();
                    }
                    else
                    {
                      user.preventDefault();
                    }"

                      type="submit" class="btn btn-danger"><i class="fa fa-trash-alt"></i> Delete</button>
                    </td>
                  </tr>
                  @endforeach
                  @endif
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>

        <div class="modal fade" id="createModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Add User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form role="form" action="{{ route('user.store')}}" method="POST">
                @csrf
                {{ csrf_field() }}
                <div class="modal-body">
                <div class="form-group">
                  <label for="exampleInput">Name</label>
                  <input type="text" name="name" class="form-control"  placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control"  placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control"  placeholder="Enter Password">
                </div>
                <div class="form-group">
                  <label for="exampleInput">Role</label>
                  <select class="form-control" name="role">
                    <option selected>Role select</option>
                    <option>Admin</option>
                    <option>User</option>
                  </select>
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection
