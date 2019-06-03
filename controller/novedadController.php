<?php
require_once('./model/novedadModel.php');
class NovedadController{
    private $model;

    public function __construct(){
        $this->model= new NovedadModel();
    }
    public function read(){
       return $this->model->read();
    }
} 