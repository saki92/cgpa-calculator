<?php

class Gpa {
public $sem;
public $dep;
public $creditlist;
public $gradelist;
public $grade = array('s'=>10,'a'=>9,'b'=>8,'c'=>7,'d'=>6,'e'=>5);
public $list = array(array('sem'=>1,'dep'=>'ece','sub'=>array('english1'=>4,'maths1'=>4,'physics1'=>3,'chemistry1'=>3,'FOC'=>3,'EG'=>5,'Comp-lab'=>2,'Eng-prac-lab'=>2)),
	       array('sem'=>2,'dep'=>'ece','sub'=>array('english2'=>4,'maths2'=>3,'physics2'=>3,'chemistry2'=>3,'EDC'=>4,'BCM'=>4,'cp-lab'=>2,'phy&chem-lab'=>2,'edc-lab'=>2)),
		array('sem'=>3,'dep'=>'ece','sub'=>array('Maths3'=>4,'SS'=>4,'EC1'=>3,'DE'=>3,'OOPS'=>3,'EE'=>4,'Digital-lab'=>2,'EC1-lab'=>2,'OOPS-lab'=>2)),
		array('sem'=>4,'dep'=>'ece','sub'=>array('Maths4'=>4,'CS'=>3,'EC2'=>3,'LIC'=>4,'CT'=>3,'EMF'=>4,'CS-lab'=>2,'EC2-lab'=>2,'LIC-lab'=>2)),
		array('sem'=>5,'dep'=>'ece','sub'=>array('MicroP'=>4,'DC'=>3,'DSP'=>4,'TLW'=>4,'CAO'=>3,'EVS'=>3,'DSP-lab'=>2,'Microp-lab'=>2,'DC-lab'=>2)),
		array('sem'=>6,'dep'=>'ece','sub'=>array('Elective1'=>3,'VLSI'=>3,'AWP'=>4,'CN'=>3,'POM'=>3,'M&I'=>3,'CN-lab'=>2,'VLSI-lab'=>2,'Comm-skills-lab'=>2)),
		array('sem'=>7,'dep'=>'ece','sub'=>array('WC'=>3,'OCN'=>3,'RF'=>3,'Elective2'=>3,'Elective3'=>3,'Elective4'=>3,'ESD-lab'=>2,'Optical-lab'=>2)),
		array('sem'=>8,'dep'=>'ece','sub'=>array('Elective5'=>3,'Elective6'=>3,'Project'=>6)),
		array('sem'=>1,'dep'=>'cse','sub'=>array('english1'=>4,'maths1'=>4,'physics1'=>3,'chemistry1'=>3,'FOC'=>3,'EG'=>5,'Comp-lab'=>2,'Eng-prac-lab'=>2)),
	       array('sem'=>2,'dep'=>'cse','sub'=>array('english2'=>4,'maths2'=>3,'physics2'=>3,'chemistry2'=>3,'EDC'=>4,'BCM'=>4,'cp-lab'=>2,'phy&chem-lab'=>2,'edc-lab'=>2)),
		array('sem'=>3,'dep'=>'cse','sub'=>array('Maths3'=>4,'DS'=>3,'DPSD'=>4,'OOP'=>3,'EVS'=>3,'ADC'=>4,'Digital-lab'=>2,'DS-lab'=>2,'OOP-lab'=>2)),
		array('sem'=>4,'dep'=>'cse','sub'=>array('Maths4'=>4,'COA'=>3,'OS'=>3,'DBMS'=>3,'Microp'=>3,'DAA'=>4,'OS-lab'=>2,'DBMS-lab'=>2,'MP-lab'=>2)),
		array('sem'=>5,'dep'=>'cse','sub'=>array('Maths5'=>4,'SE'=>3,'TOC'=>4,'SS'=>4,'PP'=>3,'CN'=>3,'CN-lab'=>2,'Java-lab'=>2,'SS-lab'=>2)),

		array('sem'=>6,'dep'=>'cse','sub'=>array('AI'=>3,'OOAD'=>3,'PCD'=>4,'ACA'=>3,'Elective1'=>3,'Elective2'=>3,'OOAD-lab'=>2,'IP-lab'=>2,'Comm-skills-lab'=>2)),
		array('sem'=>7,'dep'=>'cse','sub'=>array('EE&FA'=>3,'CG'=>3,'MPC'=>3,'DSP'=>3,'Elective3'=>3,'Elective4'=>3,'CG-lab'=>2,'FOS-lab'=>2)),
		array('sem'=>8,'dep'=>'cse','sub'=>array('Elective5'=>3,'Elective6'=>3,'Project'=>6)),
		array('sem'=>1,'dep'=>'eee','sub'=>array('english1'=>4,'maths1'=>4,'physics1'=>3,'chemistry1'=>3,'FOC'=>3,'EG'=>5,'Comp-lab'=>2,'Eng-prac-lab'=>2)),
	       array('sem'=>2,'dep'=>'eee','sub'=>array('english2'=>4,'maths2'=>3,'physics2'=>3,'chemistry2'=>3,'CT'=>4,'BCM'=>4,'cp-lab'=>2,'phy&chem-lab'=>2,'EC-lab'=>2)),
		array('sem'=>3,'dep'=>'eee','sub'=>array('Maths3'=>4,'M&I'=>3,'EMT'=>4,'EDC'=>3,'EVS'=>3,'DSA'=>4,'EDC-lab'=>2,'DS&AL-lab'=>2,'M&I-lab'=>2)),
		array('sem'=>4,'dep'=>'eee','sub'=>array('NM'=>4,'EM1'=>4,'PPE'=>4,'CS'=>4,'LIC'=>3,'DLC'=>4,'CS-lab'=>2,'LIC-lab'=>2,'EM1-lab'=>2)),
		array('sem'=>5,'dep'=>'eee','sub'=>array('DSP'=>4,'CE'=>3,'OOP'=>3,'PE'=>3,'T&D'=>4,'EM2'=>4,'OOP-lab'=>2,'Comm-Skills-lab'=>2,'EM2-lab'=>2,'PE-lab'=>2)),
		array('sem'=>6,'dep'=>'eee','sub'=>array('PSA'=>4,'SSD'=>3,'HVE'=>3,'MicroP'=>3,'DEM'=>4,'CN'=>4,'Elective1'=>3,'MicroP-lab'=>2,'Present-skills-lab'=>1)),
		array('sem'=>7,'dep'=>'eee','sub'=>array('PSOC'=>3,'P&S'=>3,'SEM'=>3,'POM'=>3,'OS'=>3,'Elective2'=>3,'PSS-lab'=>2,'Comprehension'=>1)),
		array('sem'=>8,'dep'=>'eee','sub'=>array('Elective3'=>3,'Elective4'=>3,'Project'=>6)),
		array('sem'=>1,'dep'=>'it','sub'=>array('english1'=>4,'maths1'=>4,'physics1'=>3,'chemistry1'=>3,'FOC'=>3,'EG'=>5,'Comp-lab'=>2,'Eng-prac-lab'=>2)),
	       array('sem'=>2,'dep'=>'it','sub'=>array('english2'=>4,'maths2'=>3,'physics2'=>3,'chemistry2'=>3,'EDC'=>4,'BCM'=>4,'cp-lab'=>2,'phy&chem-lab'=>2,'edc-lab'=>2)),
		array('sem'=>3,'dep'=>'it','sub'=>array('Maths3'=>4,'DSA'=>3,'DPSD'=>4,'OOP'=>3,'EVS'=>3,'PC'=>4,'Digital-lab'=>2,'DSA-lab'=>2,'OOP-lab'=>2)),
		array('sem'=>4,'dep'=>'it','sub'=>array('Maths4'=>4,'COA'=>3,'OS'=>3,'DBMS'=>3,'Microp'=>3,'SAQA'=>4,'OS-lab'=>2,'DBMS-lab'=>2,'MP-lab'=>2)),
		array('sem'=>5,'dep'=>'it','sub'=>array('JAVA'=>3,'EE&FA'=>3,'SS'=>4,'CN'=>3,'DSP'=>3,'ITC'=>3,'Comm-skills-lab'=>2,'Java-lab'=>2,'SS-lab'=>2)),
		array('sem'=>6,'dep'=>'it','sub'=>array('NPM'=>3,'OOAD'=>3,'C&NS'=>4,'WT'=>3,'Embedded'=>3,'Elective1'=>3,'OOAD-lab'=>2,'WT-lab'=>2,'Network'=>2)),
		array('sem'=>7,'dep'=>'it','sub'=>array('SOA'=>3,'MC'=>3,'CG'=>3,'SPM'=>3,'Elective2'=>3,'Elective3'=>3,'CG-lab'=>2,'SOA-lab'=>2)),
		array('sem'=>8,'dep'=>'it','sub'=>array('Elective4'=>3,'Elective5'=>3,'Project'=>6)),
		array('sem'=>1,'dep'=>'mech','sub'=>array('english1'=>4,'maths1'=>4,'physics1'=>3,'chemistry1'=>3,'FOC'=>3,'EG'=>5,'Comp-lab'=>2,'Eng-prac-lab'=>2)),
	       array('sem'=>2,'dep'=>'mech','sub'=>array('english2'=>4,'maths2'=>3,'physics2'=>3,'chemistry2'=>3,'EMech'=>4,'BEE'=>4,'CP-lab'=>2,'Phy&Chem-lab'=>2,'CAD-lab'=>2)),
		array('sem'=>3,'dep'=>'mech','sub'=>array('Maths3'=>4,'EDC'=>3,'MT1'=>3,'Thermody'=>4,'Kinematics'=>4,'FM'=>4,'MT1-lab'=>2,'FM-lab'=>2,'EE-lab'=>2)),
		array('sem'=>4,'dep'=>'mech','sub'=>array('Maths4'=>4,'Heat&Mass'=>4,'MT2'=>3,'EMM'=>3,'Microp'=>3,'SOM'=>4,'MT2-lab'=>2,'SOM-lab'=>2,'CAD-lab'=>2)),
		array('sem'=>5,'dep'=>'mech','sub'=>array('EVS'=>3,'AHP'=>3,'Thermal'=>4,'EMM'=>3,'DM'=>4,'DME'=>4,'Thermal-lab'=>2,'M&M-lab'=>2,'Dynamics-lab'=>2,'CAD/CAM-lab'=>2)),
		array('sem'=>6,'dep'=>'mech','sub'=>array('POM'=>3,'GD&JP'=>4,'DTS'=>4,'Automobile'=>3,'FEA'=>4,'Elective1'=>3,'Thermal2-lab'=>2,'Design-lab'=>2,'Comm-skills'=>2)),
		array('sem'=>7,'dep'=>'mech','sub'=>array('TQM'=>3,'Mechatronics'=>3,'CIM'=>3,'PPE'=>3,'Elective2'=>3,'Elective3'=>3,'CAS-lab'=>2,'Mechatronics-lab'=>2)),
		array('sem'=>8,'dep'=>'mech','sub'=>array('EE&CA'=>3,'Elective4'=>3,'Elective5'=>3,'Project'=>6,'Comprehension'=>1)),
		array('sem'=>1,'dep'=>'aero','sub'=>array('english1'=>4,'maths1'=>4,'physics1'=>3,'chemistry1'=>3,'FOC'=>3,'EG'=>5,'Comp-lab'=>2,'Eng-prac-lab'=>2)),
	       array('sem'=>2,'dep'=>'aero','sub'=>array('english2'=>4,'maths2'=>3,'physics2'=>3,'chemistry2'=>3,'EMech'=>4,'BEE'=>4,'cp-lab'=>2,'phy&chem-lab'=>2,'CAD-lab'=>2)),
		array('sem'=>3,'dep'=>'aero','sub'=>array('Maths3'=>4,'M&M'=>4,'AET'=>4,'FM'=>3,'SM'=>4,'EOA'=>3,'SOM-lab'=>2,'FM-lab'=>2,'Thermody-lab'=>2)),
		array('sem'=>4,'dep'=>'aero','sub'=>array('Maths4'=>4,'Aerodynamics1'=>3,'AS&I'=>3,'PT'=>3,'AS1'=>4,'Propulsion'=>3,'AS1-lab'=>2,'Aerodynamics-lab'=>2,'ACD-lab'=>2,'MT-lab'=>2)),
		array('sem'=>5,'dep'=>'aero','sub'=>array('FD'=>3,'AS2'=>4,'Aerodynamics2'=>3,'Propulsion2'=>3,'CE'=>3,'EVS'=>3,'AS2-lab'=>2,'Propulsion2-lab'=>2,'CAD-lab'=>2,'Comm-skills'=>2)),
		array('sem'=>6,'dep'=>'aero','sub'=>array('POM'=>3,'FEM'=>3,'ESA'=>4,'WTT'=>3,'HTM'=>3,'Elective1'=>3,'AE-lab'=>2,'AD-lab'=>2,'Airframe-lab'=>2)),
		array('sem'=>7,'dep'=>'aero','sub'=>array('TQM'=>3,'Avionics'=>3,'CFD'=>3,'V&EA'=>3,'Elective2'=>3,'Elective3'=>3,'AD2-lab'=>2,'AS-lab'=>2,'Avionics-lab'=>2)),
		array('sem'=>8,'dep'=>'aero','sub'=>array('CM&S'=>3,'Elective4'=>3,'Elective5'=>3,'Project'=>6,'Comprehension'=>1)),
		
);

public function table($sem, $dep) {
	foreach($this->list as $group) {
		if ($sem == $group['sem'] && $dep == $group['dep']) {
		echo "
<html><title>Table</title>
	<body bgcolor='#E0FFFF'><center>
		<h2>Enter the grades obtained</h2>
		<table border='1' cellpadding='4'>
		<tr bgcolor='#E0FFFF'><td><b />Subject</td>
		<td><b />Credit</td>
		<td><b />Grade</td>
			</tr><form action='calcu.php' method='get'>

";
		$this->creditlist = $group['sub'];
		foreach($group['sub'] as $subs=>$credit) {
			echo "<tr><td>{$subs}</td>
				<td>{$credit}</td>
				<td><input type='text' name='{$subs}' maxlength='1'></td></tr>";}
$seri = serialize($this->creditlist);
echo "<pre></table>

<input type='hidden' name='crlst' value='{$seri}'>
<input type='submit' value='Go'/></form></body></html><pre>
"; }}}

public function calc() {
	$this->gradelist = array_combine($this->creditlist, $_GET);
	print_r($this->gradelist);
}


public function cgpa_table($sem, $dep) {
	echo "
<html><title>Table</title>
	<body bgcolor='#E0FFFF'><center>
	<h2>Enter the grades obtained</h2>";
	foreach($this->list as $group) {
		if ($sem >= $group['sem'] && $dep == $group['dep']) {
		echo "


		<table border='1' cellpadding='4'>
		<tr bgcolor='#E0FFFF'><td><b />Subject</td>
		<td><b />Credit</td>
		<td><b />Grade</td>
			</tr><form action='calcu.php' method='get'>

";
		$this->creditlist = $group['sub'];
		foreach($group['sub'] as $subs=>$credit) {
			echo "<tr><td>{$subs}</td>
				<td>{$credit}</td>
				<td><input type='text' name='{$subs}' maxlength='1'>";}
$seri = serialize($this->creditlist);
echo "</td></tr>";
}}
echo "<pre></table>

<input type='hidden' name='crlst' value='{$seri}'>
<input type='submit' value='Go'/></form></body></html><pre>
"; }
}

?>
