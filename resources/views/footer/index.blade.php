@extends('layouts.app')
@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Logo & Text</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Logo & Text</li>
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
        <div class="col-md-6 flex-column">
          <div class="card">
            <div class="card-header">
              <div class="card-title d-inline-block">Update Logo & Text</div>
            </div>
            <div class="card-body">
              <form role="form" method="POST" enctype="multipart/form-data" action="{{route('footer.store')}}">
                @csrf
                {{ csrf_field() }}

                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="file" class="custom-file-input" id="exampleInputFile" onchange="preview_image(event)">
                      <label class="custom-file-label" for="exampleInputFile">Browse file</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInput">Title</label>
                  <input type="text" name="title" class="form-control" placeholder="Enter Title">
                </div>
                <div class="form-group">
                  <div class="mb-3">
                    <label for="exampleInput">Copyright Text</label>
                    <textarea class="textarea" name="body" placeholder="Place some text here"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                </div>
                <div class="card-footer float-right">
                  <button type="submit" class="btn btn-success">Update</button>
                </div>

              </form>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="card">
            <div class="card-header">
              <label for="exampleInput">Preview Image</label></div>
              <div class="card-body">
             <img id="output_image" >
            </div>
          </div>
      </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 @endsection
