@extends('layouts.app')
@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Links</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Links</li>
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
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="card-title d-inline-block">Links</div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" method="POST"  action="{{ route('link.update',$links->id)}}" >
                    @csrf
                    {{ csrf_field() }}
                    {{ method_field('PUT')}}
                      <div class="modal-body">
                      <div class="form-group">
                        <label for="exampleInput">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{ $links->name}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInput">Url</label>s
                      <input type="text" name="url" class="form-control"  placeholder="Enter Url" value="{{ $links->url }}">
                      </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <a href="{{url('link')}}" class="btn btn-default">Close<a>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
