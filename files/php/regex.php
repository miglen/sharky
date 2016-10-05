<?php
/*
	This file contains the regex matching strings for the html of the assessents
	
	questions_title = used for titles of the questions
	questions_count = used to count the questions
	answers_title = used for titles of the answers
	
*/

	$pmpi_regex = array(
	'questions_title' 	=> '....',
	'questions_count'	=> '/<span id="cphMainBodyContainer_ctl.*?_lblQuestionNumber" class="LabelText">Question: 1 of (.*?)<\/span>/si',
	'answers_title' 	=> '...',
	
	);


?>