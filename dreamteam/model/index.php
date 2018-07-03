<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
 <?php  
            $name = basename(dirname(__FILE__));
             echo  '<title>'.$name.' | DTA</title>';
          
  ?>

		<link rel="stylesheet" type="text/css" href="../reset.css">
			<link rel="stylesheet" type="text/css" href="../styles.css">
<script type="text/javascript" src="../jquery.js"></script>
<script type='text/javascript' src='../slider.js'></script>
<script type='text/javascript' src='../js/update.js'></script>
   <script type='text/javascript' src='../js/download.js'></script>
</head>
    <?php 
        require_once '../Database.class.php';
        require_once "../DBmodels.php";
        $db = new Database();
        $link = $db->connect();
    ?>
<body>
<div id="p_prldr"><div class="contpre"><span class="svg_anm"></span></div></div>

<header>
		<div class="header_model">
			<div class="header_item">
				<a href="../men/">Men</a>
			</div>
			<div class="header_item">
				<a href="../women/">Women</a>
			</div>
			
		</div>
		<div class="logo">
			<a href="../">DREAM TEAM AGENCY</a>
		</div>
			<div class="header_model">
       <div class="header_item">
                <a href="../join/">Become a model</a>
            </div>
			<div class="header_item">
				<a href="../about/">About</a>
			</div>
			<div class="header_item">
				<a href="../contact/">Contact</a>
			</div>
			
		</div>
	</header>
  <div class="modelheader">
        <?php  
            $name = basename(dirname(__FILE__));
             echo  '<h2>'.$name.'</h2>';
            $model = get_model_name($link,$name);

          
        ?>
      

    </div>
     <div style="padding-bottom: 15px;border-bottom: 1px solid #e2e2e2;;" class="parameters">
          
          <div class="parameter"><a style="color: black" href="">profile</a></div>
         <div class="parameter"><a href="polaroiols">polaroiols</a></div>
         <div class="parameter"><a href="">videos</a></div>
          
     </div>
     
         <ul class="icons_top" style="">
       <?php 
            echo '<li style="margin-left: 13px;width: 20px;height: 20px;" class="dl" onclick="Download(\''.$name.'\')">
                </li>';
       ?>
       
                 <li style="margin-left: 13px;width: 20px;height: 20px;" class="sh">
                 
                </li>
          </ul>
     
       
 
      <div class="parameters">
          <?php  
          foreach($model as $val){
          echo  '<div class="parameter">height - '.$val["height"].'</div>';
          echo  '<div class="parameter">chest - '.$val["chest"].'</div>';
          echo  '<div class="parameter">waist - '.$val["waist"].'</div>';
          echo  '<div class="parameter">hips - '.$val["hips"].'</div>';
          if($val["shoe"]!=0){
               echo  '<div class="parameter">shoe - '.$val["shoe"].'</div>';
          }
          echo  '<div class="parameter">hair - '.$val["hair"].'</div>';
          echo  '<div class="parameter">eyes - '.$val["eyes"].'</div>';
          
          
          }
          ?>
          </div>
         
  <div class="container" style="margin-bottom: 30px;">
  
  	<div class="carousel-arrow-left"><div class="arrow prev"></div></div>
  	<div class="carousel-hider ">

  	<ul class="carousel-list">
        <?php 
            $dir = 'images/'; // Папка с изображениями
            $files = scandir($dir); // Берём всё содержимое директории
          $k = 0;
            for ($i = 0; $i < count($files); $i++) {
                if (($files[$i] != ".") && ($files[$i] != "..")) {
                    $size = getimagesize($dir.$files[$i]);
                    if($size[0]<$size[1]){
                        for ($j = $i+1; $j < count($files); $j++) {
                            $size = getimagesize($dir.$files[$j]);
                             if($size[0]<$size[1]){
                                 $t = $files[$i+1];
                                 $files[$i+1] = $files[$j];
                                 $files[$j] = $t;
                             }
                        }
                        if(($i+1)< count($files)){
                            $path = $dir.$files[$i];
                            $path2 = $dir.$files[$i+1];
                             echo '<li class="slide">';
      
                        echo '<div class="photo" style="background-image:url(\''.$path.'\');"></div>';
                        echo '<div class="photo" style="background-image:url(\''.$path2.'\');"></div>';
                        echo '</li>';
                        $i++;
                        }else {
                            $path = $dir.$files[$i];
                            echo '<li class="slide">';
      
                        echo '<div class="photo" style="background-image:url(\''.$path.'\');"></div>';
                        echo '<div class="photo" style="background-image:url(\'../images/white.png\');"></div>';
                        echo '</li>';
                        }
                        
                        
                    }else {
                        $path = $dir.$files[$i];
                        echo '<li class="slide">';
      
                        echo '<div class="photo" style="background-image:url(\''.$path.'\');"></div>';
                        echo '</li>';
                    }
               
                $k++; // Увеличиваем вспомогательный счётчик
                }
            }
        ?>
  	</ul>
  </div>
   <div class="carousel-arrow-right"><div class="arrow next"></div></div>
</div>
<footer>
   <div class="footerline">
     <div class="footerleft">
      © 2018. Dream Team Agency
     </div><div class="social" style="display: inline-block;display: inline-block;vertical-align: middle;width: 33%;"><ul style="margin-top: 0px;width: 150px;margin: 0 auto;"><li style="margin-left: 13px;" class="vk">
                <a href="https://vk.com/dtagencyru"></a></li><li style="margin: 0px 26px 0px 26px; " class="fb"><a href="https://m.facebook.com/dtagencyrussia"></a></li><li style="margin-right: 13px;margin-left: 0px; " class="inst"><a href="https://www.instagram.com/dtagencyrussia"></a></li>
          </ul></div><div class="footerright">
            <a href="../join/">Become a model</a>
         </div>
   </div>
 </footer>
</body>
</html>