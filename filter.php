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
<body style='background-image: url(images/cool-background.png)'>



<!-- Page Content -->
<div id="page-content-wrapper">
  <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-xl navbar-light bg-light">
                        <a class="navbar-brand" href="#">
                            <h1 class="tm-site-title mb-0">Digital Twin
                            </h1>
                        </a>
                        <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="../filter.php">Dashboard
                                        <span class="sr-only">(current)</span>
                                    </a>
</li>

                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link d-flex" href="index.php">
                                        <i class="far fa-user mr-2 tm-logout-icon"></i>
                                        <span>Log out</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
  
    <div class='container mb-5 mt-3' style='position: relative;'>
        <table class='table table-striped table-bordered mydatatable' style='width: 100%; background: white;'; id='mydatatable'>
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
                    <td>Juana Velázquez</td>
                    <td>25</td>
                    <td>F</td>
                    <td>Low</td>
                    <td>2020/07/12</td>
                    <td><a href='name/patient1.php'>Profile</a></td>
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
                    <td><a href='name/patient2.php'>Profile</a></td>
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
                    <td>70</td>
                    <td>F</td>
                    <td>High</td>
                    <td>2020/07/12</td>
                    <td><a href='name/patient3.php'>Profile</a></td>
                </tr>
            </tbody>
            <tfoot style= 'display: none;'>
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