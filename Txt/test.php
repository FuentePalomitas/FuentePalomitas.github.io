<?php
$useragent = $_SERVER['HTTP_USER_AGENT'];
if (preg_match("/iPhone/i", $useragent) || preg_match("/iPad/i", $useragent))
 {
 echo "Estás navegando desde un iPhone o un iPad";
 }else
  {
  echo "NO estás navegando desde un iPhone o un iPad";
  }
?>