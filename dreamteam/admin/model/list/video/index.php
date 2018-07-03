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
<script type="text/javascript" src="deletevideo.js"></script>   
<script type="text/javascript" src="addvideo.js"></script>   
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

<div class="questionnaire" style="width: 900px;">
	<h2 id="logh" class="logheader">
		<?php echo($name) ?>
	</h2>
	<form method="post" id="add_form" style="width:100%;">
    <div style="margin-top: 50px;" class="center">
     
    <input placeholder="Code" class="input questionnaire-input" name="video">
    </div>
		<span class="btn_container" ><input id="btn" type="button" style="width: 100%;" class="btn" value="Добавить видео"></span></form>
        </form>
	</div>
    <div class="questionnaire" style="width: 900px;">
    <h2 class="logheader">
        Video
    </h2>
    <div class="videolist">
<?php 
    $videos = get_video($link,$name);
    foreach($videos as $video){
        echo '<div class="video">';
        echo $video['video'];
        echo '<div class="modelname"><span id="delete"><div onClick="deleteFunction(this,\''.$name.'\',\''.$video['id'].'\')">Удалить</div></span></div>';
          echo '</div>';

    }
?>
</div>
</div> 

 
</body>
</html>