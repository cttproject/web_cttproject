<?php

function data_page ($dbc){
	
	$query = "SELECT label FROM sys_menus";
	$result = mysqli_query($dbc, $query);
	
	$data = mysqli_fetch_assoc($result);
	
	return $data;
}

?>

