<?php
require_once('./model/subcategoriaModel.php');
class SubcategoriaController{
    private $model;

    public function __construct(){
        $this->model= new SubcategoriaModel();
    }
    public function read(){
       return $this->model->read();
    }

    public function obtenerSubcategorias($idCategoria){
        return $this->model->filtrarPorCategoria($idCategoria);
     }
} 