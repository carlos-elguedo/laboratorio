<?php

require 'BD/Consultas.php';

$consultas = new Consultas();


        



?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Carlos Elguedo">

    <title>Laboratorio clinico Juan Pablo II - Gerencia - Pacientes</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Selector de navegación</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Laboratorio clinico Juan Pablo II</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Notificación 1 <span class="label label-default">texto</span></a>
                        </li>
                        
                        <li>
                            <a href="#">Notificación 2 <span class="label label-primary">Alerta</span></a>
                        </li>
                        
                        <li>
                            <a href="#">Notificación 3<span class="label label-success">Alerta</span></a>
                        </li>
                        
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Nombre de usuario <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i>Datos de usuario</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i>Mensajes</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i>Configuraciones</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i>Cerrar sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Información general</a>
                    </li>
                    <li>
                        <a href="insumos.php"><i class="fa fa-fw fa-medkit"></i> Insumos</a>
                    </li>
                    
                    <li>
                        <a href="examenes.php"><i class="fa fa-fw fa-stethoscope"></i> Examenes</a>
                    </li>

                    <!--
                    <li>
                        <a href="estadisticas.php"><i class="fa fa-fw fa-line-chart"></i> Estadisticas</a>
                    </li>
                    -->

                    <li class="active">
                        <a href="pacientes.php"><i class="fa fa-fw fa-users"></i> Pacientes</a>
                    </li>

                    <li>
                        <a href="personal.php"><i class="fa fa-fw fa-user-md"></i> Personal</a>
                    </li>
                    <!--
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
                    -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Información sobre los pacientes
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Información general
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>
                             A continuación se presentan datos relevantes de los <strong>Pacientes del laboratorio</strong> Esta información es util para tomar decisiones pertinentes
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    
                    <!-- Primer dato rapido -->
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
<?php
    $fecha_actual = date("Y-m");


    $n1 = $consultas->totalPacientes();

    echo "<div class='huge'>{$n1}</div>";
?>
                                 
                                        <div>Es el total de pacientes registrados</div>
                                    </div>
                                </div>
                            </div>
                            <a href="pacientes.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalles</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Fin del primer dato rapido-->

                    <!-- Segundo dato rapido -->
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-plus fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
<?php
    
    $n2 = $consultas->nuevosPacientes($fecha_actual);

    echo "<div class='huge'>{$n2}</div>";
?>                                      

                                        <div>Nuevos usuarios este mes</div>
                                    </div>
                                </div>
                            </div>
                            <a href="pacientes.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalles</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Fin del Segundo dato rapido-->

                    <!-- Tercer dato rapido -->
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa- calendar-plus-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
<?php
    
    $n4 = $consultas->nuevosPacientesAnual(date("Y"));
    echo "<div class='huge'>{$n4}</div>";
    
?>                                      
                                        <div>Nuevos pacientes registrados este año</div>
                                    </div>
                                </div>
                            </div>
                            <a href="examenes.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalles</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Fin del Tercer dato rapido-->

                    

                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i>Registros Trimestrales de pacientes por ciudades</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Seguro (eps) de los pacientes</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                                <div class="text-right">
                                    <a href="#">Ver detalles <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Ultimos pacientes registrados</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    
<?php 
    $ultimos_pac = $consultas->ultimosPacientes();

    while ($res = mysqli_fetch_array($ultimos_pac)){

        echo "<a href='#' class='list-group-item'>";
        echo "<span class='badge'> Edad: {$res['edad']}</span>";
        echo "<i class='fa fa-fw fa-user'></i> {$res['nombre']} {$res['apellidos']}";
        echo "</a>";

    }
?>

                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /.row -->




                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i>Edad de los pacientes</h3>
                            </div>
                            <div class="panel-body">
                                <div class="flot-chart">
                                    <div class="flot-chart-content" id="flot-pie-chart"></div>
                                </div>
                                <div class="text-right">
                                    <a href="#"> Rango de edad de los pacientes registrados <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    
    <!-- Flot Charts JavaScript -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>


    <script type="text/javascript">

        // Morris.js Charts sample data for SB Admin template

$(function() {

    // Area Chart
    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2017 Q1',
            ex1: <?php echo $consultas->cantidadPacientesTriPorCiudad('2017-01', '2017-02', '2017-03', 1); ?>,
            ex2: <?php echo $consultas->cantidadPacientesTriPorCiudad('2017-01', '2017-02', '2017-03', 2); ?>,
            ex3: <?php echo $consultas->cantidadPacientesTriPorCiudad('2017-01', '2017-02', '2017-03', 3); ?>,
            ex4: <?php echo $consultas->cantidadPacientesTriPorCiudad('2017-01', '2017-02', '2017-03', 4); ?>,
            ex5: <?php echo $consultas->cantidadPacientesTriPorCiudad('2017-01', '2017-02', '2017-03', 5); ?>,
            ex6: <?php echo $consultas->cantidadPacientesTriPorCiudad('2017-01', '2017-02', '2017-03', 6); ?>
        }, {
            period: '2017 Q2',
            ex1: <?php echo $consultas->cantidadPacientesTriPorCiudad('2017-04', '2017-05', '2017-06', 1); ?>,
            ex2: <?php echo $consultas->cantidadPacientesTriPorCiudad('2017-04', '2017-05', '2017-06', 2); ?>,
            ex3: <?php echo $consultas->cantidadPacientesTriPorCiudad('2017-04', '2017-05', '2017-06', 3); ?>,
            ex4: <?php echo $consultas->cantidadPacientesTriPorCiudad('2017-04', '2017-05', '2017-06', 4); ?>,
            ex5: <?php echo $consultas->cantidadPacientesTriPorCiudad('2017-04', '2017-05', '2017-06', 5); ?>,
            ex6: <?php echo $consultas->cantidadPacientesTriPorCiudad('2017-04', '2017-05', '2017-06', 6); ?>
        }, {
            period: '2017 Q3',
            ex1: <?php echo $consultas->cantidadPacientesTriPorCiudad('2017-07', '2017-08', '2017-09', 1); ?>,
            ex2: <?php echo $consultas->cantidadPacientesTriPorCiudad('2017-07', '2017-08', '2017-09', 2); ?>,
            ex3: <?php echo $consultas->cantidadPacientesTriPorCiudad('2017-07', '2017-08', '2017-09', 3); ?>,
            ex4: <?php echo $consultas->cantidadPacientesTriPorCiudad('2017-07', '2017-08', '2017-09', 4); ?>,
            ex5: <?php echo $consultas->cantidadPacientesTriPorCiudad('2017-07', '2017-08', '2017-09', 5); ?>,
            ex6: <?php echo $consultas->cantidadPacientesTriPorCiudad('2017-07', '2017-08', '2017-09', 6); ?>
        }, {
            period: '2017 Q4',
            ex1: <?php echo $consultas->cantidadPacientesTriPorCiudad('2017-10', '2017-11', '2017-12', 1); ?>,
            ex2: <?php echo $consultas->cantidadPacientesTriPorCiudad('2017-10', '2017-11', '2017-12', 2); ?>,
            ex3: <?php echo $consultas->cantidadPacientesTriPorCiudad('2017-10', '2017-11', '2017-12', 3); ?>,
            ex4: <?php echo $consultas->cantidadPacientesTriPorCiudad('2017-10', '2017-11', '2017-12', 4); ?>,
            ex5: <?php echo $consultas->cantidadPacientesTriPorCiudad('2017-10', '2017-11', '2017-12', 5); ?>,
            ex6: <?php echo $consultas->cantidadPacientesTriPorCiudad('2017-10', '2017-11', '2017-12', 6); ?>
        }, {
            period: '2018 Q1',
            ex1: <?php echo $consultas->cantidadPacientesTriPorCiudad('2018-01', '2018-02', '2018-03', 1); ?>,
            ex2: <?php echo $consultas->cantidadPacientesTriPorCiudad('2018-01', '2018-02', '2018-03', 2); ?>,
            ex3: <?php echo $consultas->cantidadPacientesTriPorCiudad('2018-01', '2018-02', '2018-03', 3); ?>,
            ex4: <?php echo $consultas->cantidadPacientesTriPorCiudad('2018-01', '2018-02', '2018-03', 4); ?>,
            ex5: <?php echo $consultas->cantidadPacientesTriPorCiudad('2018-01', '2018-02', '2018-03', 5); ?>,
            ex6: <?php echo $consultas->cantidadPacientesTriPorCiudad('2018-01', '2018-02', '2018-03', 6); ?>
        }, {
            period: '2018 Q2',
            ex1: <?php echo $consultas->cantidadPacientesTriPorCiudad('2018-04', '2018-05', '2018-06', 1); ?>,
            ex2: <?php echo $consultas->cantidadPacientesTriPorCiudad('2018-04', '2018-05', '2018-06', 2); ?>,
            ex3: <?php echo $consultas->cantidadPacientesTriPorCiudad('2018-04', '2018-05', '2018-06', 3); ?>,
            ex4: <?php echo $consultas->cantidadPacientesTriPorCiudad('2018-04', '2018-05', '2018-06', 4); ?>,
            ex5: <?php echo $consultas->cantidadPacientesTriPorCiudad('2018-04', '2018-05', '2018-06', 5); ?>,
            ex6: <?php echo $consultas->cantidadPacientesTriPorCiudad('2018-04', '2018-05', '2018-06', 6); ?>
        }],
        xkey: 'period',
        ykeys: ['ex1', 'ex2', 'ex3', 'ex4', 'ex5', 'ex6'],
        labels: ['Barranquilla', 'Bogota', 'Cartagena', 'Medellin', 'Monteria', 'Sincelejo'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    // Donut Chart
    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Sisben",
            value: <?php echo $consultas->darEps("Sisben");?>
        }, {
            label: "Confamiliar",
            value: <?php echo $consultas->darEps("Confamiliar");?>
        }, {
            label: "Milagro EPS",
            value: <?php echo $consultas->darEps("Milagro EPS");?>
        }, {
            label: "Nueva EPS",
            value: <?php echo $consultas->darEps("Nueva EPS");?>
        }, {
            label: "Colsanitas",
            value: <?php echo $consultas->darEps("Colsanitas");?>
        }, {
            label: "Confenalco",
            value: <?php echo $consultas->darEps("Confenalco");?>
        }, {
            label: "Coomeva",
            value: <?php echo $consultas->darEps("Coomeva");?>
        }, {
            label: "Coosalud",
            value: <?php echo $consultas->darEps("Coosalud");?>
        }, {
            label: "Barrios unidos quibdo",
            value: <?php echo $consultas->darEps("Barrios unidos quibdo");?>
        }],
        resize: true
    });

    
<?php 
$f_actual = date("Y-m");
$f_mes_ant = "2018-05";
?>
    var data = [{
        label: "Entre 10 y 20 años",
        data: <?php echo $consultas->edadPacienteRango(10);?>
    }, {
        label: "Entre 20 y 30 años",
        data: <?php echo $consultas->edadPacienteRango(20);?>
    }, {
        label: "Entre 30 y 40 años",
        data: <?php echo $consultas->edadPacienteRango(30);?>
    }, {
        label: "Entre 40 y 50 años",
        data: <?php echo $consultas->edadPacienteRango(40);?>
    }, {
        label: "Entre 50 y 60 años",
        data: <?php echo $consultas->edadPacienteRango(50);?>
    }, {
        label: "Entre 60 y 70 años",
        data: <?php echo $consultas->edadPacienteRango(60);?>
    }, {
        label: "Entre 70 y 80 años",
        data: <?php echo $consultas->edadPacienteRango(70);?>
    }, {
        label: "Entre 80 y 90 años",
        data: <?php echo $consultas->edadPacienteRango(80);?>
    }, {
        label: "Entre 90 y 100 años",
        data: <?php echo $consultas->edadPacienteRango(90);?>
    }];

    var plotObj = $.plot($("#flot-pie-chart"), data, {
        series: {
            pie: {
                show: true
            }
        },
        grid: {
            hoverable: true
        },
        tooltip: true,
        tooltipOpts: {
            content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
            shifts: {
                x: 20,
                y: 0
            },
            defaultTheme: false
        }
    });
    


});



    </script>




</body>

</html>
