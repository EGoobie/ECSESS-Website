<?php
  ini_set('display_errors', 1);
	error_reporting(E_ALL ^ E_NOTICE);
  $thing= 'hello im a thing';
  echo $thing;
  $info=phpinfo();
  echo $info;
?>