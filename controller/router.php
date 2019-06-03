<?php
require_once('viewController.php');
class Router{
    public $route;

    public function __construct(){

        if(!isset($_GET['r'])||$_GET['r']=="index"){
            $home = new viewController();
            $home->load_view('index');
        }else if(isset($_GET['r'])||$_GET['r']=="evento" ){
        			if(isset($_GET['idevento'])){
        				 $home = new viewController();
                       $home->load_view('index');
        			}else{
        				 $home = new viewController();
                       $home->load_view('evento');
        			}
        }
    }


}