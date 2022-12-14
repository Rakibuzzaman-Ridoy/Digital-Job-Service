<!DOCTYPE html>
<html lang="en">
<head>
  <title>Owner</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}">
  <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
  <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js')}}"></script>
  <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js')}}"></script>
  <link href="{{asset('css/user.css')}}" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{('css/simple-sidebar.css')}}" rel="stylesheet">

</head>

<body>

  <div   class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-success border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Company </div>
      <div class=" list-group ">
        <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
        <a href="{{route('admin.nformation.view')}}" class="list-group-item list-group-item-warning">Company Information</a>
        <a href="{{route('job.circular')}}" class="list-group-item list-group-item-action active">Job Circutar</a>

        <a href="{{route('view.resume')}}" class="list-group-item list-group-item-dark">Selected Cv</a>
        <a href="#" class="list-group-item list-group-item-action active">Online Exam</a>
        <a href="#" class="list-group-item list-group-item-dark">Mark</a>
        <a href="#" class="list-group-item list-group-item-action active">Logout</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">


         <nav class="navbar navbar-expand-lg  bg-dark navbar-dark">
        <button class="btn btn-primary" id="menu-toggle">
          <span class="navbar-toggler-icon"></span>
        </button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('admin.index')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
     <div class="container-fluid "data-spy="scroll">
      @yield('contain')
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
