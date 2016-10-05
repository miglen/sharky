<?php
	if(!empty($_POST)){
		$mysqli->query("INSERT INTO `bugs` (`text`) VALUES ('".$mysqli->real_escape_string($_POST['data'])."');");
		echo "<h2>Thanks!</h2><br><br><br>";
	}
?>
        <h2><a href="#about" class="header-anchor">#</a>Report bug</h2>
		<p>If you have noticed something that it's not working, please describe it here. We have all your submited data so can fix it in no time.</p>
		
			<form method=post>
		<textarea style="width:100%;height:300px;" name="data"></textarea>
		
		
			    <input type="submit" value="Submit!" style="margin-bottom: 4px;border-radius: 4px;background: #00ACEE;color:#fff;padding:10px;font-weight:bold;">
	</p>
	</form>