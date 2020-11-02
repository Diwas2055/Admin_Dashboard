@extends('layouts.app')
@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Send Mail</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Send Mail</li>
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
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="card-title d-inline-block">Send Mail</div>
              </div>
              <div class="card-body">
                <form role="form" >

                  <div class="form-group">
                    <label for="exampleInput">Subject</label>
                    <input type="text" name="name1" class="form-control" placeholder="Enter subject of Email">
                  </div>
                  <div class="form-group">
                    <div class="md-6">
                      <label for="exampleInput">Message</label>
                      <textarea class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 550px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                  </div>
                  <div class="card-footer float-right">
                    <button type="submit" class="btn btn-success"> Send Mail</button>
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
