<?php
require_once('Model.php');
class NovedadModel extends Model {
  
        public $id;
        public $text;
        public $fecha;

        public function create(){
        } 

        public function read(){
          $sql = "SELECT * FROM novedad";
          $this->query = $sql;
          $data = $this->get_query();
          return $data;
        }
        
        public function update(){
           
        }

        public function delete(){
        }

}