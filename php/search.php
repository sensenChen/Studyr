<?php 
require "connect.php";

function search($prefix){
	global $conn;
	if($prefix == '*')
		$sql = "SELECT class.*, professors.fname, professors.lname FROM class INNER JOIN professors ON class.professorID = professors.professorID";
	else
		$sql = "SELECT class.*, professors.fname, professors.lname FROM class INNER JOIN professors ON class.professorID = professors.professorID WHERE class.courseType = '$prefix'";
	$results = $conn->query($sql);
	printres($results);
}
if(($_POST['submit'])=='ADMN'){search('ADMN');}
else if($_POST['submit']=='ARCH'){search('ARCH');}
else if($_POST['submit']=='ARTS'){search('ARTS');}
else if($_POST['submit']=='ASTR'){search('ASTR');}
else if($_POST['submit']=='BCBP'){search('BCBP');}
else if($_POST['submit']=='BIOL'){search('BIOL');}
else if($_POST['submit']=='BMED'){search('BMED');}
else if($_POST['submit']=='CHEM'){search('CHEM');}
else if($_POST['submit']=='CHME'){search('CHME');}
else if($_POST['submit']=='Show All...'){search('*');}
?>





<html>
<head>
	<title> Search Results </title>
</head>
<body>
	<section id="results">
		<ul id="resultlist">
		<?php
		function printres($results){
			foreach ($results as $val){
				printf("<li id='result'>%u: %s %u, %s. Professor: %s %s </li>",$val['crn'],$val['courseType'],$val['courseNumber'],$val['courseTitle'],$val['fname'],$val['lname']); 
			}
		}
		?>
	</ul>
	</section>
</body>
</html>