<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DTA - агенство</title>

		<link rel="stylesheet" type="text/css" href="../../reset.css">
			<link rel="stylesheet" type="text/css" href="../../styles.css">

<script type="text/javascript" src="../../jquery.js"></script>
		<script type="text/javascript" src="../../js/handler.js"></script>
			<script type="text/javascript" src="../../js/upload.js"></script>
<script type="text/javascript" src="../../js/update.js"></script>
   
</head>
    <?php 
        require_once '../../Database.class.php';
        require_once "../../DBmodels.php";
        $db = new Database();
        $link = $db->connect();
    ?>
<body>
 
<div id="p_prldr"><div class="contpre"><span class="svg_anm"></span></div></div>

    <?php
           require_once "../../global.inc.php";
            if(isset($_SESSION["admin"])){
                if($_SESSION["admin"]=='admin'){
                    
                    echo '<div style="width: 400px;" class="questionnaire">
	                           <h2 class="logheader">
		                          Анкеты
	                           </h2>';
                         $names = all_names_questionnaire($link);
                         echo('<table class="jointable">');
                         foreach($names as $name){
           
                            echo('<tr><td><a href="list/index.php?id='.$name["id"].'">'.$name["name"].'</a></td>');
                            echo('<td><a href="../../main.php?action=qdelete&id='.$name["id"].'">Удалить</a></td>');
                            echo "</tr>";
                         }
                         echo('</table>');
                         echo '</div>';
                }
            }else {
                    header("Location: /admin/");
                }

    ?>
	
		
	


 
</body>
</html>