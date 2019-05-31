<?php
class ViewController {
private static $view_patch= './view/';
    public function load_view($view){
        require_once(self::$view_patch . $view . '.php');
    }
}