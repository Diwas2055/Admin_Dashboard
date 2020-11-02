@extends('layouts.app')
@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Feature</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Feature</li>
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
                <div class="card-title d-inline-block">Feature</div>
                <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#createModal"><i class="fas fa-plus"></i> Add Feature</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Icon</th>
                    <th>Title</th>
                    <th>Serial No:</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Opera 7.0</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>-</td>
                    <td>
                      <a href="#" class="btn btn-info"><i class="fas fa-pen"></i> Edit</a> &nbsp;
                      <a href="#" class="btn btn-danger"><i class="fa fa-trash-alt"></i> Delete</a></td>
                  </tr>
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
                <h4 class="modal-title">Add Feature</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form role="form" id="quickForm">
              <div class="modal-body">
                <div class="form-group">
                  <label for="exampleInput">Icon</label>
                  <div class="btn-group d-block">
                  <button class="btn btn-default" data-icon="zmdi-card-sd" role="iconpicker"></button>
                </div>
              </div>
                <div class="form-group">
                  <label for="exampleInput">Title</label>
                  <input type="text" name="name2" class="form-control" id="exampleInputPassword1" placeholder="Enter Title">
                </div>
                <div class="form-group">
                  <label for="exampleInput">Serial Number</label>
                  <input type="text" name="name2" class="form-control" id="exampleInputPassword1" placeholder="Enter Serial Number">
                </div>
                <div class="form-group">
                  <label for="exampleInput">Color</label>
                  <input type="text" name="name2" class="form-control" id="exampleInputPassword1" placeholder="#ffff">
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
