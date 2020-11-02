@extends('layouts.app')
@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Portfolios</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Portfolios</li>
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
                <div class="card-title d-inline-block">Portfolios</div>
                <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#portfolioModal"><i class="fas fa-plus"></i> Add Portfolios</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" method="POST" enctype="multipart/form-data" action="{{route('portfolio.update',$portfolio->id)}}">
                    @csrf
                    {{ csrf_field() }}
                    {{ method_field('Put')}}
                    <div class="form-group">
                      <label for="exampleInputFile">Image</label>
                      <div class="form-group">
                      <img id="output_image"/>
                    </div>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="file" class="custom-file-input" id="exampleInputFile" onchange="preview_image(event)">
                          <label class="custom-file-label" for="exampleInputFile">Browse file</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                      <div class="col-sm-6">
                      <label for="exampleInput">Title</label>
                      <input type="text"  class="form-control"  name="title" placeholder="Enter Title Name">
                    </div>
                      <div class="col-sm-6">
                      <label for="exampleInput">Serial Number</label>
                      <input type="text"  class="form-control" name="serialnuber" placeholder="Enter Serial Number">
                    </div>
                  </div>
                    </div>
                    <div class="form-group ">
                      <div class="row">
                        <div class="col-sm-6">
                      <label for="exampleInput">Status</label>
                      <input type="text"  class="form-control" name="status" placeholder="Enter Status">
                    </div>
                    <div class="col-sm-6">
                      <label for="exampleInput">Client Name</label>
                      <input type="text"  class="form-control" name="clientname" placeholder="Enter Client Name">
                    </div>
                    </div>
                  </div>

                  <div class="form-group ">
                    <div class="row">
                      <div class="col-sm-6">
                    <label for="exampleInput">Service</label>
                    <input type="text" name="service" class="form-control" placeholder="Enter Service">
                  </div>
                  <div class="col-sm-6">
                    <label for="exampleInput">Tags</label>
                    <input type="text" name="tags" class="form-control"  placeholder="Enter Client Name">
                  </div>
                  </div>
                </div>

                  <div class="form-group ">
                      <div class="row">
                        <div class="col-sm-6">
                      <label for="exampleInput">Start Date</label>
                      <input type="date" name="startdate" class="form-control"  placeholder="Enter Start Date">
                    </div>
                    <div class="col-sm-6">
                      <label for="exampleInput">Submission Date</label>
                      <input type="date" name="enddate" class="form-control"  placeholder="Enter Submission Date">
                    </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="mb-3">
                      <label for="exampleInput">Content</label>
                      <textarea class="textarea"  name="body" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
  <!-- /.content-wrapper -->
@endsection
