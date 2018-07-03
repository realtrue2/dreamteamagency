<?php 


$error = "";
if(extension_loaded('zip'))
{

	$name = $_POST['nn'];
		  unlink($name.".zip");
		
	$file_folder = "images/"; 

	$zip = new ZipArchive;
  $zipname = $name.".zip";
  if ($zip->open($zipname, ZipArchive::CREATE) === true){
if (is_dir($file_folder)){

 if ($dh = opendir($file_folder)){
   while (($file = readdir($dh)) !== false){
 
     // If file
     if (is_file($file_folder.$file)) {
       if($file != '' && $file != '.' && $file != '..'){
         $zip->addFile($file_folder.$file);
       }
     }
 
   }
   closedir($dh);
  }
	$zip->close();
  echo "/".$name."/".$zipname;
}
  }else{
	echo 'Не могу создать архив!';
  }
				

    


}


		
?>