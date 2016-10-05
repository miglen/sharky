<?php
	error_reporting(E_ALL);
	
	require_once('../php/functions.php');

	## Quick MySQL connection
	$dbpw = (gethostname() == 'sharky') ? "qaz123WSX" : null;
	$mysqli = new mysqli("localhost", "root", $dbpw, "pmpi");
	
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1.1", {packages:["calendar"]});
      google.setOnLoadCallback(drawChart);

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
			if($ddd<time() && $ddd>1388534400){
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
         title: "Usage of multicomplete",
         height: 1000,
       };

       chart.draw(dataTable, options);
   }
    </script>
  </head>
  <body>
    <div id="calendar_basic" style="width: 1000px; height: 1000px;"></div>
  </body>
</html>