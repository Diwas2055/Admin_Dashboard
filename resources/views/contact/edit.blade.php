@extends('layouts.app')
@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Contact</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Conatct</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row ">
          <div class="col-md-12 flex-column ">
            <div class="card">
              <div class="card-header">
                <div class="card-title d-inline-block">Contact</div>
              </div>
            <div class="card-body ">
                <form role="form" method="POST" action="{{ route('contact.update',$contacts->id)}}" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')
                  <div class="form-group ">
                    <label for="exampleInput">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{ $contacts->title }}">
                  </div>
                  <div class="form-group ">
                    <label for="exampleInput">Substitle</label>
                    <input type="text" name="subtitle" class="form-control" placeholder="Enter Substitle" value="{{ $contacts->subtitle }}">
                  </div>
                  <div class="form-group ">
                    <label for="exampleInput">Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter Address" value="{{ $contacts->address }}">
                  </div>
                  <div class="form-group ">
                    <label for="exampleInput">Phone No</label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter Phone No" value="{{ $contacts->phone }}">
                  </div>
                  <div class="form-group ">
                    <label for="exampleInput">Email Id</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter Email Id" value="{{ $contacts->email }}">
                  </div>
                  <div class="card-footer float-left">
                    <a href="{{url('contact')}}" class="btn btn-default">Close<a>
                  </div>
                  <div class="card-footer float-right">
                    <button type="submit" class="btn btn-success">Update</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 @endsection
