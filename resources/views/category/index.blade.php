@extends('layouts.app')
@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Services</li>
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
                  <div class="card-title d-inline-block">Category</div>
                <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#categoryModal"><i class="fas fa-plus"></i> Add Category</a>
            </div>
           <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th><input type="checkbox"  data-val="all"></th>
                <th>Icon Image</th>
                <th>Name</th>
                <th>Serial Number</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                  @if(count($categories)>0)
                  @foreach($categories as $category)
              <tr>
                <td><input type="checkbox"  data-val="all"></td>
                <td><img src="/storage/category/{{$category->file}}"></td>
              <td>{{$category->name}}</td>
                <td>{{$category->serial}}</td>
                <td>
                  <a href="{{route('category.edit', $category->id)}}" class="btn btn-info"><i class="fas fa-pen "></i> Edit</a> &nbsp;
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
      <div class="modal fade" id="categoryModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <form role="form" method="POST" enctype="multipart/form-data" action="{{route('category.store')}}">
            <div class="modal-body">
              <div class="form-group">
                <img id="output_image"/>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Image</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file"  name="file" class="custom-file-input" id="exampleInputFile" onchange="preview_image(event)">
                    <label class="custom-file-label" for="exampleInputFile">Browse file</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInput">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name">
              </div>
              <div class="form-group">
                <label for="exampleInput">Serial Number</label>s
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
