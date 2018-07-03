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
<body>
<?php 
     require_once "../../global.inc.php";
    if(isset($_SESSION["admin"])){
        if($_SESSION["admin"]=='admin'){
            echo '<div id="p_prldr"><div class="contpre"><span class="svg_anm"></span></div></div>
<div class="select">
	<div class="select_left">
		<div class="button">
			<p><a href="../model/">Модели</a></p>
		</div>
	</div>
	<div class="select_border"></div>
	<div class="select_right">
		<div class="button">
			<p><a href="../questionnaires/">Анкеты</a></p>
		</div>
	</div>
</div>';
        } 
    }else {
                    header("Location: ../");
                }
 ?>


		

 
</body>
</html>