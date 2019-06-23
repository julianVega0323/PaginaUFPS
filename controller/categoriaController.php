<?php
require_once('./model/categoriaModel.php');
class CategoriaController
{
   private $model;

   public function __construct()
   {
      $this->model = new CategoriaModel();
   }

   public function read()
   {
      return $this->model->read();
   }
}
