<?php
class ViewController {
private static $view_patch= './view/';
    public function load_view($view){
    	if($view=="evento"){
    		require_once(self::$view_patch.'eventos/' . $view . '.php');
    	}else {
        require_once(self::$view_patch . $view . '.php');}

    }
}