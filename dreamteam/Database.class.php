<?php

class Database {
    protected $db_name = 'dreamtea_model';
    protected $db_user = 'dreamtea_sasha';
    protected $db_pass = 'Laxinar_123';
    protected $db_host = 'localhost';
    
    function connect(){
        $link = mysqli_connect($this->db_host,$this->db_user,$this->db_pass,$this->db_name)
            or die ("Error: ".mysqli_error($link));
        if(!mysqli_set_charset($link,"utf8")){
            printf("Error: ".mysqli_error($link));
        }
        return $link;
    }

    

}
?>