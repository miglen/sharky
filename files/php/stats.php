<?php

	$result = $mysqli->query("SELECT COUNT(`id`) as total FROM html where 1;") or die($mysqli->error.__LINE__);
	$fed = $result->fetch_assoc();
	
	$result = $mysqli->query("SELECT * FROM `html` GROUP BY `name` DESC ORDER BY `id` DESC") or die($mysqli->error.__LINE__);
	$submitters = mysqli_num_rows($result);

	$result = $mysqli->query("SELECT `qid` FROM `questions` WHERE valid=1;") or die($mysqli->error.__LINE__);
	$questions = mysqli_num_rows($result);	
	
	$result = $mysqli->query("SELECT `qid` FROM `questions` WHERE valid!=1;") or die($mysqli->error.__LINE__);
	$iquestions = mysqli_num_rows($result);		

	$result = $mysqli->query("SELECT COUNT(`agent`) as total FROM solved where 1 GROUP BY `agent`;") or die($mysqli->error.__LINE__);
	$helped_people = mysqli_num_rows($result);	
	
	$result = $mysqli->query("SELECT `id` FROM solved where 1;") or die($mysqli->error.__LINE__);
	$helped_total = mysqli_num_rows($result);		
	
	$result = $mysqli->query("SELECT `title`, COUNT(*) c FROM questions GROUP BY `title` HAVING c > 1;") or die($mysqli->error.__LINE__);
	$duplicates_total = mysqli_num_rows($result);
	
	$result = $mysqli->query("SELECT SUM(`questions`) as total1,SUM(`found`) as total2 FROM solved where 1;") or die($mysqli->error.__LINE__);
	$helped_q = $result->fetch_assoc();
	if(intval($helped_q['total2'])<1 || intval($helped_q['total1'])<1) $helped_q = "0%";
	else{ $helped_q = @round(($helped_q['total2']/$helped_q['total1'])*100)."%";}

?>
        <h2><a href="#about" class="header-anchor">#</a>Stats</h2>
		<p>Shaky is <?=dateDiff(time(),"2014-11-18");?> old. He has been fed <b><?=$fed['total'];?></b> times with tests by <b><?=$submitters;?></b> patients and know the correct answer of <b><?=$questions;?></b> questions and the incorrect of <b><?=$iquestions;?></b>. Also we have <b>	<?=$duplicates_total;?></b> duplicated questions with different answers. <br>He have solved <b><?=$helped_total;?></b> tests and helped to <b><?=$helped_people;?></b> people. Guess rate (Chance to know particular question):  <b><?=@round(100-(($questions/($fed['total']*11))*100));?>%</b>. Success rate: <b><?=$helped_q;?></b>
		<br><br>
		   He is quite smart for a fish, isn't he?<br>
		   <!-- <ul> -->
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	
<?php


function print_charts($title,$data,$tnot=false){

	$chart_id = substr( "abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz" ,rand( 1 ,20 ) , rand( 1 ,20 ));

echo '
	<script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
	  google.setOnLoadCallback('.$chart_id.');
      function '.$chart_id.'() {

        var data = google.visualization.arrayToDataTable([
		[\'Test\', \'Tests\'],
		';

	if($tnot){
		foreach($data as $k=>$v){
			echo "['".$k."', ".$v["total"]."],";
		}	
	}else{
		foreach($data as $k=>$v){
			if($k!="total")
				echo "['".$k."', ".$v."],";
		}	
	}
		

		
echo '		  
        ]);

        var options = {
          title: \''.$title.'\'
        };

        var chart = new google.visualization.PieChart(document.getElementById(\''.$chart_id.'\'));

        chart.draw(data, options);
      }
   </script>
	<div id="'.$chart_id.'" style="width: 900px; height: 500px;float:left;display:inline-block;"></div>	  
';

}


	
	$main_types = array("ITO Customer Relationship"=>array("total"=>0),"ITO DO Tech SW services"=>array("total"=>0),"ITO DO Proc ITIL"=>array("total"=>0));
	
	foreach($main_types as $kkeys=>$value){
		$kkeys2 = $mysqli->query("SELECT count(`id`) as total FROM `html` WHERE `assessment` LIKE '".$kkeys."%';") or die($mysqli->error.__LINE__);
		$kkeys2 = $kkeys2->fetch_assoc();
		// echo "<li>".$kkeys." - <b>".$kkeys2['total']."</b> tests.</li>";
		$main_types[$kkeys]["total"]=$kkeys2['total'];
		
		if($kkeys != "ITO Customer Relationship"){
			$result = $mysqli->query("SELECT COUNT(`id`) AS total,`name` FROM types WHERE `assessment` LIKE '".$kkeys."%' GROUP BY `name`;") or die($mysqli->error.__LINE__);
			while($row = $result->fetch_assoc()){
				$main_types[$kkeys][$row['name']] = $row['total'];
				// echo "<span style='font-size:10px;'>".$row['name']." - <b>".$row['total']."</b></span>;";
			}			
			
		}
	}

	
	print_charts("Test types",$main_types,true);	
	foreach($main_types as $k=>$v) if($k != "ITO Customer Relationship") print_charts($k,$main_types[$k],false);

?>
		  <!-- </ul> -->
		   </p>
		   <br clear="all">

    <script type="text/javascript">
      google.load("visualization", "1.1", {packages:["calendar"]});
      google.setOnLoadCallback(drawAll);
	  
	function drawAll(){
		drawChart();
		drawLineChart();
	}

   function drawChart() {
       var dataTable = new google.visualization.DataTable();
       dataTable.addColumn({ type: 'date', id: 'Date' });
       dataTable.addColumn({ type: 'number', id: 'Won/Loss' });
       dataTable.addRows([
<?php
// Set timezone
 //date_default_timezone_set('UTC');
 
 // Start date
 $date = '2015-1-1';
 // End date
 $end_date = '2015-3-30';
 $i =0;
 
 while (strtotime($date) <= strtotime($end_date)) {
 $i++;
 
 
 //echo " [ new Date(".date ("Y", strtotime($date)).", ".(date ("n", strtotime($date))-1).", ".date ("j", strtotime($date))."), ".$i." ],";

 $date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
 }
 
 
 		$result = $mysqli->query("SELECT `date_taken` FROM `html` WHERE 1") or die($mysqli->error.__LINE__);
		$dati = array();
		while($row = $result->fetch_assoc()){
			$ddd = strtotime($row['date_taken']);
			if($ddd<time() && $ddd>1416268800){
					$dati[date("Y-n-j",$ddd)]++;
			}
			
			//echo " [ new Date(".date ("Y", strtotime($date)).", ".(date ("n", strtotime($date))-1).", ".date ("j", strtotime($date))."), ".$row['total']." ],";
		
		}
		
		foreach($dati as $k=>$v){
			echo "[ new Date(".date ("Y", strtotime($k)).", ".(date ("n", strtotime($k))-1).", ".date ("j", strtotime($k))."), ".$v." ],";
		}
 
?>	   
         // [ new Date(2014, 3, 13), 37032 ],
         //[ new Date(2015, 3, 14), 38024 ]
        ]);


       var chart = new google.visualization.Calendar(document.getElementById('calendar_basic'));

       var options = {
         title: "Usage Calendar",
         height: 500,
       };

       chart.draw(dataTable, options);
   }
   
    function drawLineChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Day');
      data.addColumn('number', 'Success rate');

      data.addRows([
		[1, 2],
		[2, 3],
      ]);

      var options = {
        chart: {
          title: 'Success rate',
          subtitle: 'over time'
        },
        width: 900,
        height: 500
      };

      var chart = new google.charts.Line(document.getElementById('linechart_material'));

      chart.draw(data, options);
    }   
    </script>
	<div id="calendar_basic" style="width: 1000px; height: 500px;display:block;"></div>
	<br><br>
	<div id="linechart_material" style="width: 900px; height: 500px;display:block;"></div>