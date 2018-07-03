<?php 
   function all_questionnaire($link){
    $sql = "SELECT * FROM questionnaire ORDER BY id DESC";
    $query = sprintf($sql);
    $result = mysqli_query($link,$query);
    
    if(!$result)
        die(mysqli_error($link));
    
    $n = mysqli_num_rows($result);
    $questionnaire = array();
    
    for($i = 0;  $i<$n;$i++)
    {
        $row = mysqli_fetch_assoc($result);
         $questionnaire[] = $row;
        
    }
    return   $questionnaire;
}
   function all_names_questionnaire($link){
    $sql = "SELECT name,id FROM questionnaire ORDER BY id DESC";
    $query = sprintf($sql);
    $result = mysqli_query($link,$query);
    
    if(!$result)
        die(mysqli_error($link));
    
    $n = mysqli_num_rows($result);
    $questionnaire = array();
    
    for($i = 0;  $i<$n;$i++)
    {
        $row = mysqli_fetch_assoc($result);
         $questionnaire[] = $row;
        
    }
    return   $questionnaire;
}
   function get_questionnaire($link,$id){
    $sql = "SELECT * FROM questionnaire WHERE id = '%d'";
    $query = sprintf($sql,(int)$id);
    $result = mysqli_query($link,$query);
    
    if(!$result)
        die(mysqli_error($link));
    
    $n = mysqli_num_rows($result);
    $questionnaire = array();
    
    for($i = 0;  $i<$n;$i++)
    {
        $row = mysqli_fetch_assoc($result);
         $questionnaire[] = $row;
        
    }
    return   $questionnaire;
}
function add_questionnaire($link,$name,$city,$phone,$mail,$vk,$inst,$height,$age,$shoe,$chest,$waist,$hips,$img1,$img2,$img3,$img4,$hair,$eyes){
    $name = trim($name);
    $city = trim($city);
    $phone = trim($phone);
    $mail = trim($mail);
    $vk = trim($vk);
    $inst = trim($inst);
    $img1 = trim($img1);
    $img2 = trim($img2);
    $img3 = trim($img3);
    $img4 = trim($img4);
    $hair = trim($hair);
    $eyes = trim($eyes);
    $t = "INSERT INTO questionnaire (name,city,phone,mail,vk,inst,height,age,shoe,chest,waist,hips,img1,img2,img3,img4,hair,eyes) VALUES ('%s','%s','%s','%s','%s','%s','%d','%d','%d','%d','%d','%d','%s','%s','%s','%s','%s','%s')";
    
     $query=sprintf($t,mysqli_real_escape_string($link,$name),mysqli_real_escape_string($link,$city),mysqli_real_escape_string($link,$phone),mysqli_real_escape_string($link,$mail),mysqli_real_escape_string($link,$vk),mysqli_real_escape_string($link,$inst),(int)$height,(int)$age,(int)$shoe,(int)$chest,(int)$waist,(int)$hips,mysqli_real_escape_string($link,$img1),mysqli_real_escape_string($link,$img2),mysqli_real_escape_string($link,$img3),mysqli_real_escape_string($link,$img4),mysqli_real_escape_string($link,$hair),mysqli_real_escape_string($link,$eyes));
   
     $result = mysqli_query($link,$query);
    
     if(!$result)
        die(mysqli_error($link));
    
    return true;
}
function add_model($link,$name,$city,$phone,$mail,$height,$age,$shoe,$chest,$waist,$hips,$imgdir,$img,$hair,$eyes,$gender,$petite){
    $name = trim($name);
    $city = trim($city);
    $phone = trim($phone);
    $mail = trim($mail);
    $imgdir = trim($imgdir);
    $img = trim($img);
    $hair = trim($hair);
    $eyes = trim($eyes);
    $gender= trim($gender);
    $petite= trim($petite);
    $t = "INSERT INTO modellist (name,city,phone,mail,height,age,shoe,chest,waist,hips,imgdir,img,hair,eyes,gender,petite) VALUES ('%s','%s','%s','%s','%d','%d','%d','%d','%d','%d','%s','%s','%s','%s','%s','%s')";
    
     $query=sprintf($t,mysqli_real_escape_string($link,$name),mysqli_real_escape_string($link,$city),mysqli_real_escape_string($link,$phone),mysqli_real_escape_string($link,$mail),(int)$height,(int)$age,(int)$shoe,(int)$chest,(int)$waist,(int)$hips,mysqli_real_escape_string($link,$imgdir),mysqli_real_escape_string($link,$img),mysqli_real_escape_string($link,$hair),mysqli_real_escape_string($link,$eyes),mysqli_real_escape_string($link,$gender),mysqli_real_escape_string($link,$petite));
   
     $result = mysqli_query($link,$query);
    
     if(!$result)
        die(mysqli_error($link));
    
    return true;
}
function add_video($link,$name,$video){
    $name = trim($name);
    $video= trim($video);
    $t = "INSERT INTO videos (name,video) VALUES ('%s','%s')";
    
     $query=sprintf($t,mysqli_real_escape_string($link,$name),mysqli_real_escape_string($link,$video));
   
     $result = mysqli_query($link,$query);
     $id = mysqli_insert_id($link);
     if(!$result)
        die(mysqli_error($link));
    
    return  $id;
}
   function get_video($link,$name){
    $sql = "SELECT * FROM videos WHERE name = '%s'";
    $query = sprintf($sql,mysqli_real_escape_string($link,$name));
    $result = mysqli_query($link,$query);
    
    if(!$result)
        die(mysqli_error($link));
    
    $n = mysqli_num_rows($result);
    $model = array();
    
    for($i = 0;  $i<$n;$i++)
    {
        $row = mysqli_fetch_assoc($result);
        $model[] = $row;
        
    }
    return   $model;
}
   function get_model($link,$id){
    $sql = "SELECT * FROM modellist WHERE id = '%d'";
    $query = sprintf($sql,(int)$id);
    $result = mysqli_query($link,$query);
    
    if(!$result)
        die(mysqli_error($link));
    
    $n = mysqli_num_rows($result);
    $model = array();
    
    for($i = 0;  $i<$n;$i++)
    {
        $row = mysqli_fetch_assoc($result);
        $model[] = $row;
        
    }
    return   $model;
}
   function get_model_name($link,$name){
    $name = trim($name);
    $sql = "SELECT * FROM modellist WHERE name = '%s'";
    $query = sprintf($sql,mysqli_real_escape_string($link,$name));
    $result = mysqli_query($link,$query);
    
    if(!$result)
        die(mysqli_error($link));
    
    $n = mysqli_num_rows($result);
    $model = array();
    
    for($i = 0;  $i<$n;$i++)
    {
        $row = mysqli_fetch_assoc($result);
        $model[] = $row;
        
    }
    return   $model;
}
   function all_names_model($link){
    $sql = "SELECT name,id FROM modellist ORDER BY id DESC";
    $query = sprintf($sql);
    $result = mysqli_query($link,$query);
    
    if(!$result)
        die(mysqli_error($link));
    
    $n = mysqli_num_rows($result);
    $model = array();
    
    for($i = 0;  $i<$n;$i++)
    {
        $row = mysqli_fetch_assoc($result);
         $model[] = $row;
        
    }
    return   $model;
}
   function all_model($link){
    $sql = "SELECT * FROM modellist ORDER BY id DESC";
    $query = sprintf($sql);
    $result = mysqli_query($link,$query);
    
    if(!$result)
        die(mysqli_error($link));
    
    $n = mysqli_num_rows($result);
    $model = array();
    
    for($i = 0;  $i<$n;$i++)
    {
        $row = mysqli_fetch_assoc($result);
         $model[] = $row;
        
    }
    return   $model;
}
 function all_womans($link){
    $sql = "SELECT * FROM modellist  WHERE gender = 'woman' and petite = 'no' ORDER BY id DESC";
    $query = sprintf($sql);
    $result = mysqli_query($link,$query);
    
    if(!$result)
        die(mysqli_error($link));
    
    $n = mysqli_num_rows($result);
    $models = array();
    
    for($i = 0;  $i<$n;$i++)
    {
        $row = mysqli_fetch_assoc($result);
         $models[] = $row;
        
    }
    return   $models;
}
 function all_womans_petite($link){
    $sql = "SELECT * FROM modellist  WHERE gender = 'woman' and petite = 'yes' ORDER BY id DESC";
    $query = sprintf($sql);
    $result = mysqli_query($link,$query);
    
    if(!$result)
        die(mysqli_error($link));
    
    $n = mysqli_num_rows($result);
    $models = array();
    
    for($i = 0;  $i<$n;$i++)
    {
        $row = mysqli_fetch_assoc($result);
         $models[] = $row;
        
    }
    return   $models;
}
 function all_mans($link){
    $sql = "SELECT * FROM modellist  WHERE gender = 'man' ORDER BY id DESC";
    $query = sprintf($sql);
    $result = mysqli_query($link,$query);
    
    if(!$result)
        die(mysqli_error($link));
    
    $n = mysqli_num_rows($result);
    $models = array();
    
    for($i = 0;  $i<$n;$i++)
    {
        $row = mysqli_fetch_assoc($result);
         $models[] = $row;
        
    }
    return   $models;
}
function model_delete($link,$name){
    
     $name = trim($name);
     if($name=='') 
        return false;
    
     $query = sprintf("DELETE FROM modellist  WHERE name = '%s'",mysqli_real_escape_string($link,$name));
     $result = mysqli_query($link,$query);
    if(!$result)
        die(mysqli_error($link));
    
    return mysqli_affected_rows($link);
}
function video_delete($link,$name,$id){
    
     $name = trim($name);
     if($name=='') 
        return false;
    
     $query = sprintf("DELETE FROM videos  WHERE name = '%s' and id = '%d'",mysqli_real_escape_string($link,$name),(int)$id);
     $result = mysqli_query($link,$query);
    if(!$result)
        die(mysqli_error($link));
    
    return mysqli_affected_rows($link);
}
function questionnaire_delete($link,$id){
     
     $id = (int)$id;
     if($id==0) 
        return false;
    
     $query = sprintf("DELETE FROM questionnaire  WHERE id = '%d'",(int)$id);
     $result = mysqli_query($link,$query);
    if(!$result)
        die(mysqli_error($link));
    
    return mysqli_affected_rows($link);
}
function update_model($link,$name,$city,$phone,$mail,$height,$age,$shoe,$chest,$waist,$hips,$hair,$eyes){
    $name = trim($name);
    $city = trim($city);
    $phone = trim($phone);
    $mail = trim($mail);
    $hair = trim($hair);
    $eyes = trim($eyes);
    $t = "UPDATE modellist SET city='%s',phone='%s',mail='%s',height='%d',age='%d',shoe='%d',chest='%d',waist='%d',hips='%d',hair='%s',eyes='%s'  WHERE name = '%s'";
   $query=sprintf($t,mysqli_real_escape_string($link,$city),mysqli_real_escape_string($link,$phone),mysqli_real_escape_string($link,$mail),(int)$height,(int)$age,(int)$shoe,(int)$chest,(int)$waist,(int)$hips,mysqli_real_escape_string($link,$hair),mysqli_real_escape_string($link,$eyes),mysqli_real_escape_string($link,$name));
    $result = mysqli_query($link,$query);
    
   
    
     if(!$result)
        die(mysqli_error($link));
    
    return true;
}
?>