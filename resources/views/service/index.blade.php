@extends('layouts.app')
@section('section')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Services</h1>
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="card-title d-inline-block">Services</div>
                <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#servicesModal"><i class="fas fa-plus"></i> Add Services</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th><input type="checkbox"></th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Serial No: </th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td>Presto</td>
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

        <div class="modal fade" id="servicesModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Add Services</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form role="form" id="quickForm">
              <div class="modal-body">
                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <div class="form-group">
                  <img id="output_image"/>
                </div>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile" onchange="preview_image(event)">
                      <label class="custom-file-label" for="exampleInputFile">Browse file</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInput">Title</label>
                  <input type="text"  class="form-control" id="exampleInput" placeholder="Enter Title Name">
                </div>
                <div class="form-group">
                  <label for="exampleInput">Category</label>
                  <select class="form-control">
                    <option selected>Category select</option>
                    <option>Admin</option>
                    <option>Moderator</option>
                    <option>User</option>
                  </select>
                </div>
                <div class="form-group">
                  <div class="mb-3">
                    <label for="exampleInput">Content</label>
                    <textarea class="textarea" placeholder="Place some text here"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInput">Serial Number</label>
                  <input type="text"  class="form-control" id="exampleInput" placeholder="Enter Serial Number">
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
  <!-- /.content-wrapper -->
  @endsection
