<?php
require_once('Model.php');
class SliderModel extends Model {
        public $id;
        public $url;
        public $texto;  
         public function create(){

         } 
        public function read(){
            $sql="SELECT * FROM slider";
            $this->query=$sql;
            $this->get_query();
         $num_rows= count($this->rows);
         $data= array();
         foreach($this->rows as $key => $value){
           array_push($data,$value);
         }
         return $data;
        }
        public function rows(){
          $sql="SELECT * FROM slider";
            $this->query=$sql;
            $num_rows2=  $this->rowsA();
          return $num_rows2;
        }
        public function update(){
           
        }
        public function delete(){
        }
        
}