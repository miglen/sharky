<?php
/*
	This file contains the regex matching strings for the html of the assessents
*/

$regex_pmpi = array(
  // Questions
  'questions' 	=> '/<table id="cphMainBodyContainer_ct.*?"(.*?)<\/table>/si',
  // Questions count
  'questions_count'	=> '/<span id="cphMainBodyContainer_ctl.*?_lblQuestionNumber" class="LabelText">Question: 1 of (.*?)<\/span>/si',
  // Questions Titles
  'questions_title' 	=> '/<span id="cphMainBodyContainer_ct.*?_lblQuestionText" class="LabelText"><pre>(.*?)<\/pre><\/span>/si',
  // Answers
  'answers' => '/<label for="cphMainBodyContainer_ctl.._ctl2._."><pre>(.*?)<\/pre><\/label>/si',
  // Examinee Name
  'examinee_name' => '/<span id="cphMainBodyContainer_lblExamineeName" class="LabelText">(.*?)<\/span>/s',
  // Exam ID
  'exam_id' => '/<span id="cphMainBodyContainer_lblAssessmentID" class="LabelText">(\d+)<\/span>/s',
  // Exam Name
  'exam_name' => '/<span id="cphMainBodyContainer_lblAssessmentName" class="LabelText">(.*?)<\/span>/s',
  // Exam Sections
  'exam_sections' => '/<span id="cphMainBodyContainer_ctl.._lblSectionName">(.*?)<\/span>/si'
);

?>
