<?php

/*require_once('calcclass.php');

if(isset($_GET['sem']) && isset($_GET['dep'])) {
	$sem = $_GET['sem'];
	$dep = $_GET['dep']; }
else echo "enter both choises";

table($sem, $dep);
print_r($creditlist);*/

require_once('tstclass.php');
$sem = $_GET['sem'];
$dep = $_GET['dep'];

$tab = new Gpa;
$tab->table($sem,$dep);

?>
