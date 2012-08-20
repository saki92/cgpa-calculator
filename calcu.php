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
	
	echo "<body bgcolor='#E0FFFF'><center><h1>$gpa</h1></body></html>";
}
fina();
?>
