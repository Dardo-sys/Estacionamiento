<?php
	session_start();
$_SESSION=null;
session_destroy();
header("Location: /istic2019/Session/index.php");
?>