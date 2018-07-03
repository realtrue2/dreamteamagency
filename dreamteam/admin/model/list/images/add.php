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
    $dir = '/'.$url.'/images/';
      $imageFullName = '../../../../'.$url.'/images/' . hash('crc32',time()) . '.' .$imageFormat;
   
     
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
   
function resize($file)
{
     echo '<script type="text/javascript">console.log("tyo-'.$file['name'].'")</script>';
      echo '<script type="text/javascript">console.log("tyo-'.$file['type'].'")</script>';
 $tmp_path = "../../../../tmp/";
    
    if ($file['type'] == 'image/jpeg'){
        
        $source = imagecreatefromjpeg($file['tmp_name']);
    }

elseif ($file['type'] == 'image/png')
$source = imagecreatefrompng($file['tmp_name']);
elseif ($file['type'] == 'image/gif')
$source = imagecreatefromgif($file['tmp_name']);
else
return false;
$max_size = 1000;
    
$size = getimagesize($file['tmp_name']);
     echo '<script type="text/javascript">console.log("-'.$size[0].'")</script>';
     echo '<script type="text/javascript">console.log("-'.$size[1].'")</script>';
$w_src = $size[0];
$h_src = $size[1];
if($w_src>$h_src){
    $type = 1;
}else $type = 2;
// Если ширина больше заданной
    if ($type == 1){
        $w = $max_size;
        if ($w_src > $w)
        {

            // Вычисление пропорций
            
            $ratio = $w_src/$w;
            $w_dest = round($w_src/$ratio);
            $h_dest = round($h_src/$ratio);
        }
    }
    elseif ($type == 2){
        $h = $max_size;
         if ($h_src > $h)
         {

            // Вычисление пропорций
            $ratio = $h_src/$h;
            $w_dest = round($w_src/$ratio);
            $h_dest = round($h_src/$ratio);
         }
    }
    $dest = imagecreatetruecolor($w_dest, $h_dest);
    imagecopyresampled($dest, $source, 0, 0, 0, 0, $w_dest, $h_dest, $w_src, $h_src);
    $quality = 100;
    imagejpeg($dest, $tmp_path . $file['name'], $quality);


    echo '<script type="text/javascript">console.log("tmpname-'.$tmp_path . $file['name'].'")</script>';
    imagedestroy($dest);

    imagedestroy($source);

    return $file['name'];
}
?>