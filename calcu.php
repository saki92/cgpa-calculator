<html><head><title>Final</title></head>
<?php

$crlst = unserialize($_GET['crlst']);
function fina() {
	$grlst = array('s'=>10,'a'=>9,'b'=>8,'c'=>7,'d'=>6,'e'=>5,'u'=>0);
	$gra = array('s','a','b','c','d','e','u');
	$i = 0;
	$c = 0;
	global $crlst, $_GET;
	array_pop($_GET);
	foreach($crlst as $sub=>$credit) {
		foreach($_GET as $gsub=>$grade) {
		$grade=strtolower($grade);
		if ($sub == $gsub) {
		if ($grade == 'u') { break; }
		if(in_array($grade,$gra)){
		foreach($grlst as $key=>$value) {
		if($grade == $key) {
			
			$p = $credit*$value;
			$i = $i+$p;
			$c = $c+$credit;
			}}}
		else{ echo "<body bgcolor='#E0FFFF'><h1><font color='red'>Go back and enter a proper grade</font></h1>";
			exit;}}}}
			
	$f = $i/$c;
	$gpa = round($f,2);
//	print_r ($crlst);
	echo "<body bgcolor='#E0FFFF'><center><h1>$gpa</h1>
<div class='bottom' style='font-size:1em; font-family:Helvetica; position:absolute; width:100%; bottom:40px'><hr>Developed by <a href='http://facebook.com/sakthi.velumani' target='_blank'><img src='fb.jpg' width=20 height=20 /></a></div></body></html>";
}
fina();
?>
