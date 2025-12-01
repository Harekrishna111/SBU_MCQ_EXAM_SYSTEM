<?php
include_once("dbname.php");
session_unset();
session_destroy();
header("Location: admin_login.php");
?>