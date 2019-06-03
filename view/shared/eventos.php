<?php 
require_once('./controller/eventosController.php');
$a = new  EventoController();
 
$evento = $a->read();
$num = count($a->read())/2;

?>

<div style="background-color: #e8e8e8; ">
    <div class="container content-prin profile">
        <div class="row margin-top-10">
            <div class="headline-center-v2 headline-center-v2-dark margin-bottom-10">
                <h1 style="font-size: 30px;"><b>Eventos</b></h1>
                <span class="bordered-icon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
            </div>
            <div class="col-md-12">
                <div class="row equal-height-columns margin-bottom-10">

                    <div class="container">
                        <ul class="row block-grid-v2">
                           
                                <?php
                                for ($i=0; $i <$num ; $i++) { 
                                    echo ' <li class="col-md-3 col-sm-6 md-margin-bottom-30" style="padding-left: 14px;"><div class="easy-block-v1"><img src="'.$evento[$i]['url'].'" alt=""> <div class="easy-block-v1-badge rgba-red">'.$evento[$i]['fecha'].'</div>
                                   
                                    <div class="easy-block-v1-badge rgba-red">
                                       Tuesday, 01 de November del 2016     </div>
                                </div>
                                <div class="block-grid-v2-info rounded-bottom  bloques_eventos">
                                    <h5>
                                     <b><a href="/ueventos/serologias-estudiantes-antiguos-para-el-primer-semestre-de-2016">'.$evento[$i]['titulo'].'</a></b>
                                     </h5>
                                      <p style="font-size: 14px;">
                                       <b>Lugar: </b>'.$evento[$i]['lugar'].' </p>
                                                                    </div>
                                </li>';
                                }
                                  ?>
                                  </ul>
                        <a href="index.php?r=evento" class="btn-u btn-u-sm pull-right tooltips" data-toggle="tooltip" data-placement="left" data-original-title="Ingresar a Calendario de Eventos">Ver
                            más <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>