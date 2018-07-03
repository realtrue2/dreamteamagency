<?php

   foreach ($_FILES as $key => $value) { 
      $image = $value;
      $image = resize($image);
      $imageFormat = explode('.', $image);
      $imageFormat = $imageFormat[1];
      $imageFullName = 'images/' . hash('crc32',time()) . '.' . $imageFormat;
      move_uploaded_file($value['tmp_name'],$imageFullName);
       ?>
<div class="tableimage photol" data-id="<?php echo $imageFullName; ?>" style="background-image: url('<?php echo $imageFullName; ?>');display:block;margin:0px;border:none;"></div>
<?php
}
   
function resize($file)
{
    $tmp_path = '/tmp/';
    if ($file['type'] == 'image/jpeg')
$source = imagecreatefromjpeg($file['tmp_name']);
elseif ($file['type'] == 'image/png')
$source = imagecreatefrompng($file['tmp_name']);
elseif ($file['type'] == 'image/gif')
$source = imagecreatefromgif($file['tmp_name']);
else
return false;
$max_size = 1000;
$size = getimagesize($file['tmp_name']);
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

    imagedestroy($dest);

    imagedestroy($source);
    return $file['name'];
}
?>