<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/simple-sidebar.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="https://stackpath.bootsrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" >
</head>
<body>

<div class="d-flex" id="wrapper">

<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
  <div class="sidebar-heading">Digital Twin </div>
  <div class="list-group list-group-flush">
    <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
    <a href="profile.php" class="list-group-item list-group-item-action bg-light">Profile</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
  </div>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">

  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Log Out<span class="sr-only">(current)</span></a>
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

  <div class="container-fluid">
    <h1 class="mt-4">Dashboard</h1>
    <div class="card w-60" style="width: 18rem; float: left; margin-top: 10px; margin-bottom: 10px; margin-right: 10px;">
        <div class="card-body">
            <h5 class="card-title">Alerts in the last 24 hours:</h5>
            <h6 class="card-subtitle mb-2 text-muted">None</h6>
            <p class="card-text"></p>
            <a href="#" class="card-link">Last week</a>
            <a href="#" class="card-link">Last month</a>
        </div>
    </div>
    <div class="card w-60" style="width: 18rem; float: left; margin: 10px">
        <div class="card-header">
            High Risk patients
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">John Doe</li>
            <li class="list-group-item">Peter Reynolds</li>
            <li class="list-group-item">Mary Doe</li>
        </ul>
    </div>
    <div class='container mb-5 mt-3' style='position: relative;'>
        <table class='table table-striped table-bordered mydatatable' style='width: 100%; background: white'; id='mydatatable'>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Risk level</th>
                    <th>Last appointment</th>
                    <th>Current status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>36</td>
                    <td>M</td>
                    <td>High</td>
                    <td>2020/07/12</td>
                    <td><a href='name/index.php'>Profile</a></td>
                </tr>
                <tr>
                    <td>Peter Reynolds</td>
                    <td>75</td>
                    <td>M</td>
                    <td>High</td>
                    <td>2020/08/24</td>
                    <td><a href=''>Stable</a></td>
                </tr>
                <tr>
                    <td>Mary Doe</td>
                    <td>34</td>
                    <td>F</td>
                    <td>High</td>
                    <td>2020/07/12</td>
                    <td><a href=''>Stable</a></td>
                </tr>
                <tr>
                    <td>I. M. Postor</td>
                    <td>20</td>
                    <td>M</td>
                    <td>Medium</td>
                    <td>2020/10/9</td>
                    <td><a href=''>Stable</a></td>
                </tr>
                <tr>
                    <td>María Espinoza</td>
                    <td>67</td>
                    <td>F</td>
                    <td>Medium</td>
                    <td>2020/07/12</td>
                    <td><a href=''>Stable</a></td>
                </tr>
                <tr>
                    <td>Marie Sue</td>
                    <td>36</td>
                    <td>M</td>
                    <td>Low</td>
                    <td>2020/07/12</td>
                    <td><a href=''>Stable</a></td>
                </tr>
            </tbody>
            <tfoot>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Risk level</th>
                    <th>Last appointment</th>
                    <th>Current status</th>
            </tfoot>
        </table>
    </div>
  </div>
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
<script src='https://cdnjs.cloudfare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
<script src='https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js'></script>
<script>
    $('.mydatatable').DataTable();
</script>
<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});
</script>
</body>
</html>