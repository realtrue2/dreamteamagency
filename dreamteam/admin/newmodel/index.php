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
    <div id="p_prldr"><div class="contpre"><span class="svg_anm"></span></div></div>
    <?php 
        require_once "../../global.inc.php";
            if(isset($_SESSION["admin"])){
                if($_SESSION["admin"]=='admin'){
                    echo '<form class="questionnaire" method="post" action="../../main.php" enctype = "multipart/form-data">
	<h2 class="logheader">
		Новая модель
	</h2>
	<input style="margin-top: 50px;" placeholder="Name" class="input questionnaire-input" name="name" id="field_name" value=""  type="text" required>
	<input placeholder="City" class="input questionnaire-input required" name="city" id="field_name" value="" required="" type="text">
	<input placeholder="Phone" class="input questionnaire-input required" name="phone" id="field_name" value="" required="" type="text">
	<input placeholder="Mail" class="input questionnaire-input required" name="mail" id="field_name" value="" required="" type="text">
	<div class="center">
		<div class="left">
		<input placeholder="Height" class="input questionnaire-input-min required" maxlength="3" name="height" id="field_name" value="" required="" type="text">
		<input placeholder="Age" class="input questionnaire-input-min required" maxlength="3" name="age" id="field_name" value="" required="" type="text">
		<input placeholder="Shoe" class="input questionnaire-input-min required" maxlength="3" name="shoe" id="field_name" value="" required="" type="text">
            <input placeholder="Hair color" class="input questionnaire-input-min required"  name="hair" id="field_name" value="" required="" type="text">
	</div>
	<div class="right">
        <input placeholder="Eye color" class="input questionnaire-input-min required"  name="eyes" id="field_name" value="" required="" type="text">
		<input placeholder="Chest" class="input questionnaire-input-min required" maxlength="3" name="chest" id="field_name" value="" required="" type="text">
		<input placeholder="Waist" class="input questionnaire-input-min required" maxlength="3" name="waist" id="field_name" value="" required="" type="text">
		<input placeholder="Hips" class="input questionnaire-input-min required" maxlength="3" name="hips" id="field_name" value="" required="" type="text">

	</div>
	</div>
	<div style="clear: both;"></div>
	<div class="radio">
		  <ul>
  <li>
    <input type="radio" id="woman" name="woman">
    <label for="woman">Woman</label>
    
    <div class="check"></div>
  </li>
  
  <li>
    <input type="radio" id="man" name="man">
    <label for="man">Man</label>
    
    <div class="check"><div class="inside"></div></div>
  </li>
  </ul>
	</div>
	<div style="clear: both;"></div>
	<div class="imageblock">		
				<div style="margin: 0 auto;" class="tableimage">
						
				</div>
				<input  type="file" name="mainphoto" style="display: none;" />		
	</div>

	<div class="fileupload">
		<label>
		<input type="file" name="userfile[]"  multiple  accept="image/*" >
		<span>Выберите изображения</span>
		</label>

	

  </div>
	<span class="btn_container">
	
		<input type="submit" name="newmodel-form" class="btn" value="Добавить">
	</span>
</form>
';
                }
            }
    ?>



 
</body>
</html>