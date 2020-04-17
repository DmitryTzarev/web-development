<?php
  $first_name = $_GET['first_name'];
  $last_name = $_GET['last_name'];
  $mail = $_GET['email'];
  $age = $_GET['age'];
  header("Content-Type:text/plain");
  if ($mail != "")
  {
    if ($first_name != "")
    {
      file_put_contents("data/$mail.txt", "First_name: $first_name;");  
    }
    else
    {
      file_put_contents("data/$mail.txt", "First_name: ;");  
    }
    if ($last_name != "")
    {  
      file_put_contents("data/$mail.txt", "Last_name: $last_name;", FILE_APPEND);  
    }
    else
    {
      file_put_contents("data/$mail.txt", "Last_name: ;", FILE_APPEND);  
    }
    file_put_contents("data/$mail.txt", "Email: $mail;", FILE_APPEND);
    if ($age != "")
    {  
      file_put_contents("data/$mail.txt", "Age: $age;", FILE_APPEND);  
    }
    else
    {
      file_put_contents("data/$mail.txt", "Age: ;", FILE_APPEND);  
    }
  }
  else
  {
    echo "Need email";  
  }	  
  //http://localhost:8080/SurveySaver.php?first_name=Dima&last_name=Tsarev&email=dr@bk.ru&age=31
?>  