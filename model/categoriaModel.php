<?php
require_once('Model.php');
require_once('subcategoriaModel.php');
class CategoriaModel extends Model
{

  public $id;
  public $nombre;

  public function __construct()
  { }

  public function create()
  { }

  public function read()
  {
    $sql = "SELECT * FROM categoria";
    $this->query = $sql;
    $data = $this->get_query();
    return $data;
  }

  public function update()
  { }

  public function delete()
  { }

}
