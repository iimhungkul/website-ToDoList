<?php
$mysqli=mysqli_connect('localhost','root','','dbtodo');
mysqli_select_db($mysqli,'dbtodo') or die("database tidak ditemukan");
?> 