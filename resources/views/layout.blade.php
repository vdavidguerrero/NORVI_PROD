
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Inversiones Norvi</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/dashboard/dashboard.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-dark fixed-top bg-dark fleex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="">Inversiones Norvi</a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="#">Sign out</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item"><br>
                        <a class="nav-link active" href="">
                            <span data-feather="home"></span>
                            HOME <span class="sr-only">(current)</span>
                        </a>
                    </li><br>




                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <span data-feather="edit"></span>
                            Prestamos <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="/calculadora">
                            <span data-feather="edit"></span>
                            Calculadora <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <span data-feather="file"></span>
                            Solicitudes

                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="users"></span>
                            Cartera
                        </a>
                    </li>


                    <li class="nav-item"><br>
                        <a class="nav-link active" href="">
                            <span data-feather="home"></span>
                            Capital <span class="sr-only">(current)</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link " href="">
                            <span data-feather="home"></span>
                            Inversiones <span class="sr-only">(current)</span>
                        </a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span data-feather="dollar-sign"></span>
                            Capital Bancario
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="">Cuentas</a>
                            <a class="dropdown-item" href="#">Prestamos</a>
                            <a class="dropdown-item" href="#">Lineas De Credito</a>
                            <a class="dropdown-item" href="#">Tarjetas De Credito</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="map-pin"></span>
                            Inversiones Norvi USD
                        </a>
                    </li>


                    <br>

                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <span data-feather="map-pin"></span>
                            Reportes Contables
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span data-feather="dollar-sign"></span>
                            Mensuales
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href=""</a>
                            <a class="dropdown-item" href="#">Ingresos Y Egreso</a>
                            <a class="dropdown-item" href="#">Balance General</a>
                            <a class="dropdown-item" href="#">Flujo Efectivo</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span data-feather="dollar-sign"></span>
                            Anuales
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="">Disponibilidad</a>
                            <a class="dropdown-item" href="#">Ingresos Y Egreso</a>
                            <a class="dropdown-item" href="#">Balance General</a>
                            <a class="dropdown-item" href="#">Flujo Efectivo</a>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    @yield('content')

</main>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
<script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>

<!-- Graphs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            datasets: [{
                data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                lineTension: 0,
                backgroundColor: 'transparent',
                borderColor: '#007bff',
                borderWidth: 4,
                pointBackgroundColor: '#007bff'
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: false
                    }
                }]
            },
            legend: {
                display: false,
            }
        }
    });
</script>
</body>
</html>
