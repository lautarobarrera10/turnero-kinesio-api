<?php

include("condb.php");

$username = $_POST['username'];
$email = $_POST['email'];

$connect -> query("INSERT INTO $table_users (id, username, email) VALUES (null, '$username', '$email'");