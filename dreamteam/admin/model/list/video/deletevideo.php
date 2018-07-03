<?php 
require_once '../../../../Database.class.php';
        require_once "../../../../DBmodels.php";
        $db = new Database();
        $link = $db->connect();
       if (isset($_POST['name'])) {
        $name = $_POST['name'];
          
           
           if (isset($_POST['id'])) {
                $id = $_POST['id'];
              
               video_delete($link,$name,$id);
        
           }
       }
    
        
    
    
?>