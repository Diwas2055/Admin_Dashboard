<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Control Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{url('/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{url('/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{url('/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url('/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{url('/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{url('/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{url('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="icon" href="{{url('/img/AdminLTELogo.png')}}">
  <style>
    #output_image
{
 max-width:300px;
 max-height:300px;
}
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand  navbar-dark">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="/logout" class="btn btn-danger" >Logout</a>
            </li>
          </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
          <a href="index.html" class="brand-link">
            <img src="img/AdminLTELogo.png"class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Admin Control Panel</span>
          </a>

          <!-- Sidebar -->
          <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="img/user2-160x160.jpg" class="img-circle elevation-2" >
              </div>
              <div class="info">
                @if (Auth::guest())
                <a href="#" class="d-block"> demo</a>
                @else
                <a href="#" class="d-block"> {{ Auth::user()->name }}</a>
                @endif
              </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item ">
                  <a href="/" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Dashboard
                    </p>
                  </a>
                </li>
                <li class="nav-item has-treeview ">
                  <a href="#" class="nav-link ">
                    <i class="nav-icon fas fa-envelope-open-text"></i>
                    <p>
                      Subscriber
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="subscriber" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Subscriber</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="mailsubscriber" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Mail to Subscriber</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item has-treeview ">
                  <a href="#" class="nav-link ">
                    <i class="nav-icon fas fa-layer-group"></i>
                    <p>
                      Service Page
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="category" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Category</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="service.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Services</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="contact" class="nav-link ">
                    <i class="nav-icon  fas fa-phone-square-alt"></i>
                    <p>
                      Contact
                    </p>
                  </a>
                </li>
                 <li class="nav-item">
                  <a href="portfolio" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                      Portfolio Management
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="gallery" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                      Gallery
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="user" class="nav-link">
                    <i class="nav-icon far fa-user"></i>
                    <p>
                      User Management
                    </p>
                  </a>
                </li>
                <li class="nav-item has-treeview ">
                  <a href="#" class="nav-link ">
                    <i class="nav-icon fas fa-layer-group"></i>
                    <p>
                      Footer
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="footer" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Logo & Text</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="link" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Usesful Links</p>
                      </a>
                    </li>
                  </ul>
                </li>
               </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>

       @yield('content')

       <footer class="main-footer text-center">
        <strong>Copyright &copy; 2014-2020</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
        </div>
      </footer>
    </div>
<!-- jQuery -->
<script src="{{url('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 4 -->
<script src="{{url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('js/adminlte.js')}}"></script>
<script src="{{url('plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
<script type="text/javascript">
  $(document).ready(function () {
    bsCustomFileInput.init();
  });
  </script>
  <script src="{{url('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
  <script type='text/javascript'>
    function preview_image(event)
    {
     var reader = new FileReader();
     reader.onload = function()
     {
      var output = document.getElementById('output_image');
      output.src = reader.result;
     }
     reader.readAsDataURL(event.target.files[0]);
    }
    </script>
    <!-- DataTables -->
<script src="{{url('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function () {
    bsCustomFileInput.init();
  });
  </script>
  <script src="{{url('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
  <script type='text/javascript'>
    function preview_image(event)
    {
     var reader = new FileReader();
     reader.onload = function()
     {
      var output = document.getElementById('output_image');
      output.src = reader.result;
     }
     reader.readAsDataURL(event.target.files[0]);
    }
    </script>
    <!-- jquery-validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>

<script type="text/javascript">
  $(document).ready(function () {
    $.validator.setDefaults({
      submitHandler: function () {
        alert( "Form successful submitted!" );
      }
    });
    $('#quickForm').validate({
      rules: {
        name1: {
          required: true,
        },
        name2: {
          required: true,

        },
        email: {
          required: true,
          email: true,
        },
        password: {
          required: true,
          minlength: 8
        },
        terms: {
          required: true
        },
      },
      messages: {
        email: {
          required: "Please enter a email address",
          email: "Please enter a vaild email address"
        },
        password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 8 characters long"
        },
        terms: "Please accept our terms"
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });
  </script>
</body>
</html>
