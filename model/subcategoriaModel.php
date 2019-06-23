<?php
require_once('Model.php');
class SubcategoriaModel extends Model
{

  public $id;
  public $nombre;
  public $id_categoria;

  public function create()
  { }

  public function read()
  {
    $sql = "SELECT * FROM subcategoria";
    $this->query = $sql;
    $data = $this->get_query();
    return $data;
  }

  public function filtrarPorCategoria($id_categoria)
  {
    $sql = "SELECT * FROM subcategoria WHERE id_categoria = $id_categoria";
    $this->query = $sql;
    $data = $this->get_query();
    return $data;
  }
  
  public function update()
  { }

  public function delete()
  { }
}
