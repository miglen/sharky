<?php

	if(!empty($_POST) && isset($_POST['data']) && !empty($_POST['data']) && strlen($_POST['data'])>100 ){

		$data = $_POST['data'];
		$danni = array();

		//preg_match_all('/<span id="ctl00_cphMainBodyContainer_ctl0._lblQuestionText" class="LabelText"><pre>(.*?)<\/pre><\/span>/si', $data, $matches);
		// cphMainBodyContainer_ctl00_lblQuestionNumber
		preg_match_all($regex_pmpi['questions_count'], $data, $qcount);
		$danni['questions'] = intval($qcount[1][0]);
		$danni['found'] = 0;

		echo "<b> LEGEND:

			<span style='color:#fff;background-color:blue;padding:4px;margin:3px;border-radius:5px;'>404 NO DATA</span>
			<span style='color:#fff;background-color:green;padding:4px;margin:3px;border-radius:5px;'>CORRECT</span>
			<span style='color:#fff;background-color:red;padding:4px;margin:3px;border-radius:5px;'>WRONG</span>
			<span style='color:#fff;background-color:orange;padding:4px;margin:3px;border-radius:5px;'>PLAUSIBLE</span>
		<br>
		";

	$questions = array();

	// First parse all questions
	preg_match_all($regex_pmpi['questions'], $data, $matches);


	// Second, parse the answers from the question and the question data
	// For each question
	foreach($matches[1] as $k=>$v){

		// Get the question title
		// cphMainBodyContainer_ctl00_lblQuestionText
		preg_match_all($regex_pmpi['questions_title'], $v, $matches2);

		// Get the question validity & info
		$questions[$k]['title'] = trim($matches2[1][0]);
		$questions[$k]['radio'] = (strpos($matches[1][$k],'type="radio"'))?1:0;

		// Get the answers
		//cphMainBodyContainer_ctl00_ctl20_0
		preg_match_all($regex_pmpi['answers'], $matches[1][$k], $matches3);
			foreach($matches3[1] as $k2=>$v2){
				$questions[$k][$k2]['title']=trim(strip_tags($matches3[1][$k2]));
			}

	}
	//print_r($questions);exit;



		if($danni['questions']>=1){
			for($i=1;$i<=$qcount[1][0];$i++){

			//$title = @mysql_real_escape_string(qParser($matches[1][($i-1)]));
			//$query = "SELECT * FROM `questions` WHERE `title`='".$title."' LIMIT 1;";
			//$row = $mysqli->query($query) or die($mysqli->error.__LINE__);

			$title = qParser($questions[$i-1]['title']);
			$fist_answer = qParser($questions[$i-1][0]['title']);

			$qfind_answers = array();
			for($jj=0;$jj<=6;$jj++){
				if(isset($questions[$i-1][$jj]['title'])) $qfind_answers[] = qParser($questions[$i-1][$jj]['title']);
			}
			//print_r($questions[$i-1]);
			$question = qFind2($title,$qfind_answers);
			//$question = qFind($title,$fist_answer);


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




		preg_match_all($regex_pmpi['examinee_name'], $data, $matches);
		$danni['name'] = $matches[1][0];

		//preg_match_all('/<span id="ctl00_cphMainBodyContainer_lblAssessmentName" class="LabelText">(.*?)<\/span>/s', $data, $matches);
		//$danni['assessment'] = $matches[1][0];

		preg_match_all($regex_pmpi['exam_id'], $data, $matches);
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
		<textarea style="width:100%;height:300px;" palceholder="Here comes the HTML from your test!" name="data"></textarea>


			    <input type="submit" value="I'm feeling lucky!" style="margin-bottom: 4px;border-radius: 4px;background: #00ACEE;color:#fff;padding:10px;font-weight:bold;">
	</p>
	</form>
