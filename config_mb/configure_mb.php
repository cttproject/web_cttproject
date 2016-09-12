<?php


$host = 'localhost';
$user = 'root';
$password = '';
$database = 'ctt_project';

#Database Connection here...
$dbc = mysqli_connect($host, $user, $password, $database) OR die ('Error : '.mysqli_connect_error());

# Constant
//DEFINE('D_TEMPLATE', 'template');

#Fungctions:
//include('data_mb.php');

$site_title = 'CTTProject 1.0';

if (isset($_GET['page'])) {
	$label = $_GET['page'];
} else {
	$label = 1;
}

#Page Setup
//$page_content = data_page($dbc);


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>