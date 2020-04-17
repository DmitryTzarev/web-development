<?php
  $mail = $_GET['email'];
  header("Content-Type:text/plain");
  $file_name = "data/$mail.txt";
  if(file_exists($file_name))
  {
    $file = file_get_contents($file_name);
    $data = explode(";", $file);
    echo $data[0]. "\n";
    echo $data[1]. "\n";
    echo $data[2]. "\n";
    echo $data[3]. "\n";
  }
  else
  {
    echo 'No such user.';
  }
?>