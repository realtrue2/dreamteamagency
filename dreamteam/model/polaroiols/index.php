<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<?php  
             $name = basename(dirname(__DIR__));
             echo  '<title>'.$name.' | DTA</title>';
          
  ?>

		<link rel="stylesheet" type="text/css" href="../../reset.css">
			<link rel="stylesheet" type="text/css" href="../../styles.css">
<script type="text/javascript" src="../../jquery.js"></script>
<script type='text/javascript' src='../../slider.js'></script>
<script type='text/javascript' src='../../js/update.js'></script>
<script type='text/javascript' src='../../js/view.js'></script>
<style>
    figcaption:after {
     bottom: 30px; 
    }
  </style>

</head>
    <?php 
        require_once '../../Database.class.php';
        require_once "../../DBmodels.php";
        $db = new Database();
        $link = $db->connect();
    ?>
<body>
<div id="p_prldr"><div class="contpre"><span class="svg_anm"></span></div></div>

<header>
		<div class="header_model">
			<div class="header_item">
				<a href="../../men/">Men</a>
			</div>
			<div class="header_item">
				<a href="../../women/">Women</a>
			</div>
			
		</div>
		<div class="logo">
			<a href="../../">DREAM TEAM AGENCY</a>
		</div>
			<div class="header_model">
       <div class="header_item">
                <a href="../../join/">Become a model</a>
            </div>
			<div class="header_item">
				<a href="../../about/">About</a>
			</div>
			<div class="header_item">
				<a href="../../contact/">Contact</a>
			</div>
			
		</div>
	</header>
  <div class="modelheader">
        <?php  
            $name = basename(dirname(__DIR__));
             echo  '<h2>'.$name.'</h2>';
            $model = get_model_name($link,$name);
          
        ?>
      

    </div>
       <div  class="parameters">
          
          <div class="parameter"><a href="../">profile</a></div>
         <div class="parameter"><a style="color: black" href="">polaroiols</a></div>
         <div class="parameter"><a href="">videos</a></div>
          
     </div>
   
  
  <div class="container" style="margin-bottom: 30px;">
  <div class="modellist" style="padding: 34px 20px 0px;">
  <?php 
            $dir = 'images/'; // Папка с изображениями
            $files = scandir($dir); // Берём всё содержимое директории
               for ($i = 0; $i < count($files); $i++) {

                if (($files[$i] != ".") && ($files[$i] != "..")) {
                    $path = $dir.$files[$i];
                    echo '<figure class="polaroiol">';
                    echo '<div class="modelimg" style="background-image:url(\''.$path.'\');"></div>';
                      echo '<figcaption></figcaption>';
                      echo '</figure>';
                }
              }
  ?>
  </div>
</div>
<div class="view">
  <div class="ground">
    
  </div>
  <div class="close">
    
  </div>
  <div class="imgview">
    <img src="">
  </div>
</div>
<footer>
   <div class="footerline">
     <div class="footerleft">
      © 2018. Dream Team Agency
     </div><div class="social" style="display: inline-block;display: inline-block;vertical-align: middle;width: 33%;"><ul style="margin-top: 0px;width: 150px;margin: 0 auto;"><li style="margin-left: 13px;" class="vk">
                <a href="https://vk.com/dtagencyru"></a></li><li style="margin: 0px 26px 0px 26px; " class="fb"><a href="https://m.facebook.com/dtagencyrussia"></a></li><li style="margin-right: 13px;margin-left: 0px; " class="inst"><a href="https://www.instagram.com/dtagencyrussia"></a></li>
          </ul></div><div class="footerright">
            <a href="../../join/">Become a model</a>
         </div>
   </div>
 </footer>
</body>
</html>