<?php
$password = "newdoc";
$hash = password_hash($password, PASSWORD_DEFAULT);
echo $hash;