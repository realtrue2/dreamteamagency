<?php 
    
    require_once("DBmodels.php");
    require_once("global.inc.php");
    

$tmp_path = '/tmp/';

if(isset($_POST['filename'])) { 
      echo ('dsad');
    $img1='';
    $img2='';
    $img3='';
    $img4='';
    if(isset($_POST['filename'])) {
          $img1= $_POST['filename'];
    }
     if(isset($_POST['filename2'])) {
          $img2= $_POST['filename2'];
    }
     
     if(isset($_POST['filename3'])) {
          $img3= $_POST['filename3'];
    }
     
     if(isset($_POST['filename4'])) {
          $img4= $_POST['filename4'];
    }
     
     
       
       
      if(isset($_POST['name'])) {
          $name= $_POST['name'];
          if(isset($_POST['city'])) {
            $city= $_POST['city'];
          }
          if(isset($_POST['phone'])) {
            $phone= $_POST['phone'];
          }
          if(isset($_POST['mail'])) {
            $mail= $_POST['mail'];
          }
          if(isset($_POST['vk'])) {
            $vk= $_POST['vk'];
          }
          if(isset($_POST['inst'])) {
            $inst= $_POST['inst'];
          }
          if(isset($_POST['height'])) {
            $height= $_POST['height'];
          }
          if(isset($_POST['age'])) {
            $age= $_POST['age'];
          }
          if(isset($_POST['shoe'])) {
            $shoe= $_POST['shoe'];
          }
          if(isset($_POST['chest'])) {
            $chest= $_POST['chest'];
          }
          if(isset($_POST['waist'])) {
            $waist= $_POST['waist'];
          }
          if(isset($_POST['hips'])) {
            $hips= $_POST['hips'];
          }
          if(isset($_POST['eyes'])) {
            $eyes= $_POST['eyes'];
          }
          if(isset($_POST['hair'])) {
            $hair= $_POST['hair'];
          }
          add_questionnaire($link,$name,$city,$phone,$mail,$vk,$inst,$height,$age,$shoe,$chest,$waist,$hips,$img1,$img2,$img3,$img4,$hair,$eyes);
       header("Location: /");
          
      }
   
}

if(isset($_POST['newmodel-form'])) { 
     if(isset($_POST['name'])) {
          $name= $_POST['name'];
          mkdir($name, 0777);
          mkdir($name."/images", 0777);
         mkdir($name."/polaroiols", 0777);
         mkdir($name."/polaroiols/images", 0777);
     }
    if(isset($_POST['city'])) {
            $city= $_POST['city'];
          }
          if(isset($_POST['phone'])) {
            $phone= $_POST['phone'];
          }
          if(isset($_POST['mail'])) {
            $mail= $_POST['mail'];
          }
        
          if(isset($_POST['height'])) {
            $height= $_POST['height'];
              
          }
          if(isset($_POST['age'])) {
            $age= $_POST['age'];
          }
          if(isset($_POST['shoe'])) {
            $shoe= $_POST['shoe'];
          }
          if(isset($_POST['chest'])) {
            $chest= $_POST['chest'];
          }
          if(isset($_POST['waist'])) {
            $waist= $_POST['waist'];
          }
          if(isset($_POST['hips'])) {
            $hips= $_POST['hips'];
          }
          if(isset($_POST['eyes'])) {
            $eyes= $_POST['eyes'];
          }
          if(isset($_POST['hair'])) {
            $hair= $_POST['hair'];
          }
          if(isset($_POST['man'])) {
            $gender= 'man';
          }else if(isset($_POST['woman'])) {
            $gender= 'woman';
          }
         if(!empty($_FILES['mainphoto'])){
        $uploaddir = $name.'/images/';
        $imgdir = $uploaddir;
        $image = $_FILES['mainphoto'];
        // Достаем формат изображения
        $imageFormat = explode('.', $image['name']);
        $imageFormat = $imageFormat[1];
 
        // Генерируем новое имя для изображения. Можно сохранить и со старым
        // но это не рекомендуется делать
        $imageFullName = $uploaddir . hash('crc32',time()) . '.' . $imageFormat;
 
        // Сохраняем тип изображения в переменную
        $imageType = $image['type'];
        move_uploaded_file($image['tmp_name'],$imageFullName);
         $img= $imageFullName;
         
     
    }
     if(!empty($_FILES['userfile'])){
        $uploaddir = $name.'/images/';
        
        for ($i=0; $i<count($_FILES['userfile']['name']); $i++) {
            
             $imageFormat = explode('.',$_FILES['userfile']['name'][$i]);
             $imageFormat = $imageFormat[1];
             $imageFullName = $uploaddir . hash('crc32',time()) .$i. '.' . $imageFormat;
          
             move_uploaded_file($_FILES['userfile']['tmp_name'][$i],$imageFullName);
        }
    }
    $file = 'model/index.php';
    $new_file = $name.'/index.php';
    copy($file, $new_file);
    $file = 'model/polaroiols/index.php';
    $new_file = $name.'/polaroiols/index.php';
    copy($file, $new_file);
    if($height < '170' && $gender== 'woman'){
                  $petite ='yes';
              }else {
                   $petite = 'no';
              }
    add_model($link,$name,$city,$phone,$mail,$height,$age,$shoe,$chest,$waist,$hips,$imgdir,$img,$hair,$eyes,$gender,$petite);
    header("Location: /");
}
if(isset($_GET['action'])){
    $action = $_GET['action'];
    
    if($action == 'delete'){
        $name = $_GET['name'];
        removeDirectory($name);
        model_delete($link,$name);
          header("Location: /admin/model/");
    }
  
  
}
if(isset($_GET['action'])){
    $action = $_GET['action'];
    
    if($action == 'qdelete'){
        $id = $_GET['id'];
        questionnaire_delete($link,$id);
        header("Location: /admin/questionnaires/");
    }
  

}
if(isset($_GET['action'])){
    $action = $_GET['action'];
    
    if($action == 'deletephoto'){
        $directory = $_GET['dir'];
        $dir = opendir($directory); 
        $name = $_GET['name'];
        echo $name;
         echo '<br>'.$directory;
        unlink($directory.$name);
        closedir($dir); 
       
    }
  

}
if(isset($_POST['change-model-form'])) {
     if(isset($_POST['name'])) {
            $name= $_POST['name'];
          }
    if(isset($_POST['city'])) {
            $city= $_POST['city'];
          }
          if(isset($_POST['phone'])) {
            $phone= $_POST['phone'];
          }
          if(isset($_POST['mail'])) {
            $mail= $_POST['mail'];
          }
        
          if(isset($_POST['height'])) {
            $height= $_POST['height'];
          }
          if(isset($_POST['age'])) {
            $age= $_POST['age'];
          }
          if(isset($_POST['shoe'])) {
            $shoe= $_POST['shoe'];
          }
          if(isset($_POST['chest'])) {
            $chest= $_POST['chest'];
          }
          if(isset($_POST['waist'])) {
            $waist= $_POST['waist'];
          }
          if(isset($_POST['hips'])) {
            $hips= $_POST['hips'];
          }
          if(isset($_POST['eyes'])) {
            $eyes= $_POST['eyes'];
          }
          if(isset($_POST['hair'])) {
            $hair= $_POST['hair'];
          }
    
     update_model($link,$name,$city,$phone,$mail,$height,$age,$shoe,$chest,$waist,$hips,$hair,$eyes);
     header("Location: /admin/model/");
}
function removeDirectory($dir) {
    if ($objs = glob($dir."/*")) {
       foreach($objs as $obj) {
         is_dir($obj) ? removeDirectory($obj) : unlink($obj);
       }
    }
    rmdir($dir);
  }
function resize($file)
{
    global $tmp_path;
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
    echo $size[0];
     echo "-".$size[1];
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