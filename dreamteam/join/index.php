<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DTA</title>

<link rel="stylesheet" type="text/css" href="../reset.css">
<link rel="stylesheet" type="text/css" href="styles.css">

<script type="text/javascript" src="../jquery.js"></script>
<script type="text/javascript" src="../js/handler.js"></script>
<script type="text/javascript" src="../js/upload.js"></script>
<script type="text/javascript" src="../js/update.js"></script>
<script type="text/javascript" src="valid.js"></script>  
</head>
<body>
<div id="p_prldr"><div class="contpre"><span class="svg_anm"></span></div></div>

<form onsubmit="return false;" id="modelform" name="questionnaire-form" class="questionnaire" action="../main.php" method="post" enctype = 'multipart/form-data'>
	<h2 class="logheader">
		Application
	</h2>
    <div style="margin-top: 50px;" class="center">
	<input  placeholder="Name" class="input questionnaire-input" name="name" id="name">
	<ul class="input-requirements">
					<li>At least 3 characters long</li>
					<li>Must only contain letters (no special characters)</li>
	</ul>
	<input placeholder="City" class="input questionnaire-input" name="city" id="city" >
	<ul class="input-requirements">
					<li>At least 3 characters long</li>
					<li>Must only contain letters (no special characters)</li>
	</ul>
	<input placeholder="Phone" class="input questionnaire-input" name="phone" id="phone">
	<ul class="input-requirements">
		<li>field must contain the correct number
(for example: +79261234567, 89261234567, 8 (926) 123-45-67</li>
	</ul>
	<input placeholder="Mail" class="input questionnaire-input" name="mail" id="mail">
	<ul class="input-requirements">
		<li>field must contain a valid email address
(for example: example123@mail.ru)</li>
	</ul>
	<input placeholder="VK" class="input questionnaire-input" name="vk" id="vk">
		<ul class="input-requirements">
					<li>the field should contain a link to the VK
(for example: vk.com/yourname)</li>
	</ul>
	<input placeholder="Instagram" class="input questionnaire-input" name="inst" id="inst">
		<ul class="input-requirements">
					<li>the field must contain a reference to the instagram
(for example: http://instagram.com/yourname)</li>
	</ul>
    </div>
		<div class="center">
		<div class="left">
		<input  placeholder="Height" class="input questionnaire-input-min" name="height" id="height">
		<ul style="width: 200px;" class="input-requirements">
					<li>field must contain no more than 3 digits
			   </li>
	</ul>
		<input placeholder="Age" class="input questionnaire-input-min" name="age" id="age" >
		<ul style="width: 200px;" class="input-requirements">
					<li>field must contain no more than 3 digits
			   </li>
	</ul>
		<input placeholder="Shoe" class="input questionnaire-input-min" name="shoe" id="shoe" >
		<ul style="width: 200px;" class="input-requirements">
					<li>field must contain no more than 3 digits
			   </li>
	</ul>
        <input placeholder="Hair color" class="input questionnaire-input-min"  name="hair" id="hair">
        <ul style="width: 200px;" class="input-requirements">
					<li>field must contain only letters
			   </li>
				</ul>
	</div>
	<div class="right">
        <input placeholder="Eye color" class="input questionnaire-input-min"  name="eyes" id="eyes">
           <ul style="width: 200px;" class="input-requirements">
					<li>field must contain only letters
			   </li>
				</ul>
		<input placeholder="Chest" class="input questionnaire-input-min" name="chest" id="chest">
		   <ul style="width: 200px;" class="input-requirements">
					<li>field must contain no more than 3 digits
			   </li>
				</ul>
		<input placeholder="Waist" class="input questionnaire-input-min" name="waist" id="waist">
		   <ul style="width: 200px;" class="input-requirements">
					<li>field must contain no more than 3 digits
			   </li>
				</ul>
		<input placeholder="Hips" class="input questionnaire-input-min"  name="hips" id="hips">
		   <ul style="width: 200px;" class="input-requirements">
					<li>field must contain no more than 3 digits
			   </li>
				</ul>
	</div>
	</div>
	<div style="clear: both;"></div>
	<div class="text">
		<p>Select photos</p>
		<ul style="width: 200px;font-family: Verdana,Geneva,sans-serif;font-style: italic;" class="input-requirements">
					<li>must choose four photos
			   </li>
				</ul>
	</div>
		<div class="imageblock">
			<div class="tableleft">
			 <input  type="file" name="filename"  style="display: none;" />
			<div  class="tableimage">
			<div class="upload">click for upload</div>
				<div class="progress_div"><div class="progress_bar">
					<div id="progress_status"></div>
				</div></div>

			</div>
			
     
			</div>
			<div class="tableright">
			<input  type="file" name="filename2" style="display: none;" />
				<div  class="tableimage">
				<div class="upload">click for upload</div>
						<div class="progress_div"><div class="progress_bar">
					<div id="progress_status"></div>
				</div></div>
				</div>
				 
			</div>
	</div> 
		<div class="imageblock">
			<div class="tableleft">
			 <input  type="file" name="filename3"  style="display: none;" />
			<div  class="tableimage">
			<div class="upload">click for upload</div>
				<div class="progress_div"><div class="progress_bar">
					<div id="progress_status"></div>
				</div></div>
			</div>
     
			</div>
			<div class="tableright">
			<input  type="file" name="filename4"  style="display: none;" />
				<div  class="tableimage">
				<div class="upload">click for upload</div>
						<div class="progress_div"><div class="progress_bar">
					<div id="progress_status"></div>
				</div></div>

				</div>
				
			</div>
	</div> 
	
  <div class="btn_container">
  	<input type="button"  name="questionnaire-form" onClick="validForm(this.form)" class="btn" value="Submit">
  </div>
	
		

</form>

 
</body>
</html>