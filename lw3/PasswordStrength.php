<?php
  $pass = $_GET['password'];
  $safety = 0;
  $numbers = '/[0-9]/';
  $upletter = '/[A-Z]/'; 
  $lowletter = '/[a-z]/';
  header("Content-Type:text/plain");
  if(ctype_alnum($pass))
  {
    $pass_lenth = strlen($pass);
    $safety = $safety + (4 * $pass_lenth);
    $count_digit = preg_match_all($numbers, $pass);
    $count_upletter = preg_match_all($upletter, $pass);
    $count_lowletter = preg_match_all($lowletter, $pass);
    $safety = $safety + (4 * $count_digit);
    if ($count_upletter != 0)
    {
      $safety = $safety + (($pass_lenth-$count_upletter)*2); 
    }
    if ($count_lowletter != 0)
    {
      $safety = $safety + (($pass_lenth-$count_lowletter)*2); 
    }
    if ((($count_upletter == 0) and ($count_lowletter == 0)) or ($count_digit == 0))
    {
      $safety = $safety - $pass_lenth;
    }
    if ((ctype_alpha($pass)) or (ctype_digit($pass)))
    {
	  $safety = $safety - $pass_lenth;
    }
    $arrayfiltered = array_filter(array_count_values(str_split($pass)), function ($element) { return ($element != 1); });
    $count_repeat_symb= array_sum($arrayfiltered);
    $safety = $safety - $count_repeat_symb;
    echo "Password safety is ". $safety. "\n";
  }
  else
  {
    echo "WOW!WOW!Password should contain only letters and numbers.";
  }
?>