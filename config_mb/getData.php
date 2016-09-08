<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function get_label ($dbc, $label){
	
	$query = "SELECT label_brand FROM sys_menu_laptop where label_brand = $label";
	$result = mysqli_query($dbc, $query);
	
	$data = mysqli_fetch_assoc($result);
	
	return $data;
}
?>
