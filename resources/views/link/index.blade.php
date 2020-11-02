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
                <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#createModal"><i class="fas fa-plus"></i> Add Usesful Links</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Url</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      @if (count($links)>0)
                        @foreach($links as $link)

                  <tr>
                    <td>{{ $loop ->index +1  }}</td>
                    <td>{{$link->name}}</td>
                    <td>{{$link->url}}</td>
                    <td>
                        <form action="{{ route('link.destroy',$link->id) }}" method="POST">
                      <a href="{{route('link.edit',$link->id)}}" class="btn btn-info"><i class="fas fa-pen"></i> Edit</a> &nbsp;

                        @csrf
                    @method('DELETE')

                    <button type="submit"
                    onclick="
                  if(confirm('Are you sure, you want to delete ?'))
                  {
                  link.preventDefault();
                  document.getElementById('delete-form-{{ $link->id }}').submit();
                }
                else
                {
                  link.preventDefault();
                }"
                    class="btn btn-danger"><i class=" fa fa-trash-alt"></i> Delete</button>
                </form>
                  </tr>
                  @endforeach
                  @endif

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!--modal body-->
            <div class="modal fade" id="createModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Add Usesful Links</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form role="form" method="POST"  action="{{ route('link.store')}}" >
                  @csrf
                  {{ csrf_field() }}
                    <div class="modal-body">
                    <div class="form-group">
                      <label for="exampleInput">Name</label>
                      <input type="text" name="name" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInput">Url</label>s
                      <input type="text" name="url" class="form-control"  placeholder="Enter Url ">
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
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
