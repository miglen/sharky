<?php
	## Real mens code in debug level
	error_reporting(E_ALL);
	
	require_once('../php/functions.php');

	## Quick MySQL connection
	$dbpw = (gethostname() == 'sharky') ? "qaz123WSX" : null;
	$mysqli = new mysqli("localhost", "root", $dbpw, "pmpi");
	
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	
	if(isset($_GET['are'])){
			$result = $mysqli->query("SELECT `qid`,`title` FROM `questions` WHERE 1; ") or die($mysqli->error.__LINE__);
	
		while($row = $result->fetch_assoc()){
		
			//$mysqli->query("UPDATE `questions` set `title`='".$mysqli->real_escape_string(qParser($row['title']))."' WHERE `qid`='".$row['qid']."' LIMIT 1;");
			echo "Q: ".qParser($row['title'])."<br><br>";
		}
	}	
	
	if(isset($_GET['reparse'])){
	
		$result = $mysqli->query("SELECT * FROM `html` WHERE 1;") or die($mysqli->error.__LINE__);
		
		while($row = $result->fetch_assoc()){
			//echo "Parsing: ".$row['id']."<br>".
			parseHTML2DB($row['html'],$row['id']);
		}
	}		



	if(isset($_GET['parse'])){
	
		$result = $mysqli->query("SELECT `html`,`parsed` FROM `html` WHERE `id`=".intval($_GET['parse'])." ") or die($mysqli->error.__LINE__);
		$result = $result->fetch_assoc();
		if($result['parsed']!='1'){
			parseHTML2DB($result['html'],$_GET['parse']);
		}else echo "<h1>Already parsed!</h1>";
		
	}


	
	$result = $mysqli->query("SELECT `id`,`asid`,`name` FROM `html` WHERE `parsed`!=1 ") or die($mysqli->error.__LINE__);
	
	while($row = $result->fetch_assoc()){
		echo "PARSE: <a href='?parse=".$row['id']."'>".$row['asid']." by ".$row['name']."</a><br><br>";
	}
	
	

	
	

?>