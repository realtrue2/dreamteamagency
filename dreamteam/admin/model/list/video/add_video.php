<?php
require_once '../../../../Database.class.php';
        require_once "../../../../DBmodels.php";
        $db = new Database();
        $link = $db->connect();

	$video = $_POST['video'];
	$pos = strpos($video, "src");
$video = substr($video,$pos);

$video= "<iframe height='225' ".$video;
$name = $_GET['name'];
 echo '<script type="text/javascript">console.log("'.$name.'")</script>';
$id = add_video($link,$name,$video);

       ?>
<div class="video">
			                     <?php echo $video; 
			                        echo '<div class="modelname"><span id="delete"><div onClick="deleteFunction(this,\''.$name.'\',\''.$id.'\')">Удалить</div></span></div>';
			                        ?>
		                      </div>
 

 	
  
<?php

?>