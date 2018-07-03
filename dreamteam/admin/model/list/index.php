<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DTA - агенство</title>

<link rel="stylesheet" type="text/css" href="../../../reset.css">
<link rel="stylesheet" type="text/css" href="../../../styles.css">

<script type="text/javascript" src="../../../jquery.js"></script>
<script type="text/javascript" src="../../../js/handler.js"></script>
<script type="text/javascript" src="../../../js/upload.js"></script>
<script type="text/javascript" src="../../../js/update.js"></script>
   
</head>
    <?php 
        require_once '../../../Database.class.php';
        require_once "../../../DBmodels.php";
        $db = new Database();
        $link = $db->connect();
    ?>
<body>
<div id="p_prldr"><div class="contpre"><span class="svg_anm"></span></div></div>

		<?php 
            require_once "../../../global.inc.php";
            if(isset($_SESSION["admin"])){
                if($_SESSION["admin"]=='admin'){
                    echo '<form class="questionnaire" method="post" action="../../../main.php" enctype = "multipart/form-data">';
                    $id = $_GET["id"];
                    $model = get_model($link,$id);
                    foreach($model as $val){
                        echo('<h2 class="logheader">'.$val["name"].'</h2>');
                    }
                foreach($model as $val){
                
                echo('<input style="margin-top: 50px;" placeholder="Name" class="input questionnaire-input" name="name" id="field_name" value="'.$val["name"].'"  type="text" required readonly="readonly" > ');
                echo('<input placeholder="City" class="input questionnaire-input required" name="city" id="field_name" value="'.$val["city"].'" required="" type="text">');
                echo('<input placeholder="Phone" class="input questionnaire-input required" name="phone" id="field_name" value="'.$val["phone"].'" required="" type="text">');
                echo('<input placeholder="Mail" class="input questionnaire-input required" name="mail" id="field_name" value="'.$val["mail"].'" required="" type="text">');
                echo('<div class="center">');
                echo('<div class="left">');
                echo('<input placeholder="Height" class="input questionnaire-input-min required" maxlength="3" name="height" id="field_name" value="'.$val["height"].'" required="" type="text">');
                echo('<input placeholder="Age" class="input questionnaire-input-min required" maxlength="3" name="age" id="field_name" value="'.$val["age"].'" required="" type="text">');
                echo('<input placeholder="Shoe" class="input questionnaire-input-min required" maxlength="3" name="shoe" id="field_name" value="'.$val["shoe"].'" required="" type="text">');
                echo(' <input placeholder="Hair color" class="input questionnaire-input-min required"  name="hair" id="field_name" value="'.$val["hair"].'" required="" type="text">');
                echo('</div>');
                echo('<div class="right">');
                echo('<input placeholder="Eye color" class="input questionnaire-input-min required"  name="eyes" id="field_name" value="'.$val["eyes"].'" required="" type="text">');
                echo('<input placeholder="Chest" class="input questionnaire-input-min required" maxlength="3" name="chest" id="field_name" value="'.$val["chest"].'" required="" type="text">');
                echo('<input placeholder="Waist" class="input questionnaire-input-min required" maxlength="3" name="waist" id="field_name" value="'.$val["waist"].'" required="" type="text">');
                echo('<input placeholder="Hips" class="input questionnaire-input-min required" maxlength="3" name="hips" id="field_name" value="'.$val["hips"].'" required="" type="text">');
                echo('</div>');
                echo('<div style="clear: both;"></div>');
                echo('<div class="imageblock">');
                echo '<div class="tableimage" style="background-image:url(\'../../../'.$val['img'].'\');margin: 0 auto;"></div>';
                
                
                echo('</div>');
                
                echo('</div>'); 
            }
                     
                    echo '<span class="btn_container"  style="margin:0px;"><input type="submit" name="change-model-form" class="btn" value="Сохранить"></span></form>';
                }
                echo '<span class="btn_container" style="margin-bottom:20px;width:845px;border-right:1px solid black;border-bottom:1px solid black;border-left:1px solid black;margin-right:auto;margin-left:auto;"><div class="btn"><a href="images/index.php?name='.$val["name"].'">Портфолио</a></div></span>';
                 echo '<span class="btn_container" style="margin-bottom:20px;width:845px;border-right:1px solid black;border-bottom:1px solid black;border-left:1px solid black;margin-right:auto;margin-left:auto;"><div class="btn"><a href="polaroiols/index.php?name='.$val["name"].'">Polaroiols</a></div></span>';
                 echo '<span class="btn_container" style="margin-bottom:40px;width:845px;border-right:1px solid black;border-bottom:1px solid black;border-left:1px solid black;margin-right:auto;margin-left:auto;"><div class="btn"><a href="video/index.php?name='.$val["name"].'">Video</a></div></span>';
            }else {header("Location: /admin/");}
            
            
        
        
          
    ?>


 
</body>
</html>