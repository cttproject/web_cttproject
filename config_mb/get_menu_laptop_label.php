<?php
include ("../config_mb/configure_mb.php");

function get_label ($dbc, $label){
	
	$query = "SELECT * FROM sys_menu_laptop where id = $label";
	$result = mysqli_query($dbc, $query);
        
        while($data = mysqli_fetch_assoc($result)){
            return $data;
        }
}
?>
