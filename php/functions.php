<?php
    function insertTask(){
        if(isset($_GET['add-task'])){
            if(!empty($_GET['items'])){
                $insert = new Insert($_GET['items']);
                if($insert->insertTask()){
                echo '<div class="alert alert-success" role="alert">
                        Successfully Inserted!
                      </div>';
                }else {
                echo '<div class="alert alert-danger" role="alert">
                        Failed to Insert!
                      </div>';
                }
            }
        }
    }
?>