<?php
require_once('./controller/novedadController.php');
$a = new  NovedadController();

$novedad = $a->read();
$num = count($a->read())/2;

echo '<div style="background-color: #b43432;">
    <div class="container content-prin profile">

        <div class="row margin-bottom-10 margin-top-10">
            <div class="headline-center-v2 margin-bottom-10">
                <h1 style="font-size: 30px; color:#fff;"><b>Novedades</b></h1>
                <span class="bordered-icon"><i class="fa fa-files-o" aria-hidden="true"></i></span>
            </div>';



        for($i=0; $i<$num; $i++ ){
            echo '<div class="col-sm-4">
                <div class="service-block-v1 md-margin-bottom-50" style="background: #fff; border-top: 5px solid #f1c40f;">
                    <i class="icon-custom icon-lg rounded-x icon-color-yellow icon-line fa fa-link" style="background: #fff;"></i>
                    <h5 class="title-v3-bg text-uppercase"><a href="/udestacado/por-la-cual-se-convoca-a-los-empleados-y-trabajadores-ufps" style="text-transform:none; color:#464646;"><b>'.$novedad[$i]['texto'].'</b></a>
                    </h5>
                    <p>
                    '.$novedad[$i]['fecha'].'
                    </p>
                    <a href="/udestacado/por-la-cual-se-convoca-a-los-empleados-y-trabajadores-ufps"><b>Leer
                            más</b></a>
                </div>
            </div>';
        }

           echo '<div class="col-md-12 margin-top-10">
                <a href="/udestacado/listado_destacados/" class="btn-u btn-brd btn-brd-hover btn-u-light btn-u-sm pull-right tooltips" data-toggle="tooltip" data-placement="left" data-original-title="Más Novedades Anteriores">Ver
                    más <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>

            </div>
        </div>
        <!--/row-->

    </div>
</div>';