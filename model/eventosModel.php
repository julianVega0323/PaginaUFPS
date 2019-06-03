  <?php
require_once('Model.php');
class EventoModel extends Model {


        public function create(){
        } 

        public function read(){
          $sql = "SELECT * FROM evento";
          $this->query = $sql;
          $data = $this->get_query();
          return $data;
        }
        
        public function update(){
           
        }

        public function delete(){
        }

}
