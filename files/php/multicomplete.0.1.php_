<?php


	if(!empty($_POST) && isset($_POST['data']) && !empty($_POST['data']) && strlen($_POST['data'])>100 ){

		$data = $_POST['data'];
		$danni = array();
	
		preg_match_all('/<span id="ctl00_cphMainBodyContainer_ctl0._lblQuestionText" class="LabelText"><pre>(.*?)<\/pre><\/span>/si', $data, $matches);
		preg_match_all('/<span id="ctl00_cphMainBodyContainer_ctl00_lblQuestionNumber" class="LabelText">Question: 1 of (.*?)<\/span>/si', $data, $qcount);
		$danni['questions'] = intval($qcount[1][0]);
		$danni['found'] = 0;
	
		echo "<b> LEGEND: 
		
			<span style='color:#fff;background-color:blue;padding:4px;margin:3px;border-radius:5px;'>404 NO DATA</span>
			<span style='color:#fff;background-color:green;padding:4px;margin:3px;border-radius:5px;'>CORRECT</span>
			<span style='color:#fff;background-color:red;padding:4px;margin:3px;border-radius:5px;'>WRONG</span>
			<span style='color:#fff;background-color:orange;padding:4px;margin:3px;border-radius:5px;'>PLAUSIBLE</span>
		<br>
		";
		

		
		if($danni['questions']>=1){
			for($i=1;$i<=$qcount[1][0];$i++){
			
			$title = @mysql_real_escape_string(qParser($matches[1][($i-1)]));
			$query = "SELECT * FROM `questions` WHERE `title`='".$title."' LIMIT 1;";
			$row = $mysqli->query($query) or die($mysqli->error.__LINE__);
			$question = $row->fetch_assoc();
			if($question['valid']=="1") $danni['found']++;
			echo "<br>Question: ".$i." of ".$qcount[1][0].": <b>".$title."</b><br>\r\n\r\n";
			
			if(isset($question['qid']) && !empty($question['qid'])){
				for($j=1;$j<=7;$j++){
					if($question['a'.$j.'t']!=""){
						if($question['valid']=="1"){
						
							if($question['a'.$j.'v']=="1") echo "<span style='color:green'>".$question['a'.$j.'t']."</span><br>\r\n";
						}else{
							if($question['a'.$j.'v']=="1") echo "<span style='color:red'>".$question['a'.$j.'t']."</span><br>\r\n"; 
							else echo "<span style='color:orange'>".$question['a'.$j.'t']."</span><br>\r\n"; 
						}
					}
				}
			}else{
				echo "<span style='color:blue'>404 Nothing found...</span><br>\r\n";
			}
			
			// getAnswers($question['id']); //Get the answer, for example all ok, all wrong etc.
			
		
			//echo "<br><br><b>".trim($matches[1][($i-1)])."</b>\r\n";
			}
			}else{
				echo "No questions found in your HTML!";
			}

	
		

		preg_match_all('/<span id="ctl00_cphMainBodyContainer_lblExamineeName" class="LabelText">(.*?)<\/span>/s', $data, $matches);
		$danni['name'] = $matches[1][0];

		//preg_match_all('/<span id="ctl00_cphMainBodyContainer_lblAssessmentName" class="LabelText">(.*?)<\/span>/s', $data, $matches);
		//$danni['assessment'] = $matches[1][0];

		preg_match_all('/<span id="ctl00_cphMainBodyContainer_lblAssessmentID" class="LabelText">(\d+)<\/span>/s', $data, $matches);
		$danni['id'] = intval($matches[1][0]);	
		//print_r($danni);
		$query = "INSERT INTO `solved` (`asid`, `agent`, `questions`, `found`, `time`,`html`) VALUES ('".$danni['id']."', '".$danni['name']."', '".$danni['questions']."', '".$danni['found']."', CURRENT_TIMESTAMP,'".$mysqli->real_escape_string($data)."');";
		$mysqli->query($query);
		//echo $query;
	
	}

?>

        <h2 id="bowerjson"><a href="#" class="header-anchor">§</a>MultiComplete</h2>
	<p>
	<form method=post>
		<textarea style="width:100%;height:100%;" palceholder="Here comes the HTML from your test!" name="data"></textarea>
		
		
			    <input type="submit" value="I'm feeling lucky!" style="margin-bottom: 4px;border-radius: 4px;background: #00ACEE;color:#fff;padding:10px;font-weight:bold;">
	</p>
	</form>