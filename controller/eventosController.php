 <?php
 require_once('./model/eventosModel.php');
 class EventoController{
 	 private $model;

    public function __construct(){
        $this->model= new EventoModel();
    }
    public function read(){
       return $this->model->read();
    }
 }