<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>WOMEN | DTA</title>

		<link rel="stylesheet" type="text/css" href="../reset.css">
			<link rel="stylesheet" type="text/css" href="../styles.css">
<script type="text/javascript" src="../jquery.js"></script>
<script type="text/javascript" src="../js/update.js"></script>

   <script type="text/javascript" src="../js/scroll.js"></script>
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
				<a  href="../men/">Men</a>
			</div>
			<div id="nolink" class="header_item">
				<span class="nolink">Women</span>
                <div class="submenu"><ul><li ><a href="#petite">Petite</a></li></ul></div>
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

 <div class="modellist" style="padding: 34px 20px 0px;">
     <?php 
        $models = all_womans($link);
        foreach($models as $model){
            echo '<figure class="model">';
            echo '<div class="modelimg" style="background-image:url(\'../'.$model["img"].'\');"></div>';
            echo '<div class="modelname">'.$model["name"].'</div>';
             echo '<figcaption>
                    <p>'.$model["height"].'<br><br>chest - '.$model["chest"].'<br><br>waist - '.$model["waist"].'<br><br>hips - '.$model["hips"].'';
             if($model["shoe"]!=0){
                 echo '<br><br>shoe - '.$model["shoe"].'';
             }
                    
             echo '<br><br>'.$model["hair"].'<br><br>'.$model["eyes"].'</p>
                    <a href="/'.$model["name"].'">View more</a>
                    </figcaption>';
                    
            echo '</figure>';
        }
     ?>
	
 	
 </div>
 <div id="petite" class="parameters" style="padding-top:10px;padding-bottom: 10px; border-bottom: 1px solid #e2e2e2;border-top: 1px solid #e2e2e2;">
          <div  class="parameter">petite</div></div>
 <div class="modellist">
     <?php 
        $models = all_womans_petite($link);
        foreach($models as $model){
            echo '<figure class="model">';
            echo '<div class="modelimg" style="background-image:url(\'../'.$model["img"].'\');"></div>';
            echo '<div class="modelname">'.$model["name"].'</div>';
             echo '<figcaption>
                    <p>'.$model["height"].'<br><br>chest - '.$model["chest"].'<br><br>waist - '.$model["waist"].'<br><br>hips - '.$model["hips"].'';
             if($model["shoe"]!=0){
                 echo '<br><br>shoe - '.$model["shoe"].'';
             }
                    
             echo '<br><br>'.$model["hair"].'<br><br>'.$model["eyes"].'</p>
                    <a href="/'.$model["name"].'">View more</a>
                    </figcaption>';
                    
            echo '</figure>';
        }
     ?>
    
    
 </div>
 <div class='scrolltotop'></div>
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