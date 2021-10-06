<?php 

    class Insert extends config{
        public $task;

        public function __construct($task)
        {
           $this->task = $task; 
        }

        public function insertTask(){
            $connection = $this->connection();
            $sql = "INSERT INTO `tbl_todolist`(`item`)VALUES('$this->task')";
            $data = $connection->prepare($sql);
            if($data->execute()){
                return true;
            }else{
                return false;
            }
        }
    }

?>