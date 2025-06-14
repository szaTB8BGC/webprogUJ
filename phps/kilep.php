<?php
require_once 'sql/sql2.php';
logoutUser();
header('Location: index.php');
exit;
?>