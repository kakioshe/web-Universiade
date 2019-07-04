<?php
$connection = mysqli_connect('localhost','universi_admin','aDm20!7');
if(!connection){
	die("Database connection failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'universi_regisform');
if(!select_db){
	die("Database selection failed". mysqli_error($select_db));
}

?>