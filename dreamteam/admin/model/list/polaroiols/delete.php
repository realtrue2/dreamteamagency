<?php 

       if (isset($_POST['name'])) {
        $name = $_POST['name'];
           echo  $name;
           
           if (isset($_POST['dir'])) {
                $dir = $_POST['dir'];
                echo  $dir;
               $directory = '../../../../'.$name.'/polaroiols/images/';
        
        unlink($directory.$dir);
        
           }
       }
    
        
    
    
?>