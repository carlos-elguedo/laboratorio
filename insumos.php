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

    <title>Laboratorio clinico Juan Pablo II - Gerencia</title>

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
                    <li class="active">
                        <a href="insumos.php"><i class="fa fa-fw fa-medkit"></i> Insumos</a>
                    </li>
                    
                    <!--
                    <li>
                        <a href="estadisticas.php"><i class="fa fa-fw fa-line-chart"></i> Estadisticas</a>
                    </li>
                    -->

                    <li>
                        <a href="estadisticas.php"><i class="fa fa-fw fa-line-chart"></i> Estadisticas</a>
                    </li>

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
                            Inventario de insumos del laboratorio
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
                        <h2 class="page-header">Lista de insumos</h2>
                        <p class="lead">A continuacion, se presentan una serie de graficos en donde se podra apreciar el estado de los diferentes insumos que posee el laboratorio clinico Juan Pablo II.</p>
                    </div>
                </div>
                <!-- /.row -->






                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Uso diario de insumos</h3>
                            </div>
                            <div class="panel-body">
                                <div class="flot-chart">
                                    <div class="flot-chart-content" id="flot-line-chart"></div>
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
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Distribucion de insumos</h3>
                            </div>
                            <div class="panel-body">
                                <div class="flot-chart">
                                    <div class="flot-chart-content" id="flot-pie-chart"></div>
                                </div>
                                <div class="text-right">
                                    <a href="#">Actuales a la fecha: <?php echo date("Y-m-d") ?> <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>



                    
                </div>
                <!-- /.row -->

                <div class="row">
                <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-truck fa-fw"></i> Proovedores</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Direccion</th>
                                                <th>Telefono</th>
                                                <th>Descripcion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php 

$proovedores = $consultas->proovedores();

while ($res = mysqli_fetch_array($proovedores)){
    echo "<tr>";
    echo "<td>{$res['nombre']}</td>";
    echo "<td>{$res['direccion']}</td>";
    echo "<td>{$res['telefono']}</td>";
    echo "<td>{$res['descripcion']}</td>";
    echo "</tr>";
}
    
?>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Historial de pedidos</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Insumo</th>
                                                <th>Proovedor</th>
                                                <th>Fecha pedido</th>
                                                <th>Fecha entragado</th>
                                                <th>Cantidad</th>
                                                <th>Costo</th>
                                                <th>Descripcion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php 

$pedidos = $consultas->pedidos();

while ($res = mysqli_fetch_array($pedidos)){
    $insum = $consultas->darNombreInsumo($res['id_insumo']);
    $proov = $consultas->darProovedor($res['id_proovedor']);

    echo "<tr>";
    echo "<td>{$insum}</td>";
    echo "<td>{$proov['nombre']}</td>";
    echo "<td>{$res['fecha_creacion']}</td>";
    echo "<td>{$res['fecha_entregado']}</td>";
    echo "<td>{$res['cantidad']}</td>";
    echo "<td>{$res['costo']}</td>";
    echo "<td>{$res['descripcion']}</td>";
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

    <!-- Flot Charts JavaScript -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>















    <script type="text/javascript">
        // Flot Charts sample data for SB Admin template


// Flot Line Chart with Tooltips
$(document).ready(function() {
    console.log("document ready En pagina");
    var offset = 0;
    plot();

    function plot() {
        var ins_1 = [],
            ins_2 = [],
            ins_3 = [],
            ins_4 = [],
            ins_5 = [],
            ins_6 = [],
            ins_7 = [],
            ins_8 = [],
            ins_9 = [];

        
<?php
    $fec = date("Y-m-d");
    
    for ($i = 1; $i <= 28; $i++) {

        $f_line_1 = date ( 'j' , strtotime ( '-'. $i . ' day' , strtotime ( $fec ) ) );
        $f_line_2 = date ( 'Y-m-d' , strtotime ( '-'. $i . ' day' , strtotime ( $fec ) ) );

        //echo $f_line_1 . "<br>";


        //Las jeringas se usan para los examanes de sangre y los de id 5 y 6
        $consumo_in_1 = $consultas->darInsumoDiario(1, $f_line_2);
        $consumo_in_1_1 = $consultas->darInsumoDiario(5, $f_line_2);
        $consumo_in_1_2 = $consultas->darInsumoDiario(6, $f_line_2);

        $consumo_in_1 += $consumo_in_1_2 + $consumo_in_1_1;
        echo "ins_1.push([{$f_line_1}, $consumo_in_1]);";




        //Los guantes se usan para el examen de toma de sangre
        $consumo_in_2 = $consultas->darInsumoDiario(1, $f_line_2);
        echo "ins_2.push([{$f_line_1}, $consumo_in_2]);";




        //lOs RECIPIENTEs se usan para los examenes 3 y 4
        $consumo_in_3 = $consultas->darInsumoDiario(3, $f_line_2);
        $consumo_in_3_1 = $consultas->darInsumoDiario(4, $f_line_2);
        $consumo_in_3 += $consumo_in_3_1;
        echo "ins_3.push([{$f_line_1}, $consumo_in_3]);";




        //Las bolsa de plastico se neceitan para los examenes 2,  4 y 6
        $consumo_in_6 = $consultas->darInsumoDiario(2, $f_line_2);
        $consumo_in_6_1 = $consultas->darInsumoDiario(4, $f_line_2);
        $consumo_in_6_2 = $consultas->darInsumoDiario(6, $f_line_2);

        $consumo_in_6 += $consumo_in_6_2 + $consumo_in_6_1;
        echo "ins_6.push([{$f_line_1}, $consumo_in_6]);";



        //El reactivo A se usa para los exames 1 y 6
        $consumo_in_7 = $consultas->darInsumoDiario(1, $f_line_2);
        $consumo_in_7_1 = $consultas->darInsumoDiario(6, $f_line_2);
        $consumo_in_7 += $consumo_in_7_1;
        echo "ins_7.push([{$f_line_1}, $consumo_in_7]);";



        //El reactivo B se usa pra los exames 2
        $consumo_in_8 = $consultas->darInsumoDiario(2, $f_line_2);
        echo "ins_8.push([{$f_line_1}, $consumo_in_8]);";

        //El reactivo C se usa pra los exames 3 y 2
        $consumo_in_9 = $consultas->darInsumoDiario(2, $f_line_2);
        $consumo_in_9_1 = $consultas->darInsumoDiario(3, $f_line_2);
        $consumo_in_9 += $consumo_in_9_1;
        echo "ins_9.push([{$f_line_1}, $consumo_in_9]);";

    }
?>
        

        var options = {
            series: {
                lines: {
                    show: true
                },
                points: {
                    show: true
                }
            },
            grid: {
                hoverable: true //IMPORTANT! this is needed for tooltip to work
            },
            yaxis: {
                min: 0,
                max: 5
            },
            tooltip: true,
            tooltipOpts: {
                content: "'%s' of %x.1 is %y.4",
                shifts: {
                    x: -60,
                    y: 25
                }
            }
        };

        var plotObj = $.plot($("#flot-line-chart"), [{
                data: ins_1,
                label: <?php echo '"' . $consultas->darNombreInsumo(1) . '"';?>
            }, {
                data: ins_2,
                label: <?php echo '"' . $consultas->darNombreInsumo(2) . '"';?>
            }/*, {
                data: ins_3,
                label: <?php echo '"' . $consultas->darNombreInsumo(3) . '"';?>
            }, {
                data: ins_6,
                label: <?php echo '"' . $consultas->darNombreInsumo(6) . '"';?>
            }, {
                data: ins_7,
                label: <?php echo '"' . $consultas->darNombreInsumo(7) . '"';?>
            }, {
                data: ins_8,
                label: <?php echo '"' . $consultas->darNombreInsumo(8) . '"';?>
            }, {
                data: ins_9,
                label: <?php echo '"' . $consultas->darNombreInsumo(9) . '"';?>
            }*/],
            options);
    }


});


// Flot Pie Chart with Tooltips
$(function() {

    var data = [{
        label: <?php echo '"' . $consultas->darNombreInsumo(1) . '",';?>
        data: <?php echo $consultas->cantidadInsumo(1);?>
    }, {
        label: <?php echo '"' . $consultas->darNombreInsumo(2) . '",';?>
        data: <?php echo $consultas->cantidadInsumo(2);?>
    }, {
        label: <?php echo '"' . $consultas->darNombreInsumo(3) . '",';?>
        data: <?php echo $consultas->cantidadInsumo(3);?>
    }, {
        label: <?php echo '"' . $consultas->darNombreInsumo(4) . '",';?>
        data: <?php echo $consultas->cantidadInsumo(4);?>
    }, {
        label: <?php echo '"' . $consultas->darNombreInsumo(5) . '",';?>
        data: <?php echo $consultas->cantidadInsumo(5);?>
    }, {
        label: <?php echo '"' . $consultas->darNombreInsumo(6) . '",';?>
        data: <?php echo $consultas->cantidadInsumo(6);?>
    }, {
        label: <?php echo '"' . $consultas->darNombreInsumo(7) . '",';?>
        data: <?php echo $consultas->cantidadInsumo(7);?>
    }, {
        label: <?php echo '"' . $consultas->darNombreInsumo(8) . '",';?>
        data: <?php echo $consultas->cantidadInsumo(8);?>
    }, {
        label: <?php echo '"' . $consultas->darNombreInsumo(9) . '",';?>
        data: <?php echo $consultas->cantidadInsumo(9);?>
    }, {
        label: <?php echo '"' . $consultas->darNombreInsumo(10) . '",';?>
        data: <?php echo $consultas->cantidadInsumo(10);?>
    }, {
        label: <?php echo '"' . $consultas->darNombreInsumo(11) . '",';?>
        data: <?php echo $consultas->cantidadInsumo(11);?>
    }, {
        label: <?php echo '"' . $consultas->darNombreInsumo(12) . '",';?>
        data: <?php echo $consultas->cantidadInsumo(12);?>
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
