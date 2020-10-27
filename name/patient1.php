<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin Template by Tooplate.com</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/fullcalendar.min.css">
    <!-- https://fullcalendar.io/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
</head>

<body id="reportsPage">

    <div class="" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-xl navbar-light bg-light">
                        <a class="navbar-brand" href="#">
                            <h1 class="tm-site-title mb-0">Juana Velázquez</h1>
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
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Raw Data
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Daily Report</a>
                                        <a class="dropdown-item" href="#">Weekly Report</a>
                                        <a class="dropdown-item" href="#">Yearly Report</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="medicalrecords.html">Medical Records</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link d-flex" href="login.html">
                                        <i class="far fa-user mr-2 tm-logout-icon"></i>
                                        <span>Patients List</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- row -->
            <div class="row tm-content-row tm-mt-big">
                <div class="tm-col tm-col-big">
                    <div class="bg-white tm-block h-100">
                        <h2 class="tm-block-title">Vital signs</h2>
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
                <div class="tm-col tm-col-big">
                    <div class="bg-white tm-block h-100">
                        <div class="row">
                            <div class="col-8">
                                <h2 class="tm-block-title d-inline-block">Statistics</h2>

                            </div>
                            <div class="col-4 text-right">
                                <a href="products.html" class="tm-link-black">View All</a>
                            </div>
                        </div>
                        <p>Last day:</p>
                        <p>Average Temperature: 37 °C</p>
                        <p>Average Cardiac Rhythm: 90 bpm</p>
                        <p>Average Oxygen Saturation: 94%</p>
                        <p>Last month:</p>
                        <p>Average Temperature: 36.8 °C</p>
                        <p>Average Cardiac Rhythm: 95 bpm</p>
                        <p>Average Oxygen Saturation: 95%</p>
                        <canvas id="lineChart1" style='display: none'></canvas>
                    </div>
                </div>
                <!--<div class="tm-col tm-col-big" style='diplay: none'>
                    <div class="bg-white tm-block h-100">
                        <h2 class="tm-block-title">Performance</h2>
                        <canvas id="barChart" style='display: none;'></canvas>
                    </div>
                </div>-->
                <div class="tm-col tm-col-small" style='background: green;'>
                    <div class="bg-white tm-block h-100">
                        <h2 class="tm-block-title">Status</h2>
                        <canvas id="pieChart" class="chartjs-render-monitor" style='display: none' ></canvas>
                        <img src="/images/patient.jpg" alt="Italian Trulli" style="width:200px;height:150px;">
                        <p>Low risk</p>
                    </div>
                </div>

                <div class="tm-col tm-col-big">
                    <div class="bg-white tm-block h-100">
                        <div class="row">
                            <div class="col-8">
                                <h2 class="tm-block-title d-inline-block">Personal information</h2>

                            </div>
                            <div class="col-4 text-right">
                                <a href="products.html" class="tm-link-black">View All</a>
                            </div>
                        </div>
                        <ol class="tm-list-group tm-list-group-alternate-color tm-list-group-pad-big">
                            <li class="tm-list-group-item">
                                Age: 25
                            </li>
                            <li class="tm-list-group-item">
                                Sex: F
                            </li>
                            <li class="tm-list-group-item">
                                Weight: 70 kg
                            </li>
                            <li class="tm-list-group-item">
                                Height: 1.56 m
                            </li>
                            <li class="tm-list-group-item">
                                Prescription Drugs: none
                            </li>
                            <li class="tm-list-group-item">
                                Phone number: 123 456 7890
                            </li>
                            <li class="tm-list-group-item">
                                Email: jvelazquez18@gmail.com
                            </li>   
                        </ol>
                    </div>
                </div>
                <div class="tm-col tm-col-big">
                    <div class="bg-white tm-block h-100">
                        <h2 class="tm-block-title">Appointments</h2>
                        <div id="calendar"></div>
                        <div class="row mt-4">
                            <div class="col-12 text-right">
                                <a href="#" class="tm-link-black">View Schedules</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tm-col tm-col-small" style= 'visibility: hidden;'>
                    <div class="bg-white tm-block h-100">
                        <h2 class="tm-block-title">Instructions</h2>
                        <ol class="tm-list-group">
                            <li class="tm-list-group-item">Always wash your hands properly</li>
                            <li class="tm-list-group-item">Maintain a safe distance</li>
                            <li class="tm-list-group-item">Wear a mask if social distancing is not an option</li>
                            <li class="tm-list-group-item">Stay at home</li>
                            <li class="tm-list-group-item">If you have Covid-19 symptoms, seek medical attention</li>
                            <li class="tm-list-group-item">Be aware of fake news</li>
                            <li class="tm-list-group-item">Meditate</li>
                            <li class="tm-list-group-item">Ask for emotional support, everyone needs it</li>
                            <li class="tm-list-group-item">Live a healthy life</li>
                        </ol>
                    </div>
                </div>
            </div>
            <footer class="row tm-mt-small">
                <div class="col-12 font-weight-light">
                    <p class="d-inline-block tm-bg-black text-white py-2 px-4">
                        Copyright &copy; 2018 Admin Dashboard . Created by
                        <a rel="nofollow" href="https://www.tooplate.com" class="text-white tm-footer-link">Tooplate</a>
                    </p>
                </div>
            </footer>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="js/utils.js"></script>
    <script src="js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="js/fullcalendar.min.js"></script>
    <!-- https://fullcalendar.io/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="js/tooplate-scripts.js"></script>
    <script>
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        pieChart;
        // DOM is ready
        $(function () {
            updateChartOptions();
            drawLineChart(); // Line Chart
            drawLineChart1();
            
            drawPieChart(); // Pie Chart
            drawCalendar(); // Calendar

            $(window).resize(function () {
                updateChartOptions();
                updateLineChart();
                updateLinechart1();
                
                reloadPage();
            });
        })
    </script>
</body>

</html>