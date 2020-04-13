<?php

$db_user = "helix";
$db_pass = "r@gh@v@007#helix";
$db_name = "helixentry";

$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
