<?php 

echo mb_internal_encoding();
$error = "";
if(extension_loaded('zip'))
{

		$name = $_POST['nn'];
		
		
			$file_folder = "../".$name."/images/"; 
			$zip = new ZipArchive(); // подгружаем библиотеку zip
				$zip_name = $name.".zip"; // имя файла
			  
				if($zip->open($zip_name, ZIPARCHIVE::CREATE)!==TRUE)
				{
						echo "Could not open archive";
				}else {
						$files = scandir($file_folder); // Берём всё содержимое директории
        for ($i = 0; $i < count($files); $i++) {
        	        echo "'.$files[$i].'";
        	        $name = str_replace (' ','%20',$name);
        	        $file_folder = "../".$name."/images/"; 
        					$zip->addFile($file_folder.$files[$i]); // добавляем файлы в zip архив

        }
        $zip->close();
				}

        if(file_exists($zip_name))
				{
						// отдаём файл на скачивание
						header('Content-type: application/zip');
						header('Content-Disposition: attachment; filename="'.$zip_name.'"');
						readfile($zip_name);
						// удаляем zip файл если он существует
						unlink($zip_name);
				}


}else 
{
	echo '<script type="text/javascript">console.log("error")</script>';
}

		
?>