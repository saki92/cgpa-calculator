<?php

//class Gpa {
$creditlist = array();
$grade = array('s'=>10,'a'=>9,'b'=>8,'c'=>7,'d'=>6,'e'=>5);
$list = array(array('sem'=>1,'dep'=>'ece','sub'=>array('english1','maths1','physics1','chemistry1','FOC','EG'),
					   'credit'=>array(4,4,3,3,3,5)),
	       array('sem'=>2,'dep'=>'ece','sub'=>array('english2','maths2','physics2','chemistry2','EDC','BCM'),
					   'credit'=>array(4,4,3,3,4,3)),
		array('sem'=>3,'dep'=>'ece','sub'=>array('Maths3'=>4,'SS'=>4,'EC1'=>3,'DE'=>3,'OOPS'=>3,'EE'=>4)));
function table($sem, $dep) {
	global $creditlist, $list;
	foreach($list as $group) {
		if ($sem == $group['sem'] && $dep == $group['dep']) {
		echo "
<html><title>Table</title>
	<body><center>
		<table border='1' cellpadding='4'>
		<tr bgcolor='dddddd'><td>Subject</td>
		<td>Credit</td>
		<td>Grade</td>
			</tr><form action='calcu.php' method='get'>


";
		foreach($group['sub'] as $subs=>$credit) {
			array_push(&$creditlist, $credit);
			echo "<tr><td>{$subs}</td>
				<td>{$credit}</td>
				<td><input type='text' name='{$subs}' maxlength='1'></td></tr>";}
echo "<pre></table>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='submit' value='Go'/></form></body></html><pre>
"; }}}

function calc() {
	$this->gradelist = array_combine($this->creditlist, $_GET);
	print_r($this->gradelist);
}

function test() {
	echo "fuc test"; }



?>
