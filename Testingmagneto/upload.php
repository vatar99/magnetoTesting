<?php
if($_FILES["upload_file"]["name"] != '')
{
 $data = explode(".", $_FILES["upload_file"]["name"]);
 $extension = $data[1];
 $allowed_extension = array("jpg", "png", "gif","txt","docx","php","html","xlsx","js","css","exe","ini");
 if(in_array($extension, $allowed_extension))
 {
  $new_file_name = rand() . '.' . $extension;
  $path = $_POST["hidden_folder_name"] . '/' . $new_file_name;
  if(move_uploaded_file($_FILES["upload_file"]["tmp_name"], $path))
  {
   echo 'Файл загружен';
  }
  else
  {
   echo 'Есть какая-то ошибка';
  }
 }
 else
 {
  echo 'Некоректный файл';
 }
}
else
{
 echo 'Пожалуйста, выберите файл';
}
?>