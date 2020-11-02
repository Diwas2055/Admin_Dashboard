@extends('layout.app')
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
            </div>
           <div class="card-body">
            <form role="form" method="POST" enctype="multipart/form-data" action="{{route('category.update',$category->id)}}">
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
                  <a href="{{route('category')}}" class="btn btn-default" data-dismiss="modal">Close</a>
                  <button type="submit" class="btn btn-primary">Submit</button>
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
