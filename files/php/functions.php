<?php

error_reporting(E_ALL);

// Simply remove all new lines.
function qParser($text){

	// Fix issue UTF-8 mapping to Windows-1252
	// More: http://www.i18nqa.com/debug/utf8-debug.html
	$text = str_replace(array("â€™","â€","â€œ","â","€","ƒ","„","…","†","‡","ˆ","‰","Š","‹","Œ","","Ž","","","‘","’","“","”","•","–","—","","™","š","›","œ","","ž","Ÿ","","¡","¢","£","¤","¥","¦","§","¨","©","ª","«","¬","","®","¯","°","±","²","³","´","µ","¶","·","¸","¹","º","»","¼","½","¾","¿"),null,$text);
	// Remove new lines
	$text = str_replace(array("\r\n", "\r","\n\n","\n",PHP_EOL),null,$text);
	// No! Seriously remove them all!
	$text = preg_replace( "/\r|\n+/", null, preg_replace('/\s+/', ' ', $text));

 return trim($text);
}

// Function to find the respective question

function qFind($question,$answer){
	global $mysqli;
	//
	// Finds the question by it's title and if any of it's answers is like the first answer.
	//

	//echo "Q: ".$question."<Br><br>A: ".$answer."";

	$question = $mysqli->real_escape_string($question);
	$answer   = $mysqli->real_escape_string($answer);

	$query = "SELECT * FROM `questions` WHERE `title`='".$question."' AND (`a1t`='".$answer."' OR `a2t`='".$answer."' OR `a3t`='".$answer."' OR `a4t`='".$answer."' OR `a5t`='".$answer."' OR `a6t`='".$answer."' OR `a7t`='".$answer."') LIMIT 1;";
	$row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$row = $row->fetch_assoc();

	if(isset($row['qid']) && !empty($row['qid'])) return $row;
	return false;
}


function qFind2($question,$answers){
	global $mysqli;
	//
	// Finds the question by it's title and if any of it's answers is like the first answer.
	//

	//echo "Q: ".$question."<Br><br>A: ".$answer."";

	$question = $mysqli->real_escape_string($question);

	$query = "SELECT * FROM `questions` WHERE `title`='".$question."';";
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	//echo "what".count($answers);
	if(1 > mysqli_num_rows($result) || count($answers)==0) return false;

	while($row = $result->fetch_assoc()){
		if(count(array_intersect($answers, $row)) == count($answers)){

		//print_r($answers);print_r($row);
		//echo "<br>";
			return $row;
		}
	}
	//if(isset($row['qid']) && !empty($row['qid'])) return $row;
	return false;
}

 // Set timezone
  date_default_timezone_set("UTC");

  // Time format is UNIX timestamp or
  // PHP strtotime compatible strings
  function dateDiff($time1, $time2, $precision = 6) {
    // If not numeric then convert texts to unix timestamps
    if (!is_int($time1)) {
      $time1 = strtotime($time1);
    }
    if (!is_int($time2)) {
      $time2 = strtotime($time2);
    }

    // If time1 is bigger than time2
    // Then swap time1 and time2
    if ($time1 > $time2) {
      $ttime = $time1;
      $time1 = $time2;
      $time2 = $ttime;
    }

    // Set up intervals and diffs arrays
    $intervals = array('year','month','day','hour','minute','second');
    $diffs = array();

    // Loop thru all intervals
    foreach ($intervals as $interval) {
      // Create temp time from time1 and interval
      $ttime = strtotime('+1 ' . $interval, $time1);
      // Set initial values
      $add = 1;
      $looped = 0;
      // Loop until temp time is smaller than time2
      while ($time2 >= $ttime) {
        // Create new temp time from time1 and interval
        $add++;
        $ttime = strtotime("+" . $add . " " . $interval, $time1);
        $looped++;
      }

      $time1 = strtotime("+" . $looped . " " . $interval, $time1);
      $diffs[$interval] = $looped;
    }

    $count = 0;
    $times = array();
    // Loop thru all diffs
    foreach ($diffs as $interval => $value) {
      // Break if we have needed precission
      if ($count >= $precision) {
	break;
      }
      // Add value and interval
      // if value is bigger than 0
      if ($value > 0) {
	// Add s if value is not 1
	if ($value != 1) {
	  $interval .= "s";
	}
	// Add value and interval to times array
	$times[] = $value . " " . $interval;
	$count++;
      }
    }

    // Return string with times
    return implode(", ", $times);
  }



function parseHTML2DB($data,$id){
	global $mysqli, $regex_pmpi;
	/*

	Първа част - вземи въпросите чрез parse от html DONE
	Втора част - мини ги през цикъл и ги вмъкни в дб.

		За всеки въпрос
			вземи: титла,грешен,радио, въпроси(избран или не)

			ако го няма в дб, добави:
				грешен: добави го с грешните му отговори, само ако е радио
				верен: добави го с верните отговори

			ако го има в дб и не е верен, обнови:
				грешен: маркирай другите грешни отговори
				верен: маркирай верния отговор и го отбележи като верен (предварително изтрий всички други).


	$questions = array();

	$questions[0]['title']="Title";
	$questions[0]['valid']=true/false;
	$questions[0]['radio']=true/false;
	$questions[0]['count']=1...7;

		$questions[0][0]['title']='Answer title';
		$questions[0][0]['checked']=true/false;


	*/


	echo "Parsing: ".$id."<br><br>";

	$questions = array();

	// First parse all tables with questions
	preg_match_all($regex_pmpi['questions'], $data, $matches);


	// Second, parse the answers from the question and the question data
	// For each question
	foreach($matches[1] as $k=>$v){

		// Get the question title
		preg_match_all($regex_pmpi['questions_title'], $v, $matches2);

		// Get the question validity & info
		$questions[$k]['title'] = trim($matches2[1][0]);
		$questions[$k]['radio'] = (strpos($matches[1][$k],'type="radio"'))?1:0;
		$questions[$k]['valid'] = (!strpos($matches[1][$k],'background-color:Brown;'))?1:0;

		// Get the answers
		preg_match_all($regex_pmpi['answers'], $matches[1][$k], $matches3);
			foreach($matches3[1] as $k2=>$v2){
				$questions[$k][$k2]['title']=trim(strip_tags($matches3[1][$k2]));
				$questions[$k][$k2]['checked']= strpos($matches3[1][$k2],"checked") ? 1:0;

			}

	}

	// Release some unsed stuff.
	unset($data,$matches,$matches2,$matches3);

	//print_r($questions);

	foreach($questions as $k=>$v){

		// If it's checkboxes and it's not correct, leave it (for now)
		if($questions[$k]['radio']!=1 && $questions[$k]['valid']!=1) continue;

		// Clear the question title
		$questions[$k]['title'] = qParser($questions[$k]['title']);
		$questions[$k][0]['title'] = qParser($questions[$k][0]['title']);

		//search for the question in the db, if it's valid continue
		$qfind = qFind($questions[$k]['title'],$questions[$k][0]['title']);


			if(!$qfind){
			//insert the question...

			echo "Inserting: ".$questions[$k]['title']."<br>";


			$minsert="";
			$mvalues="";
			for($i=1;$i<=7;$i++){
				$j=$i-1;
				if(isset($questions[$k][$j]['title']) && !empty($questions[$k][$j]['title'])){
					$minsert .= ",`a".$i."t`,`a".$i."v`";
					$mvalues .=",'".$mysqli->real_escape_string(qParser($questions[$k][$j]['title']))."','".$questions[$k][$j]['checked']."'";
				}
			}

				$query = "INSERT INTO `questions` (`title`,`valid` ".$minsert.") VALUES ('".$mysqli->real_escape_string($questions[$k]['title'])."', '".$questions[$k]['valid']."' ".$mvalues.");";
				if($minsert!="") $mysqli->query($query) or die($mysqli->error.__LINE__);
				//echo $query;


			}else{
				//The question exists, if it's not valid update it.

				if($qfind['valid']!=1){

					if($questions[$k]['valid']!=1){ //The submitted question is not valid, update the current invalid question.
						echo __LINE_;
							//update the question...
							echo "Updating: ".$questions[$k]['title']."<br>";

							$mupdates="";
							for($i=1;$i<=7;$i++){
								$j=$i-1;
								if(isset($questions[$k][$j]['title']) && !empty($questions[$k][$j]['title'])){
									if($qfind["a".$i."v"]!='1' && $questions[$k][$j]['checked']==1) $mupdates .= "`a".$i."v`='".$questions[$k][$j]['checked']."',";
								}
							}

						if($mupdates!=""){
							$query = "UPDATE `questions` SET ".$mupdates."`qid`='".$qfind['qid']."' WHERE `qid`='".$qfind['qid']."' LIMIT 1;";
							$mysqli->query($query) or die($mysqli->error.__LINE__);
							//echo $query;
						}
					}else{//The submitted question is valid, update the db.
							//update the question...
							echo "Updating: ".$questions[$k]['title']."<br>";


							//print_r($questions[$k]);

							$mupdates="";
							for($i=1;$i<=7;$i++){
								$j=$i-1;
								if(isset($questions[$k][$j]['title']) && !empty($questions[$k][$j]['title'])){
									if(intval($questions[$k][$j]['checked'])==1) $mupdates .= "`a".$i."v`='".$questions[$k][$j]['checked']."',";
									else $mupdates .= "`a".$i."v`='',";
								}
							}


							if($mupdates!=""){
							$query = "UPDATE `questions` SET ".$mupdates."`valid`='1' WHERE `qid`='".$qfind['qid']."' LIMIT 1;";
							$mysqli->query($query) or die($mysqli->error.__LINE__);
							//echo $query;
							}
					}

				// The question is valid and inserted already or it's invalid and with checkboxes.
				}else{
					echo "Skipping: ".$questions[$k]['title']."<br>";
				}

			}
				echo "\r\n\r\n";

	}



$query = "UPDATE `html` SET parsed=1 WHERE `id`='".intval($id)."' LIMIT 1;";
$mysqli->query($query) or die($mysqli->error.__LINE__);

//print_r($questions);
echo "<h1>DONE!</h1>";
//exit;

/*


	preg_match_all('/<span disabled="disabled" class="LabelText">(.*?)<\/span>/si', $matches[1][8], $matches3);
	$vaprosi[1]['t'] = (strpos($matches[1][8],'type="radio"'))?1:0;

	foreach($matches3[1] as $k=>$v){

		if(!strpos($matches3[1][$k],"checked")){
				echo "<pre>".strip_tags($matches3[1][$k])."</pre>";
		}else echo "<pre><b>".strip_tags($matches3[1][$k])."</b></pre>";

	}
*/


}


?>
