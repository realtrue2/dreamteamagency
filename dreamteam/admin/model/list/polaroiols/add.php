<?php

 $url = $_POST['url'];
$url = substr(strstr($url, '='), 1, strlen($url));
$url = str_replace ('%20',' ',$url);
 echo '<script type="text/javascript">console.log("'.$url.'")</script>';
   foreach ($_FILES as $key=>$value) { 
       
      $image = $value;
 
       $tmp_path = "../../../../tmp/";

      $image = $image['name'];
      echo '<script type="text/javascript">console.log("imageresize-'.$image.'")</script>';
      $imageFormat = explode('.', $image);
      $imageFormat = $imageFormat[1];
    $dir = '/'.$url.'/polaroiols/';
      $imageFullName = '../../../../'.$url.'/polaroiols/images/' . hash('crc32',time()) . '.' .$imageFormat;
   
      echo '<script type="text/javascript">console.log("'.$imageFullName.'")</script>';
       move_uploaded_file($value['tmp_name'],$imageFullName);
      
    
       $name = substr(strstr($imageFullName, 'images/'), 7, strlen($imageFullName));
       $imageFullName = str_replace (' ','%20',$imageFullName);
       ?>
<div class="photocontainer">
			                     <div class="modelimg" style="background-image:url(<?php echo $imageFullName; ?>);"></div>
			                     <div class="modelname"><span id="delete"><div onClick="deleteFunction(this,'<?php echo $url; ?>','<?php echo $name; ?>')">Удалить</div></span></div>
		                      </div>
<?php
}
?>