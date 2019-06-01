<?php
require_once('./model/sliderModel.php');
class SliderController{
    private $model;


    public function __construct(){
        $this->model= new SliderModel();
    }
    public function read(){
       return $this->model->read();

    }
    // public function rows(){
    //     return $this->model->rows();
    // }
}