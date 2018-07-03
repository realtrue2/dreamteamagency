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
   <script type="text/javascript" src="../../../js/popup.js"></script>
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
                    echo '<div class="questionnaire">';
                     $id = $_GET["id"];
                     $questionnaire = get_questionnaire($link,$id);
                     foreach($questionnaire as $val){
                        echo('<h2 class="logheader">'.$val["name"].'</h2>');
                     }
                    foreach($questionnaire as $val){
                    echo('<div style="margin-top: 50px;"  class="input questionnaire-input">'.$val["name"].'</div>');
                    echo('<div  class="input questionnaire-input">City - '.$val["city"].'</div>');
                    echo('<div  class="input questionnaire-input">Phone - '.$val["phone"].'</div>');
                    echo('<div  class="input questionnaire-input">Mail - '.$val["mail"].'</div>');
                    echo('<div  class="input questionnaire-input">VK - '.$val["vk"].'</div>');
                    echo('<div  class="input questionnaire-input">Instagram - '.$val["inst"].'</div>');
                    echo('<div class="center">');
                    echo('<div class="left">');
                    echo('<div class="input questionnaire-input-min required">Height - '.$val["height"].'</div>');
                    echo('<div class="input questionnaire-input-min required">Age - '.$val["age"].'</div>');
                    echo('<div class="input questionnaire-input-min required">Shoe - '.$val["shoe"].'</div>');
                    echo('<div class="input questionnaire-input-min required">Hair - '.$val["hair"].'</div>');
                    echo('</div>');
                    echo('<div class="right">');
                    echo('<div class="input questionnaire-input-min required">Eyes - '.$val["eyes"].'</div>');
                    echo('<div class="input questionnaire-input-min required">Chest - '.$val["chest"].'</div>');
                    echo('<div class="input questionnaire-input-min required">Waist - '.$val["waist"].'</div>');
                    echo('<div class="input questionnaire-input-min required">Hips - '.$val["hips"].'</div>');
                    echo('</div>');
                    echo('<div style="clear: both;"></div>');
                    echo('<div class="imageblock">');
                    echo('<div class="tableleft">');
                    echo '<div class="tableimage" style="background-image:url(\'../../../join/'.$val['img1'].'\');"></div>';
                    echo('</div>');
                
                    echo('<div class="tableright">');
                    echo '<div class="tableimage" style="background-image:url(\'../../../join/'.$val['img2'].'\');"></div>';
                    echo('</div>');
                    echo('</div>');
                    echo('<div class="imageblock">');
                    echo('<div class="tableleft">');
                    echo '<div class="tableimage" style="background-image:url(\'../../../join/'.$val['img3'].'\');"></div>';
                    echo('</div>');
                    echo('<div class="tableright">');
                    echo '<div class="tableimage" style="background-image:url(\'../../../join/'.$val['img4'].'\');"></div>';
                    echo('</div>');
                    }
                     echo('</div>');
                    
                }
            }else {
                header("Location: /admin/");
            }
           
            
        
        
            
    ?>


 
</body>
</html>