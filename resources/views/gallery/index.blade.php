@extends('layouts.app')
@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Gallery</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Gallery</li>
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
                      <div class="card-title d-inline-block">Gallery</div>
                    <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#galleryModal"><i class="fas fa-plus"></i> Add Gallery</a>
                </div>
               <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th><input type="checkbox"  data-val="all"></th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Serial Number</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      @if (count($galleries)>0)
                        @foreach ($galleries as $gallery)
                  <tr>
                    <td><input type="checkbox" class="bulk-check" data-val="all"></td>
                    <td>{{ $gallery -> image }}</td>
                    <td>{{ $gallery-> title }}</td>
                    <td>{{ $gallery-> serialnumber}}</td>
                    <td>
                      <a href="#" class="btn btn-info"><i class="fas fa-pen "></i> Edit</a> &nbsp;
                      <a href="#" class="btn btn-danger"><i class="fa fa-trash-alt"></i> Delete</a></td>
                  </tr>
                  @endforeach
                  @endif
                  </tbody>
                </table>
              </div>
                </div>
          </div>
          </div>
          <div class="modal fade" id="galleryModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Add Image</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('gallery.store')}}">
                    @csrf
                    {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInput">Image</label>
                        <input type="file" class="form-control" name="file">
                    </div>
                  <div class="form-group">
                    <label for="exampleInput">Title</label>
                    <input type="text" name="tile" class="form-control" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInput">Serial Number</label>
                    <input type="text" name="serialnumber" class="form-control"  placeholder="Enter Serial Number">
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
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 @endsection
