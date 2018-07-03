<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DTA - агенство</title>

		<link rel="stylesheet" type="text/css" href="../../../../reset.css">
			<link rel="stylesheet" type="text/css" href="../../../../styles.css">

<script type="text/javascript" src="../../../../jquery.js"></script>
		<script type="text/javascript" src="../../../../js/handler.js"></script>
			<script type="text/javascript" src="../../../../js/upload.js"></script>
<script type="text/javascript" src="../../../../js/update.js"></script>
<script type="text/javascript" src="../../../../js/delete.js"></script>   
    <script type="text/javascript" src="../../../../js/add.js"></script>   
    <?php
     require_once '../../../../Database.class.php';
        require_once "../../../../DBmodels.php";
        $db = new Database();
        $link = $db->connect();
    $name = $_GET['name'];
?>
</head>
<body>
<div id="p_prldr"><div class="contpre"><span class="svg_anm"></span></div></div>

<div class="questionnaire" style="width: 900px;" method="post" >
	<h2 class="logheader">
		<?php echo($name) ?>
	</h2>
    <div class="photolist">
    <?php
       
        $dir ='../../../../'.$name.'/polaroiols/images/'; // Папка с изображениями
        $files = scandir($dir); // Берём всё содержимое директории
        for ($i = 0; $i < count($files); $i++) {
                if (($files[$i] != ".") && ($files[$i] != "..")) {
                 
                    $size = getimagesize($dir.$files[$i]);
               
                    $path = $dir.$files[$i];
                     $path = str_replace (' ','%20',$path);
                    
                    if($size[0]<$size[1]){
                      
                        echo '<div class="photocontainer">
			                     <div class="modelimg" style="background-image:url('.$path.');"></div>
			                     <div class="modelname"><span id="delete"><div onClick="deleteFunction(this,\''.$name.'\',\''.$files[$i].'\')">Удалить</div></span></div>
		                      </div>';
                    }else if($size[1]<=$size[0]){
                        
                        echo '<div class="photocontainer style="width: 560px;">
			                       <div class="modelimg" style="background-image:url('.$path.');"></div>
			                     <div class="modelname"><span id="delete"><div onClick="deleteFunction(this,\''.$name.'\',\''.$files[$i].'\')">Удалить</div></span></div>
		                      </div>';
                    }
                }
        }
    ?>

		</div>
			<form style="width:100%;"  enctype = "multipart/form-data">
    <div class="fileupload" style="width:100%;border:0px solid black;border-top:1px solid black;border-radius:0px;;">
		<label>
		<input id="add" name="userfile[]" multiple="" accept="image/*" type="file">
		<span>Выберите изображения</span>
		</label>

	

  </div>
        </form>
	</div>



 
</body>
</html>