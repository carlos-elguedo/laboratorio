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

    <title>Laboratorio clinico Juan Pablo II - Gerencia - Examenes</title>

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
                    <span class="sr-only">Toggle navigation</span>
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
                    
                    <li class="active">
                        <a href="examenes.php"><i class="fa fa-fw fa-stethoscope"></i> Examenes</a>
                    </li>

                    <!--
                    <li>
                        <a href="estadisticas.php"><i class="fa fa-fw fa-line-chart"></i> Estadisticas</a>
                    </li>
                    -->

                    <li>
                        <a href="pacientes.php"><i class="fa fa-fw fa-users"></i> Pacientes</a>
                    </li>

                    <li>
                        <a href="personal.php"><i class="fa fa-fw fa-user-md"></i> Personal</a>
                    </li>

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
                            Examenes clinicos realizados en el laboratorio
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php"> Volver a la pagina principal</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Flot Charts -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Examenes clinicos</h2>
                        <p class="lead">A continuacion, se presentan una serie de graficos y tablas sobre los examenes que realiza el laboratorio clinico Juan Pablo II.</p>
                    </div>
                </div>
                <!-- /.row -->



                                <div class="row">
                <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-truck fa-fw"></i> Lista de examenes ofrecidos por el laboratorio Clinico Juan Pablo II</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Descripcion</th>
                                                <th>Ofrecido desde</th>
                                                <th>Precio</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php 

$exams = $consultas->examenes();

while ($res = mysqli_fetch_array($exams)){
    echo "<tr>";
    echo "<td>{$res['nombre']}</td>";
    echo "<td>{$res['descripcion']}</td>";
    echo "<td>{$res['fecha_creacion']}</td>";
    echo "<td>{$res['precio']}</td>";
    echo "</tr>";
}
    
?>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <!-- /.row -->
                










                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Porcentajes de examenes para el mes anterior</h3>
                            </div>
                            <div class="panel-body">
                                <div class="flot-chart">
                                    <div class="flot-chart-content" id="flot-pie-chart"></div>
                                </div>
                                <div class="text-right">
                                    <a href="#"> La grafica corresponde al mes de Mayo <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Examenes realizados en el presente mes</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-bar-chart"></div>
                                <div class="text-right">
                                    <a href="#">El grafico corresponde al mes de Junio <i class="fa fa-arrow-circle-right"></i></a>
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

    <!-- Morris Charts JavaScript 
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
    -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>

    <!-- Flot Charts JavaScript -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>















    <script type="text/javascript">
        // Flot Charts sample data for SB Admin templat

    
<?php
    $fec = date("Y-m-d");
    
?>
        


// Flot Pie Chart with Tooltips
$(function() {
<?php 
$f_actual = date("Y-m");
$f_mes_ant = "2018-05";
?>
    var data = [{
        label: <?php echo '"' . $consultas->darNombreExamen(1) . '",';?>
        data: <?php echo $consultas->traerExamenesEspecificoMes($f_mes_ant, 1);?>
    }, {
        label: <?php echo '"' . $consultas->darNombreExamen(2) . '",';?>
        data: <?php echo $consultas->traerExamenesEspecificoMes($f_mes_ant, 2);?>
    }, {
        label: <?php echo '"' . $consultas->darNombreExamen(3) . '",';?>
        data: <?php echo $consultas->traerExamenesEspecificoMes($f_mes_ant, 3);?>
    }, {
        label: <?php echo '"' . $consultas->darNombreExamen(4) . '",';?>
        data: <?php echo $consultas->traerExamenesEspecificoMes($f_mes_ant, 4);?>
    }, {
        label: <?php echo '"' . $consultas->darNombreExamen(5) . '",';?>
        data: <?php echo $consultas->traerExamenesEspecificoMes($f_mes_ant, 5);?>
    }, {
        label: <?php echo '"' . $consultas->darNombreExamen(6) . '",';?>
        data: <?php echo $consultas->traerExamenesEspecificoMes($f_mes_ant, 6);?>
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


// Bar Chart
    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            device: <?php echo '"' . $consultas->darNombreExamen(1) . '",';?>
            geekbench: <?php echo $consultas->traerExamenesEspecificoMes($f_actual, 1);?>
        }, {
            device: <?php echo '"' . $consultas->darNombreExamen(2) . '",';?>
            geekbench: <?php echo $consultas->traerExamenesEspecificoMes($f_actual, 2);?>
        }, {
            device: <?php echo '"' . $consultas->darNombreExamen(3) . '",';?>
            geekbench: <?php echo $consultas->traerExamenesEspecificoMes($f_actual, 3);?>
        }, {
            device: <?php echo '"' . $consultas->darNombreExamen(4) . '",';?>
            geekbench: <?php echo $consultas->traerExamenesEspecificoMes($f_actual, 4);?>
        }, {
            device: <?php echo '"' . $consultas->darNombreExamen(5) . '",';?>
            geekbench: <?php echo $consultas->traerExamenesEspecificoMes($f_actual, 5);?>
        }, {
            device: <?php echo '"' . $consultas->darNombreExamen(6) . '",';?>
            geekbench: <?php echo $consultas->traerExamenesEspecificoMes($f_actual, 6);?>
        }],
        xkey: 'device',
        ykeys: ['geekbench'],
        labels: ['Cantidad'],
        barRatio: 0.4,
        xLabelAngle: 35,
        hideHover: 'auto',
        resize: true
    });



});






    </script>

</body>

</html>
