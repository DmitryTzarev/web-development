<?php
$string = $_GET['text'];
$string = trim($string, " ");
$string = preg_replace('/[^\S]+/',' ', $string);
header("Content-Type:text/plain");
echo 'String without extra spaces:'.$string; 