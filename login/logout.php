<?php
session_start();

session_destroy();
header("Location: http://localhost/covid-19/login/index.php");

?>