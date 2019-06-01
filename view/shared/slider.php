<?php
require_once('./controller/sliderController.php');
$a= new  SliderController();

$slider=$a->read();
$num=count($a->read())/2;

echo '       
<ul class="pgwSlider">';
for($i=0; $i<$num; $i++ ){
        echo '<li width="1950px" height="550px"><a href"'.$slider[$i]['url'].'"><img   src ="'.$slider[$i]['url'].'" ><span style="font-family: inherit; font-weight: bold;">'.$slider[$i]['texto'].' </span></a>
        </li>';
}

echo '</ul>';