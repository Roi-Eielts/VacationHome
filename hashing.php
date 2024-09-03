<?php 
$hashed = password_hash("admin", PASSWORD_DEFAULT);
echo $hashed;
?>