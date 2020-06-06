<?php
  $identifier = $_GET['identifier'];
  $flag = 'n';
  $symbol = 'n';
  for($i = 0; $i < strlen($identifier); $i++) 
  {
    if(ctype_alpha($identifier[0])) 
	{ 
      $flag = 'y';
	}
	else
	{
	  $flag = 'n';
	  break; 
	}
	if(ctype_digit($identifier[$i]) and ctype_alpha($identifier[$i+1]))
	  {
	    $flag = 'm';
		break; 
	  }
	if(!ctype_alnum($identifier[$i]))
	{
      $symbol = 'y';
	  break; 
	}
  }	
  header("Content-Type:text/plain");  
  if($flag == 'n') 
  {
    echo 'No. The first should be the letter';
  }
  if($flag == 'm') 
  {
    echo 'No. There is a letter after the digit.';
  }
  if($symbol == 'y') 
  {
    echo 'No. There is a symbol in identifier';
  }
  if(($flag == 'y') and ($symbol == 'n'))
  {
    echo 'YES.';
  }