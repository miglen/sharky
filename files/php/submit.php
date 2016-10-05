<?php
	error_reporting(E_ALL);

	if(isset($_GET['check'])){

		$result = $mysqli->query("SELECT * FROM `solved` WHERE `found`<`questions`;") or die($mysqli->error.__LINE__);
				
		while($item = $result->fetch_assoc()){
		
			$result2 = $mysqli->query("SELECT `asid` FROM `html` WHERE `asid`='".$item['asid']."'") or die($mysqli->error.__LINE__);
			if(mysqli_num_rows($result2)<1){
				preg_match_all('/<form name="aspnetForm" method="post" action="Assessment.aspx\?data=(.*?)" id="aspnetForm">/si', $item['html'], $qstring);
				echo "<a href='#' target='_blank'>Asid: ".$item['asid']."</a><br><br>";
			}
		}		
		exit;
		
	}



	if(!empty($_POST) && isset($_POST['data']) && !empty($_POST['data']) && strlen($_POST['data'])>100 ){
	

		$data = $_POST['data'];
	//echo strlen($data);
	$data = explode('<table width="100%" border="0" cellpadding="2" cellspacing="5">',$data);
	//echo "<br>".strlen($data[1]);	
	$data = explode('<input type="submit" name="ctl00$cphMainBodyContainer$btnResultsBottom" value="Results"',$data[1]);
	$data = $data[0];
	
		$danni = array();

		preg_match_all('/<span id="cphMainBodyContainer_lblExamineeName" class="LabelText">(.*?)<\/span>/s', $data, $matches);
		$danni['name'] = $matches[1][0];

		preg_match_all('/<span id="cphMainBodyContainer_lblAssessmentName" class="LabelText">(.*?)<\/span>/s', $data, $matches);
		$danni['assessment'] = $matches[1][0];

		preg_match_all('/<span id="cphMainBodyContainer_lblAssessmentID" class="LabelText">(\d+)<\/span>/s', $data, $matches);
		$danni['id'] = intval($matches[1][0]);
		
		//Sections parser (all subtypes)
		preg_match_all('/<span id="cphMainBodyContainer_ctl.._lblSectionName">(.*?)<\/span>/si', $data, $techz);
		$subtypes=array();
			
			foreach($techz[1] as $k=>$v){
			$v = trim($v);
				if(!in_array($v, $subtypes, true) && $v!="Label"){
					array_push($subtypes, $v);
				}
			}
		
		if(sizeof($subtypes)!=0){
			
		}else $danni['sections'] = "";
			
		

		preg_match_all('/\((.*?)\)/s', $danni['assessment'], $matches);
		#print_r($matches);
		$danni['date'] = end($matches[1]);

		$danni['assessment'] = str_replace(" (".$danni['date'].")",null,$danni['assessment']);
		
		$query = "SELECT `id` FROM `html` WHERE `asid`='".$danni['id']."' LIMIT 1;";
		
		$row = $mysqli->query($query) or die($mysqli->error.__LINE__);
		$row = $row->fetch_assoc();
		
		
		
			if(strlen($data)>100 && $danni['id'] > 100 && !isset($row['id'])){
			//print_r($danni);
			//exit;
				

				
				$query = "INSERT INTO `html` (`html`,`asid`,`name`,`date_taken`,`assessment`) VALUES ('".$mysqli->real_escape_string($data)."','".$danni['id']."','".$mysqli->real_escape_string($danni['name'])."','".$mysqli->real_escape_string($danni['date'])."','".$mysqli->real_escape_string($danni['assessment'])."');";
				$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
				
				echo '<h1><a href="#" class="header-anchor">#</a>Thank you for feeding me!</h1>';
				
				
				parseHTML2DB($data,$mysqli->insert_id);
				
				exit;
			}else{
				echo '<h1><a href="#" class="header-anchor">#</a>What was that? Sorry I don\'t eat plankton, I need HTML!</h1>';
				exit;
			}
	
	}

?>
        <h2><a href="#" class="header-anchor">#</a>Feed Sharky!</h2>
		<p>Your content must be valid html source from Assessment summary, showing all your answers.</p>
		<form method=post action="submit.html">


		<textarea style="width:100%;height:300px;" name="data"></textarea>
		
	    <input type="submit" value="Feed the Shark!" style="margin-bottom: 4px;border-radius: 4px;background: #00ACEE;color:#fff;padding:10px;font-weight:bold;">
		</form>
<br><br><br>

		Go to PIMP Scorecard. Select from the dropdown Previous performance period. For each of the already done assesments click on them, after they open in popup, click on "Assessment Summary" and get the source code. Then go to <a href="submit.html">submit</a> and paste it. Here are some screenshots how to do it:<br><br>
		<!-- <img src="files/images/ppp.png" width="100%"><br>
	    <img src="files/images/1.png" width="100%"><br>
		  <img src="files/images/2.png" width="100%">		-->