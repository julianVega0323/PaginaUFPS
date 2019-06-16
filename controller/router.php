<?php
require_once('viewController.php');
class Router
{
    public function __construct()
    {
        $home = new viewController();

        $vista = "index";

        if (isset($_GET['r'])) {

            if ($_GET['r'] == "evento") {
                if (isset($_GET['idevento'])) {
                    $vista = "index";
                } else {
                    $vista = "evento";
                }
            } else if ($_GET['r'] == "novedad") {
                if (isset($_GET['idnovedad'])) {
                    $vista = "index";
                } else {
                    $vista = "novedad";
                }
            } 

        }
        $home->load_view($vista);
    }
}
