<h2>Question Summary checker</h2>
<?php

//
if(!empty($_POST) && isset($_POST['data']) && !empty($_POST['data']) && strlen($_POST['data'])>100 ){
	$data = $_POST['data'];
	}else $data = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head><title>
	Performance Management Program International
</title><link href="../../Framework/PMPI.css" type="text/css" rel="stylesheet" /><link href="../../Framework/tabcontent.css" type="text/css" rel="stylesheet" /><link href="../Scorecard/Scorecard.css" type="text/css" rel="stylesheet" /><link href="../../Contents/Scripts/HelperFunctions.js" type="text/javascript" /></head>
<body>
    
<script language="javascript" type="text/javascript" src="http://portal.hp.com/lib/navigation/header.js"></script>
<script language="javascript" type="text/javascript">
<!--// Hide from old browsers
setBanner(\'\')

		setFooterHelpPage("http://webservices.cv.hp.com/portal-feedback/");
		setFooterFeedbackPage("http://webservices.cv.hp.com/portal-feedback/");

var ToolBar_Supported = ToolBar_Supported;
if (ToolBar_Supported != null && ToolBar_Supported == true)
{
	drawHeader();
}
//-->
</script>

    <form name="aspnetForm" method="post" action="Assessment.aspx?data=USHopDtw1jGcHPupkQ4aNx9RFUNnn4%2bdVjVrnxgiBYVpbkfmsk8YFB9leNQ07X%2fl2XyB7nfgvM4zBLVn7nGe5Qkzgp7AoIX6KM9HKyrj7J3B5VqYCRnJbQIZHRipTkbjBIqFRPv%2bsOA6XE0KyoT9XLkGo30o3dBLkVnTLR46ZJmSLUfKYFOuLOT3Bp05r0A%2frL70ninOz3UCgj9IXEzBFxCCoRCOYFQmFYE08%2f6OFjNO2cjhoeea7NgsR%2bjafUV1yay2Jcz8OLJEArihjOt3QmdHTOIKL%2fvwSwW%2bJA4eJ%2fpAvmkHP%2f0MK1aNv6TEC4ejLiqTlppcouQXvdyzXYh%2fJq1NFxEdjNA4s6RApy4vdSyba8QIcZexmzF0fT1MjCfueiZb3kYyV2e4V10pbebjg6IIP7rs%2bP8P3eD6KjnZOCjRKHsddZ8nJ%2fpWlQdbJmTq" id="aspnetForm">
<div>
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="" />
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTU4NTk4NTU0MQ8WFB4SQ3VycmVudFNlY3Rpb25OYW1lBRBXZWJTZXJ2ZXIgQXBhY2hlHghMaXN0TW9kZWceEE51bWJlck9mU2VjdGlvbnMCAR4OQ3VycmVudFNlY3Rpb24CBB4TSW5pdGlhbFZhbHVlU2VjdGlvbgIBHhdRdWVzdGlvbkNvbW1lbnRzQWxsb3dlZGceG0N1cnJlbnRRdWVzdGlvbkluQXNzZXNzbWVudAIBHhhBc3Nlc3NtZW50Q29tbWVudEFsbG93ZWRnHhhDdXJyZW50UXVlc3Rpb25JblNlY3Rpb24CAR4RTnVtYmVyT2ZRdWVzdGlvbnMCBxYCZg9kFgICBQ9kFgICBw9kFiICAQ8PFgIeBFRleHQFD01pZ2xlbiBFdmxvZ2lldmRkAgMPDxYCHwoFH0lUTyBETyBUZWNoIFNXIHNlcnZpY2VzIFRTIChWMilkZAIFDw8WAh8KBQY1MjQ4NDFkZAIHDw8WBB8KBQdDYXNlIElEHgdWaXNpYmxlaGRkAgkPDxYEHwplHwtoZGQCDQ8PFgIfC2dkZAIPDxYCHwtnZAIXDw8WAh8KZWRkAhkPDxYCHwplZGQCGw9kFg5mD2QWAmYPZBYGZg9kFgJmD2QWAgIBDxYCHgVzdHlsZQUORGlzcGxheTpibG9jazsWAgIBDw8WAh8KBRBXZWJTZXJ2ZXIgQXBhY2hlZGQCAw9kFgJmD2QWAgIBDw8WAh8KBWo8cHJlPlNlcnZlciBTaWRlIEluY2x1ZGVzIChTU0kpIHByZXNlbnQgYSBzZXJ2ZXIgYWRtaW5pc3RyYXRvciB3aXRoIHNldmVyYWwgcG90ZW50aWFsIHNlY3VyaXR5IHJpc2tzPC9wcmU+ZGQCBA9kFgJmD2QWAgIDD2QWAmYPZBYKAgEPZBYCZg8QZGQWAGQCAw8WAh8LaBYCZg9kFgICAQ8QDxYCHwtoZGRkZAIFDxYCHwwFDWRpc3BsYXk6Tm9uZTtkAgcPFgIfDAUNZGlzcGxheTpub25lO2QCCQ9kFgICAQ8WAh4Hb25jbGljawVzRGlzcGxheUNvbW1lbnRCb3godGhpcyxjdGwwMF9jcGhNYWluQm9keUNvbnRhaW5lcl9jdGwwMF9kaXZDb21tZW50c0JveCxjdGwwMF9jcGhNYWluQm9keUNvbnRhaW5lcl9jdGwwMF90eHRDb21tZW50KWQCAQ9kFgJmD2QWBmYPZBYCZg9kFgICAQ8WAh8MBQ1EaXNwbGF5Om5vbmU7ZAIDD2QWAmYPZBYCAgEPDxYCHwoFQjxwcmU+QSB2aXJ0dWFsIGhvc3QgaXMgZGVmaW5lZCBieSB0d28gcGllY2VzIG9mIGluZm9ybWF0aW9uOjwvcHJlPmRkAgQPZBYCZg9kFgICAw9kFgJmD2QWCgIBD2QWAmYPEGRkFgBkAgMPFgIfC2gWAmYPZBYCAgEPEA8WAh8LaGRkZGQCBQ8WAh8MBQ1kaXNwbGF5Ok5vbmU7ZAIHDxYCHwwFDWRpc3BsYXk6bm9uZTtkAgkPZBYCAgEPFgIfDQVzRGlzcGxheUNvbW1lbnRCb3godGhpcyxjdGwwMF9jcGhNYWluQm9keUNvbnRhaW5lcl9jdGwwMV9kaXZDb21tZW50c0JveCxjdGwwMF9jcGhNYWluQm9keUNvbnRhaW5lcl9jdGwwMV90eHRDb21tZW50KWQCAg9kFgJmD2QWBmYPZBYCZg9kFgICAQ8WAh8MBQ1EaXNwbGF5Om5vbmU7ZAIDD2QWAmYPZBYCAgEPDxYCHwoFajxwcmU+T25lIG9mIHRoZSBwcmltYXJ5IHVzZXMgb2YgZW52aXJvbm1lbnQgdmFyaWFibGVzIGlzIHRvIGNvbW11bmljYXRlIA0KaW5mb3JtYXRpb24gdG8gQ0dJIHNjcmlwdHM8L3ByZT5kZAIED2QWAmYPZBYCAgMPZBYCZg9kFgoCAQ9kFgJmDxBkZBYAZAIDDxYCHwtoFgJmD2QWAgIBDxAPFgIfC2hkZGRkAgUPFgIfDAUNZGlzcGxheTpOb25lO2QCBw8WAh8MBQ1kaXNwbGF5Om5vbmU7ZAIJD2QWAgIBDxYCHw0Fc0Rpc3BsYXlDb21tZW50Qm94KHRoaXMsY3RsMDBfY3BoTWFpbkJvZHlDb250YWluZXJfY3RsMDJfZGl2Q29tbWVudHNCb3gsY3RsMDBfY3BoTWFpbkJvZHlDb250YWluZXJfY3RsMDJfdHh0Q29tbWVudClkAgMPZBYCZg9kFgZmD2QWAmYPZBYCAgEPFgIfDAUNRGlzcGxheTpub25lO2QCAw9kFgJmD2QWAgIBDw8WAh8KBTY8cHJlPklmIGEgY29yZSBpcyBkdW1wZWQgd2hlcmUgd2lsbCBpdCBiZSBmb3VuZD88L3ByZT5kZAIED2QWAmYPZBYCAgMPZBYCZg9kFgoCAQ9kFgJmDxBkZBYAZAIDDxYCHwtoFgJmD2QWAgIBDxAPFgIfC2hkZGRkAgUPFgIfDAUNZGlzcGxheTpOb25lO2QCBw8WAh8MBQ1kaXNwbGF5Om5vbmU7ZAIJD2QWAgIBDxYCHw0Fc0Rpc3BsYXlDb21tZW50Qm94KHRoaXMsY3RsMDBfY3BoTWFpbkJvZHlDb250YWluZXJfY3RsMDNfZGl2Q29tbWVudHNCb3gsY3RsMDBfY3BoTWFpbkJvZHlDb250YWluZXJfY3RsMDNfdHh0Q29tbWVudClkAgQPZBYCZg9kFgZmD2QWAmYPZBYCAgEPFgIfDAUNRGlzcGxheTpub25lO2QCAw9kFgJmD2QWAgIBDw8WAh8KBTA8cHJlPkRvZXMgQXBhY2hlIGNvbWUgd2l0aCBKYXZhIHN1cHBvcnQ/DQo8L3ByZT5kZAIED2QWAmYPZBYCAgMPZBYCZg9kFgoCAQ9kFgJmDxBkZBYAZAIDDxYCHwtoFgJmD2QWAgIBDxAPFgIfC2hkZGRkAgUPFgIfDAUNZGlzcGxheTpOb25lO2QCBw8WAh8MBQ1kaXNwbGF5Om5vbmU7ZAIJD2QWAgIBDxYCHw0Fc0Rpc3BsYXlDb21tZW50Qm94KHRoaXMsY3RsMDBfY3BoTWFpbkJvZHlDb250YWluZXJfY3RsMDRfZGl2Q29tbWVudHNCb3gsY3RsMDBfY3BoTWFpbkJvZHlDb250YWluZXJfY3RsMDRfdHh0Q29tbWVudClkAgUPZBYCZg9kFgZmD2QWAmYPZBYCAgEPFgIfDAUNRGlzcGxheTpub25lO2QCAw9kFgJmD2QWAgIBDw8WAh8KBdEBPHByZT5XaGVuIHJ1bm5pbmcgYmFzaWMgYXV0aGVudGljYXRpb24gdGhlIGRpcmVjdGl2ZSBBdXRoVXNlckZpbGUgcG9pbnRzDQp0byB0aGUgZmlsZSBjb250YWluaW5nIHRoZSB1c2VycyBhbmQgcGFzc3dvcmRzLCANCndoaWNoIGNvbW1hbmQgaXMgdXNlZCB0byBjcmVhdGUgdGhlIGZpbGUgc2FsZXN1c2VycyBhbmQgYWRkIHRoZSB1c2VyIHNhbGVzcmVwID88L3ByZT5kZAIED2QWAmYPZBYCAgMPZBYCZg9kFgoCAQ9kFgJmDxBkZBYAZAIDDxYCHwtoFgJmD2QWAgIBDxAPFgIfC2hkZGRkAgUPFgIfDAUNZGlzcGxheTpOb25lO2QCBw8WAh8MBQ1kaXNwbGF5Om5vbmU7ZAIJD2QWAgIBDxYCHw0Fc0Rpc3BsYXlDb21tZW50Qm94KHRoaXMsY3RsMDBfY3BoTWFpbkJvZHlDb250YWluZXJfY3RsMDVfZGl2Q29tbWVudHNCb3gsY3RsMDBfY3BoTWFpbkJvZHlDb250YWluZXJfY3RsMDVfdHh0Q29tbWVudClkAgYPZBYCZg9kFgZmD2QWAmYPZBYCAgEPFgIfDAUNRGlzcGxheTpub25lO2QCAw9kFgJmD2QWAgIBDw8WAh8KBVc8cHJlPklmIGEgc2l0ZSBpcyBnb2luZyB0byB1c2UgYmFzaWMgYXV0aGVudGljYXRpb24sIHdoaWNoIG1vZHVsZSBzaG91bGQgYmUgdXNlZD88L3ByZT5kZAIED2QWAmYPZBYCAgMPZBYCZg9kFgoCAQ9kFgJmDxBkZBYAZAIDDxYCHwtoFgJmD2QWAgIBDxAPFgIfC2hkZGRkAgUPFgIfDAUNZGlzcGxheTpOb25lO2QCBw8WAh8MBQ1kaXNwbGF5Om5vbmU7ZAIJD2QWAgIBDxYCHw0Fc0Rpc3BsYXlDb21tZW50Qm94KHRoaXMsY3RsMDBfY3BoTWFpbkJvZHlDb250YWluZXJfY3RsMDZfZGl2Q29tbWVudHNCb3gsY3RsMDBfY3BoTWFpbkJvZHlDb250YWluZXJfY3RsMDZfdHh0Q29tbWVudClkAh0PDxYCHwtoZGQCHw8PFgIfC2hkZAIhDw8WAh8LaGRkAiMPDxYCHwtoZGQCJQ8PFgQeB0VuYWJsZWRoHwtoZGQCJw8PZBYCHwwFCWRpc3BsYXk6O2QCKQ8WAh8LZ2QYAQUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgsFKmN0bDAwJGNwaE1haW5Cb2R5Q29udGFpbmVyJGN0bDAwJGNoa01hcmtlZAUqY3RsMDAkY3BoTWFpbkJvZHlDb250YWluZXIkY3RsMDEkY2hrTWFya2VkBShjdGwwMCRjcGhNYWluQm9keUNvbnRhaW5lciRjdGwwMSRjdGwyMCQwBShjdGwwMCRjcGhNYWluQm9keUNvbnRhaW5lciRjdGwwMSRjdGwyMCQxBShjdGwwMCRjcGhNYWluQm9keUNvbnRhaW5lciRjdGwwMSRjdGwyMCQyBShjdGwwMCRjcGhNYWluQm9keUNvbnRhaW5lciRjdGwwMSRjdGwyMCQyBSpjdGwwMCRjcGhNYWluQm9keUNvbnRhaW5lciRjdGwwMiRjaGtNYXJrZWQFKmN0bDAwJGNwaE1haW5Cb2R5Q29udGFpbmVyJGN0bDAzJGNoa01hcmtlZAUqY3RsMDAkY3BoTWFpbkJvZHlDb250YWluZXIkY3RsMDQkY2hrTWFya2VkBSpjdGwwMCRjcGhNYWluQm9keUNvbnRhaW5lciRjdGwwNSRjaGtNYXJrZWQFKmN0bDAwJGNwaE1haW5Cb2R5Q29udGFpbmVyJGN0bDA2JGNoa01hcmtlZChCZ1PUgUUpOnk2dpFyfz3GRg6y" />
</div>

<script type="text/javascript">
<!--
var theForm = document.forms[\'aspnetForm\'];
if (!theForm) {
    theForm = document.aspnetForm;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
// -->
</script>


<script src="/PMPINextGen/WebResource.axd?d=Nuvfx7hTpgIYQv13M5gMhQ2&amp;t=633258725883472716" type="text/javascript"></script>

<script language=\'javascript\'>
var seconds2Timeout;
var initializedExecuted = 0;
var timerId;
function Display() {
var minutes = Math.floor(seconds2Timeout / 60);
var seconds = seconds2Timeout % 60;
var disp;
if(minutes <= 9) disp = \'0\';
else disp = \' \';
disp += minutes + \':\';
if(seconds <= 9) disp += \'0\';
disp += seconds;
return disp; }
function CheckTimeout() {
seconds2Timeout--;
document.getElementById(\'ctl00_cphMainBodyContainer_txtTimer\').value = Display(); 
if (seconds2Timeout == 0)
{
	alert(\'You have run out of time!\'); 
 __doPostBack(\'ctl00$cphMainBodyContainer$btnFinishBottom\', \'\');
 }
else timerId = setTimeout(\'CheckTimeout()\', 1000); }
function Initialize() {
if (0 == initializedExecuted) {
  initializedExecuted =1;
  seconds2Timeout = 714;
	document.getElementById(\'ctl00_cphMainBodyContainer_txtTimer\').value = Display();
	timerId = setTimeout(\'CheckTimeout()\', 1000);
  }
}
window.onload = Initialize
</script>

<script src="/PMPINextGen/ScriptResource.axd?d=jU1eeBOWkeZXuxt2qh7WnWe-luEA2a9NLd7szgpCu-zGdPQA0n9YjUfeG4m0X_ZwGQcuE2FoRXV6bCQDlYetVcb78_PlJeWgNrtNb_tMCrY1&amp;t=633491853538104076" type="text/javascript"></script>
<script src="/PMPINextGen/ScriptResource.axd?d=jU1eeBOWkeZXuxt2qh7WnWe-luEA2a9NLd7szgpCu-zGdPQA0n9YjUfeG4m0X_ZwGQcuE2FoRXV6bCQDlYetVdNIhup6VCMLu-TJjaW8Zok1&amp;t=633491853538104076" type="text/javascript"></script>
<script src="/PMPINextGen/WebResource.axd?d=GT4tfUyGedH8iEIZ4TmzLg2&amp;t=633258725883472716" type="text/javascript"></script>
        <div>
            <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize(\'ctl00$ScriptManager1\', document.getElementById(\'aspnetForm\'));
Sys.WebForms.PageRequestManager.getInstance()._updateControls([\'tctl00$cphMainBodyContainer$ctl00$upAnswerList\',\'tctl00$cphMainBodyContainer$ctl01$upAnswerList\',\'tctl00$cphMainBodyContainer$ctl02$upAnswerList\',\'tctl00$cphMainBodyContainer$ctl03$upAnswerList\',\'tctl00$cphMainBodyContainer$ctl04$upAnswerList\',\'tctl00$cphMainBodyContainer$ctl05$upAnswerList\',\'tctl00$cphMainBodyContainer$ctl06$upAnswerList\'], [], [], 90);
//]]>
</script>

            <table border="0" cellpadding="0" cellspacing="0" >
               <tr style="height: 10%">
                    <td align="center" style="width: 193px; height: 4%;">
                        <img id="ctl00_imgLogo" class="LeftNavigation" src="../../Contents/Images/HPLogo.GIF" style="height:70px;width:80px;border-width:0px;" />
                    </td>
                    <td style="width: 2px; height: 4%;">
                    </td>
                    <td style="height: 3%">
                        <span class="PageHeader">&nbsp;PMP International<br />&nbsp;<span id="ctl00_SubTitle" class="LabelText"></span></span>
                    </td>
                </tr>
                <tr>
                    <td valign="top" style="width: 20%;">
                        <br />                        
                    </td>
                    <td style="width: 2px">
                    </td>
                    <td valign="top">
                        <!–- Main body content will go here -->
                        
    <script language="javascript" type="text/javascript">
    var current = 1;
    var test = 0;
    var testMO = 0;
    var currentCtr = 0

    function CommentPopUp(ID)
    {
        window.open(\'AssessmentComments.aspx?takenAssessmentID=\' + ID , \'Assessmentcomment\',\'width=400,height=400,top=100,left=100\');    
    }

    function savefunction(myobj1)
    {
        test=0;
        __doPostBack(current, "onclick");
    }

    function check1(myobj)
    {
        if (current==1)
        {
            current = myobj.id;
            test = 0;
        }
        
        if (current != myobj.id)
        {
            test += 1;
            current = myobj.id;
        }
        else
        {
            test = 1;
        }

        if (test>1)
        {
            savefunction(myobj);
        }
    }
    
    function check(myobj)
    {
        if (currentCtr == 0)
        {
            currentCtr = myobj.id;
        }
        if (currentCtr != myobj.id)
        {
            testMO += 1;
            currentCtr = myobj.id;
        }

        if (testMO >= 1 || test > 1)
        {
            if(test >= 1)
            {
                savefunction(current);
            }
            testMO = 0;
        }
    }
    
    /*
    function DisplayError(lblError, txtComment)
    {
        if(txtComment.value == "")
       {
        lblError.style.display="block";
        }
       else
       {
       lblError.style.display="none";
       }
    }*/
    
    function DisplayCommentBox(obj, div, CommentBox)
    {
        obj.style.display="none";
        div.style.display="block"
        CommentBox.focus();
    }
    
    function HideCommentBox(obj, CommentArea)
    {
        CommentArea.style.display="none"
    }

    //Dt:9,April 08:: Please do not remove the below commented lines as
    //these lines allow to change the behaviour of confirm prompt in JS
    
    /*@cc_on @*/
    /*@if (@_win32 && @_jscript_version>=5)
    function window.confirm(str)
    {
        execScript(\'n = msgbox("\'+str+\'","4132","Confirm finish")\', "vbscript");
        return(n == 6);
    }
    @end @*/


    function ConfirmFinish()
    {
        return confirm(\'Do you want to end the assessment?\');
    }   
    
    </script>    
		
   <table width="100%" border="0" cellpadding="2" cellspacing="5">
        <tr>
            <td colspan="4">
                <table border="1" width="66%" style="border-color:Black"  cellspacing="0" cellpadding="3">
                    <tr>
                        <td class="LabelText" style="width: 40%">
                            Examinee</td>
                        <td class="LabelText">
                            <span id="ctl00_cphMainBodyContainer_lblExamineeName" class="LabelText">Miglen Evlogiev</span></td>
                    </tr>
                    <tr>
                        <td class="LabelText">
                            Assessment name</td>
                        <td class="textStyle">
                            <span id="ctl00_cphMainBodyContainer_lblAssessmentName" class="LabelText">ITO DO Tech SW services TS (V2)</span></td>
                    </tr>
                    <tr>
                        <td class="LabelText">
                            Assessment Id</td>
                        <td class="LabelText">
                            <span id="ctl00_cphMainBodyContainer_lblAssessmentID" class="LabelText">524841</span></td>
                    </tr>                    
                    <tr align="left">                                                                           
                        <td   align="left">
                             
                        </td>
                        <td align="left" valign="top">                  
                            
                        </td>                                                                                                   
                    </tr> 
                </table>
                <input type="hidden" name="ctl00$cphMainBodyContainer$hdnID" id="ctl00_cphMainBodyContainer_hdnID" value="524841" />            
            </td>
        </tr>
        <tr>
            <td style="width: 35%">
            </td>
            <td style="width: 35%">
            </td>
            <td align="right" class="LabelText" style="width: 15%">
            </td>
            <td class="LabelText" style="width: 15%">
            </td>
        </tr>
        <tr>
            <td style="width: 35%">
                <input type="submit" name="ctl00$cphMainBodyContainer$btnFinishTop" value="Finish assessment" onclick="javascript:return ConfirmFinish();" id="ctl00_cphMainBodyContainer_btnFinishTop" class="Button" />
            </td>
            <td style="width: 35%">
                <input name="ctl00$cphMainBodyContainer$btnCommentTop" type="button" id="ctl00_cphMainBodyContainer_btnCommentTop" value="Assessment level comment" class="Button" onclick="javascript:CommentPopUp(document.forms[\'aspnetForm\'].elements[\'ctl00_cphMainBodyContainer_hdnID\'].value);" /></td>
            <td style="width: 15%" class="LabelText" align="right">
                <span id="ctl00_cphMainBodyContainer_lblTime1" class="LabelText">Time remaining:</span>&nbsp;</td>
            <td class="LabelText" style="width: 15%">
                &nbsp;
                <input name="ctl00$cphMainBodyContainer$txtTimer" type="text" readonly="readonly" id="ctl00_cphMainBodyContainer_txtTimer" style="width:60px;" />
                &nbsp;
                <span id="ctl00_cphMainBodyContainer_lblTime2" class="LabelText">Min</span></td>
        </tr>
        <tr>
            <td style="width: 35%; height: 23px;">
            </td>
            <td style="width: 35%; height: 23px;">
            </td>
            <td align="right" class="LabelText" style="width: 15%; height: 23px;">
            </td>
            <td class="LabelText" style="width: 15%; height: 23px;">
                &nbsp;</td>
        </tr>
        <tr>
        <td class="LabelText" colspan="4">
        <span id="ctl00_cphMainBodyContainer_lblError2"></span>
        </td>
        </tr>
        <tr>
            <td class="LabelText" colspan="4">
                <span id="ctl00_cphMainBodyContainer_lblError"></span></td>
        </tr>
        
        <tr>
            <td colspan="4" style="width:100%">
                <br />
                <table id="ctl00_cphMainBodyContainer_ctl00_0" style="height: 100%" width="100%" onmouseout="check(this)">
	<tr>
		<td colspan="3" style="height: 19px">
        <div id="ctl00_cphMainBodyContainer_ctl00_divSectionHeader" class="Header" style="Display:block;">
            &nbsp;<span id="ctl00_cphMainBodyContainer_ctl00_lblSectionName">WebServer Apache</span></div></td>
	</tr>
	<tr>
		<td style="width: 20%">
            <span id="ctl00_cphMainBodyContainer_ctl00_lblQuestionNumber" class="LabelText">Question: 1 of 7</span>
        </td>
		<td style="width: 15%">
            <span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl00_chkMarked" type="checkbox" name="ctl00$cphMainBodyContainer$ctl00$chkMarked" /><label for="ctl00_cphMainBodyContainer_ctl00_chkMarked">Marked</label></span>
        </td>
		<td style="width: 65%">
            <input type="submit" name="ctl00$cphMainBodyContainer$ctl00$btnSwitch" value="Single question view" id="ctl00_cphMainBodyContainer_ctl00_btnSwitch" class="Button" />
        </td>
	</tr>
	<tr>
		<td>
        </td>
		<td>
        </td>
		<td>
        </td>
	</tr>
	<tr>
		<td colspan="3" style="height: 21px">
            
            <span id="ctl00_cphMainBodyContainer_ctl00_lblQuestionText" class="LabelText"><pre>Server Side Includes (SSI) present a server administrator with several potential security risks</pre></span>
        </td>
	</tr>
	<tr>
		<td colspan="3" valign="top">
        <div id="ctl00_cphMainBodyContainer_ctl00_UpdateProgress1" style="display:none;">
			
                          
                                
                                <div style="top:0px; height:10000px; background-color:White; opacity:0.75; filter:alpha(opacity=1); vertical-align:top; left:0px; z-index:999999; width:1000px; position:absolute; overflow:visible;"></div>
                                <img src="../../Contents/Images/ajax-loader.gif" />
                                    
                        
		</div>
            <div id="ctl00_cphMainBodyContainer_ctl00_upAnswerList">
			
                    <table width="100%" class="LabelText">
                        <tr class="LabelText">
                            <td colspan="3" class="LabelText">
                                <table id="ctl00_cphMainBodyContainer_ctl00_ctl20" class="mylist" onclick="check1(this)" border="0">
				<tr>
					<td><span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl00_ctl20_0" type="radio" name="ctl00$cphMainBodyContainer$ctl00$ctl20" value="19968" /><label for="ctl00_cphMainBodyContainer_ctl00_ctl20_0"><pre>True</pre></label></span></td>
				</tr><tr>
					<td><span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl00_ctl20_1" type="radio" name="ctl00$cphMainBodyContainer$ctl00$ctl20" value="19969" /><label for="ctl00_cphMainBodyContainer_ctl00_ctl20_1"><pre>False</pre></label></span></td>
				</tr>
			</table>
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan="3">
                            <div id="ctl00_cphMainBodyContainer_ctl00_divCommentMandatory" style="display:None;" class="ErrorText">
                                  Comments are mandatory for this answer.
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                
                                <div id="ctl00_cphMainBodyContainer_ctl00_divCommentsBox" style="display:none;">
                                    <table>
                                        <tr>
                                            <td>
                                                <span id="ctl00_cphMainBodyContainer_ctl00_lblComment" class="LabelText">Comments:</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 
                                            
                                                <textarea name="ctl00$cphMainBodyContainer$ctl00$txtComment" rows="2" cols="20" id="ctl00_cphMainBodyContainer_ctl00_txtComment" class="LabelText" style="width:319px;"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div id="ctl00_cphMainBodyContainer_ctl00_divErrorMessage" style="display: none">
                                                    <span id="ctl00_cphMainBodyContainer_ctl00_lblCommentError" class="ErrorText">Comment is mandatory</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="LinkText" colspan="3">
                                <div id="ctl00_cphMainBodyContainer_ctl00_divCommentLink" class="LinkText">
                                    <a id="ctl00_cphMainBodyContainer_ctl00_lnkComments" class="LinkText" onclick="DisplayCommentBox(this,ctl00_cphMainBodyContainer_ctl00_divCommentsBox,ctl00_cphMainBodyContainer_ctl00_txtComment)">&raquo; &nbsp;Click here to add comments</a>&nbsp;<br />
                                    &nbsp;&nbsp;</div>
                            </td>
                        </tr>
                    </table>
                
                
		</div>
              
           
        </td>
	</tr>
	<tr style="display: none">
		<td>
            &nbsp; &nbsp;
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl00$hdnSectionID" id="ctl00_cphMainBodyContainer_ctl00_hdnSectionID" value="4" /><input type="hidden" name="ctl00$cphMainBodyContainer$ctl00$hdnSectionName" id="ctl00_cphMainBodyContainer_ctl00_hdnSectionName" value="WebServer Apache" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl00$hdnShowSectionHeader" id="ctl00_cphMainBodyContainer_ctl00_hdnShowSectionHeader" value="True" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl00$hdnQuestionID" id="ctl00_cphMainBodyContainer_ctl00_hdnQuestionID" value="14354" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl00$hdnQuestionOrderInAssessment" id="ctl00_cphMainBodyContainer_ctl00_hdnQuestionOrderInAssessment" value="1" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl00$hdnQuestionOrderInSection" id="ctl00_cphMainBodyContainer_ctl00_hdnQuestionOrderInSection" value="1" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl00$hdnSectionOrder" id="ctl00_cphMainBodyContainer_ctl00_hdnSectionOrder" value="4" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl00$hdnShowComment" id="ctl00_cphMainBodyContainer_ctl00_hdnShowComment" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl00$hdnQuestionLevelComment" id="ctl00_cphMainBodyContainer_ctl00_hdnQuestionLevelComment" value="True" />
        </td>
	</tr>
	<tr>
		<td colspan="3">
            <hr id="ctl00_cphMainBodyContainer_ctl00_hrQuestionSeperator" style="width: 100%;"></hr>
        </td>
	</tr>
</table>

<table id="ctl00_cphMainBodyContainer_ctl01_1" style="height: 100%" width="100%" onmouseout="check(this)">
	<tr>
		<td colspan="3" style="height: 19px">
        <div id="ctl00_cphMainBodyContainer_ctl01_divSectionHeader" class="Header" style="Display:none;">
            &nbsp;<span id="ctl00_cphMainBodyContainer_ctl01_lblSectionName">Label</span></div></td>
	</tr>
	<tr>
		<td style="width: 20%">
            <span id="ctl00_cphMainBodyContainer_ctl01_lblQuestionNumber" class="LabelText">Question: 2 of 7</span>
        </td>
		<td style="width: 15%">
            <span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl01_chkMarked" type="checkbox" name="ctl00$cphMainBodyContainer$ctl01$chkMarked" /><label for="ctl00_cphMainBodyContainer_ctl01_chkMarked">Marked</label></span>
        </td>
		<td style="width: 65%">
            <input type="submit" name="ctl00$cphMainBodyContainer$ctl01$btnSwitch" value="Single question view" id="ctl00_cphMainBodyContainer_ctl01_btnSwitch" class="Button" />
        </td>
	</tr>
	<tr>
		<td>
        </td>
		<td>
        </td>
		<td>
        </td>
	</tr>
	<tr>
		<td colspan="3" style="height: 21px">
            
            <span id="ctl00_cphMainBodyContainer_ctl01_lblQuestionText" class="LabelText"><pre>A virtual host is defined by two pieces of information:</pre></span>
        </td>
	</tr>
	<tr>
		<td colspan="3" valign="top">
        <div id="ctl00_cphMainBodyContainer_ctl01_UpdateProgress1" style="display:none;">
			
                          
                                
                                <div style="top:0px; height:10000px; background-color:White; opacity:0.75; filter:alpha(opacity=1); vertical-align:top; left:0px; z-index:999999; width:1000px; position:absolute; overflow:visible;"></div>
                                <img src="../../Contents/Images/ajax-loader.gif" />
                                    
                        
		</div>
            <div id="ctl00_cphMainBodyContainer_ctl01_upAnswerList">
			
                    <table width="100%" class="LabelText">
                        <tr class="LabelText">
                            <td colspan="3" class="LabelText">
                                <table id="ctl00_cphMainBodyContainer_ctl01_ctl20" class="mylist" onclick="check1(this)" border="0">
				<tr>
					<td><span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl01_ctl20_0" type="checkbox" name="ctl00$cphMainBodyContainer$ctl01$ctl20$0" /><label for="ctl00_cphMainBodyContainer_ctl01_ctl20_0"><pre>The IP address</pre></label></span></td>
				</tr><tr>
					<td><span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl01_ctl20_1" type="checkbox" name="ctl00$cphMainBodyContainer$ctl01$ctl20$1" /><label for="ctl00_cphMainBodyContainer_ctl01_ctl20_1"><pre>The JVM</pre></label></span></td>
				</tr><tr>
					<td><span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl01_ctl20_2" type="checkbox" name="ctl00$cphMainBodyContainer$ctl01$ctl20$2" /><label for="ctl00_cphMainBodyContainer_ctl01_ctl20_2"><pre>The contents of the Host: header in the HTTP request</pre></label></span></td>
				</tr>
			</table>
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan="3">
                            <div id="ctl00_cphMainBodyContainer_ctl01_divCommentMandatory" style="display:None;" class="ErrorText">
                                  Comments are mandatory for this answer.
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                
                                <div id="ctl00_cphMainBodyContainer_ctl01_divCommentsBox" style="display:none;">
                                    <table>
                                        <tr>
                                            <td>
                                                <span id="ctl00_cphMainBodyContainer_ctl01_lblComment" class="LabelText">Comments:</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 
                                            
                                                <textarea name="ctl00$cphMainBodyContainer$ctl01$txtComment" rows="2" cols="20" id="ctl00_cphMainBodyContainer_ctl01_txtComment" class="LabelText" style="width:319px;"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div id="ctl00_cphMainBodyContainer_ctl01_divErrorMessage" style="display: none">
                                                    <span id="ctl00_cphMainBodyContainer_ctl01_lblCommentError" class="ErrorText">Comment is mandatory</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="LinkText" colspan="3">
                                <div id="ctl00_cphMainBodyContainer_ctl01_divCommentLink" class="LinkText">
                                    <a id="ctl00_cphMainBodyContainer_ctl01_lnkComments" class="LinkText" onclick="DisplayCommentBox(this,ctl00_cphMainBodyContainer_ctl01_divCommentsBox,ctl00_cphMainBodyContainer_ctl01_txtComment)">&raquo; &nbsp;Click here to add comments</a>&nbsp;<br />
                                    &nbsp;&nbsp;</div>
                            </td>
                        </tr>
                    </table>
                
                
		</div>
              
           
        </td>
	</tr>
	<tr style="display: none">
		<td>
            &nbsp; &nbsp;
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl01$hdnSectionID" id="ctl00_cphMainBodyContainer_ctl01_hdnSectionID" value="4" /><input type="hidden" name="ctl00$cphMainBodyContainer$ctl01$hdnSectionName" id="ctl00_cphMainBodyContainer_ctl01_hdnSectionName" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl01$hdnShowSectionHeader" id="ctl00_cphMainBodyContainer_ctl01_hdnShowSectionHeader" value="False" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl01$hdnQuestionID" id="ctl00_cphMainBodyContainer_ctl01_hdnQuestionID" value="16006" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl01$hdnQuestionOrderInAssessment" id="ctl00_cphMainBodyContainer_ctl01_hdnQuestionOrderInAssessment" value="2" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl01$hdnQuestionOrderInSection" id="ctl00_cphMainBodyContainer_ctl01_hdnQuestionOrderInSection" value="2" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl01$hdnSectionOrder" id="ctl00_cphMainBodyContainer_ctl01_hdnSectionOrder" value="4" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl01$hdnShowComment" id="ctl00_cphMainBodyContainer_ctl01_hdnShowComment" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl01$hdnQuestionLevelComment" id="ctl00_cphMainBodyContainer_ctl01_hdnQuestionLevelComment" value="True" />
        </td>
	</tr>
	<tr>
		<td colspan="3">
            <hr id="ctl00_cphMainBodyContainer_ctl01_hrQuestionSeperator" style="width: 100%;"></hr>
        </td>
	</tr>
</table>

<table id="ctl00_cphMainBodyContainer_ctl02_2" style="height: 100%" width="100%" onmouseout="check(this)">
	<tr>
		<td colspan="3" style="height: 19px">
        <div id="ctl00_cphMainBodyContainer_ctl02_divSectionHeader" class="Header" style="Display:none;">
            &nbsp;<span id="ctl00_cphMainBodyContainer_ctl02_lblSectionName">Label</span></div></td>
	</tr>
	<tr>
		<td style="width: 20%">
            <span id="ctl00_cphMainBodyContainer_ctl02_lblQuestionNumber" class="LabelText">Question: 3 of 7</span>
        </td>
		<td style="width: 15%">
            <span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl02_chkMarked" type="checkbox" name="ctl00$cphMainBodyContainer$ctl02$chkMarked" /><label for="ctl00_cphMainBodyContainer_ctl02_chkMarked">Marked</label></span>
        </td>
		<td style="width: 65%">
            <input type="submit" name="ctl00$cphMainBodyContainer$ctl02$btnSwitch" value="Single question view" id="ctl00_cphMainBodyContainer_ctl02_btnSwitch" class="Button" />
        </td>
	</tr>
	<tr>
		<td>
        </td>
		<td>
        </td>
		<td>
        </td>
	</tr>
	<tr>
		<td colspan="3" style="height: 21px">
            
            <span id="ctl00_cphMainBodyContainer_ctl02_lblQuestionText" class="LabelText"><pre>One of the primary uses of environment variables is to communicate 
information to CGI scripts</pre></span>
        </td>
	</tr>
	<tr>
		<td colspan="3" valign="top">
        <div id="ctl00_cphMainBodyContainer_ctl02_UpdateProgress1" style="display:none;">
			
                          
                                
                                <div style="top:0px; height:10000px; background-color:White; opacity:0.75; filter:alpha(opacity=1); vertical-align:top; left:0px; z-index:999999; width:1000px; position:absolute; overflow:visible;"></div>
                                <img src="../../Contents/Images/ajax-loader.gif" />
                                    
                        
		</div>
            <div id="ctl00_cphMainBodyContainer_ctl02_upAnswerList">
			
                    <table width="100%" class="LabelText">
                        <tr class="LabelText">
                            <td colspan="3" class="LabelText">
                                <table id="ctl00_cphMainBodyContainer_ctl02_ctl20" class="mylist" onclick="check1(this)" border="0">
				<tr>
					<td><span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl02_ctl20_0" type="radio" name="ctl00$cphMainBodyContainer$ctl02$ctl20" value="26978" /><label for="ctl00_cphMainBodyContainer_ctl02_ctl20_0"><pre>True</pre></label></span></td>
				</tr><tr>
					<td><span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl02_ctl20_1" type="radio" name="ctl00$cphMainBodyContainer$ctl02$ctl20" value="26979" /><label for="ctl00_cphMainBodyContainer_ctl02_ctl20_1"><pre>False</pre></label></span></td>
				</tr>
			</table>
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan="3">
                            <div id="ctl00_cphMainBodyContainer_ctl02_divCommentMandatory" style="display:None;" class="ErrorText">
                                  Comments are mandatory for this answer.
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                
                                <div id="ctl00_cphMainBodyContainer_ctl02_divCommentsBox" style="display:none;">
                                    <table>
                                        <tr>
                                            <td>
                                                <span id="ctl00_cphMainBodyContainer_ctl02_lblComment" class="LabelText">Comments:</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 
                                            
                                                <textarea name="ctl00$cphMainBodyContainer$ctl02$txtComment" rows="2" cols="20" id="ctl00_cphMainBodyContainer_ctl02_txtComment" class="LabelText" style="width:319px;"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div id="ctl00_cphMainBodyContainer_ctl02_divErrorMessage" style="display: none">
                                                    <span id="ctl00_cphMainBodyContainer_ctl02_lblCommentError" class="ErrorText">Comment is mandatory</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="LinkText" colspan="3">
                                <div id="ctl00_cphMainBodyContainer_ctl02_divCommentLink" class="LinkText">
                                    <a id="ctl00_cphMainBodyContainer_ctl02_lnkComments" class="LinkText" onclick="DisplayCommentBox(this,ctl00_cphMainBodyContainer_ctl02_divCommentsBox,ctl00_cphMainBodyContainer_ctl02_txtComment)">&raquo; &nbsp;Click here to add comments</a>&nbsp;<br />
                                    &nbsp;&nbsp;</div>
                            </td>
                        </tr>
                    </table>
                
                
		</div>
              
           
        </td>
	</tr>
	<tr style="display: none">
		<td>
            &nbsp; &nbsp;
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl02$hdnSectionID" id="ctl00_cphMainBodyContainer_ctl02_hdnSectionID" value="4" /><input type="hidden" name="ctl00$cphMainBodyContainer$ctl02$hdnSectionName" id="ctl00_cphMainBodyContainer_ctl02_hdnSectionName" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl02$hdnShowSectionHeader" id="ctl00_cphMainBodyContainer_ctl02_hdnShowSectionHeader" value="False" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl02$hdnQuestionID" id="ctl00_cphMainBodyContainer_ctl02_hdnQuestionID" value="16000" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl02$hdnQuestionOrderInAssessment" id="ctl00_cphMainBodyContainer_ctl02_hdnQuestionOrderInAssessment" value="3" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl02$hdnQuestionOrderInSection" id="ctl00_cphMainBodyContainer_ctl02_hdnQuestionOrderInSection" value="3" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl02$hdnSectionOrder" id="ctl00_cphMainBodyContainer_ctl02_hdnSectionOrder" value="4" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl02$hdnShowComment" id="ctl00_cphMainBodyContainer_ctl02_hdnShowComment" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl02$hdnQuestionLevelComment" id="ctl00_cphMainBodyContainer_ctl02_hdnQuestionLevelComment" value="True" />
        </td>
	</tr>
	<tr>
		<td colspan="3">
            <hr id="ctl00_cphMainBodyContainer_ctl02_hrQuestionSeperator" style="width: 100%;"></hr>
        </td>
	</tr>
</table>

<table id="ctl00_cphMainBodyContainer_ctl03_3" style="height: 100%" width="100%" onmouseout="check(this)">
	<tr>
		<td colspan="3" style="height: 19px">
        <div id="ctl00_cphMainBodyContainer_ctl03_divSectionHeader" class="Header" style="Display:none;">
            &nbsp;<span id="ctl00_cphMainBodyContainer_ctl03_lblSectionName">Label</span></div></td>
	</tr>
	<tr>
		<td style="width: 20%">
            <span id="ctl00_cphMainBodyContainer_ctl03_lblQuestionNumber" class="LabelText">Question: 4 of 7</span>
        </td>
		<td style="width: 15%">
            <span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl03_chkMarked" type="checkbox" name="ctl00$cphMainBodyContainer$ctl03$chkMarked" /><label for="ctl00_cphMainBodyContainer_ctl03_chkMarked">Marked</label></span>
        </td>
		<td style="width: 65%">
            <input type="submit" name="ctl00$cphMainBodyContainer$ctl03$btnSwitch" value="Single question view" id="ctl00_cphMainBodyContainer_ctl03_btnSwitch" class="Button" />
        </td>
	</tr>
	<tr>
		<td>
        </td>
		<td>
        </td>
		<td>
        </td>
	</tr>
	<tr>
		<td colspan="3" style="height: 21px">
            
            <span id="ctl00_cphMainBodyContainer_ctl03_lblQuestionText" class="LabelText"><pre>If a core is dumped where will it be found?</pre></span>
        </td>
	</tr>
	<tr>
		<td colspan="3" valign="top">
        <div id="ctl00_cphMainBodyContainer_ctl03_UpdateProgress1" style="display:none;">
			
                          
                                
                                <div style="top:0px; height:10000px; background-color:White; opacity:0.75; filter:alpha(opacity=1); vertical-align:top; left:0px; z-index:999999; width:1000px; position:absolute; overflow:visible;"></div>
                                <img src="../../Contents/Images/ajax-loader.gif" />
                                    
                        
		</div>
            <div id="ctl00_cphMainBodyContainer_ctl03_upAnswerList">
			
                    <table width="100%" class="LabelText">
                        <tr class="LabelText">
                            <td colspan="3" class="LabelText">
                                <table id="ctl00_cphMainBodyContainer_ctl03_ctl20" class="mylist" onclick="check1(this)" border="0">
				<tr>
					<td><span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl03_ctl20_0" type="radio" name="ctl00$cphMainBodyContainer$ctl03$ctl20" value="60450" /><label for="ctl00_cphMainBodyContainer_ctl03_ctl20_0"><pre>On the same directory as the error log.</pre></label></span></td>
				</tr><tr>
					<td><span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl03_ctl20_1" type="radio" name="ctl00$cphMainBodyContainer$ctl03$ctl20" value="60451" /><label for="ctl00_cphMainBodyContainer_ctl03_ctl20_1"><pre>On the same directory as the access log.</pre></label></span></td>
				</tr><tr>
					<td><span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl03_ctl20_2" type="radio" name="ctl00$cphMainBodyContainer$ctl03$ctl20" value="60452" /><label for="ctl00_cphMainBodyContainer_ctl03_ctl20_2"><pre>On the same directory where the webserver binary is hosted.</pre></label></span></td>
				</tr><tr>
					<td><span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl03_ctl20_3" type="radio" name="ctl00$cphMainBodyContainer$ctl03$ctl20" value="60453" /><label for="ctl00_cphMainBodyContainer_ctl03_ctl20_3"><pre>Under the ServerRoot directory specified by the directive
CoreDumpDirectory.</pre></label></span></td>
				</tr>
			</table>
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan="3">
                            <div id="ctl00_cphMainBodyContainer_ctl03_divCommentMandatory" style="display:None;" class="ErrorText">
                                  Comments are mandatory for this answer.
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                
                                <div id="ctl00_cphMainBodyContainer_ctl03_divCommentsBox" style="display:none;">
                                    <table>
                                        <tr>
                                            <td>
                                                <span id="ctl00_cphMainBodyContainer_ctl03_lblComment" class="LabelText">Comments:</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 
                                            
                                                <textarea name="ctl00$cphMainBodyContainer$ctl03$txtComment" rows="2" cols="20" id="ctl00_cphMainBodyContainer_ctl03_txtComment" class="LabelText" style="width:319px;"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div id="ctl00_cphMainBodyContainer_ctl03_divErrorMessage" style="display: none">
                                                    <span id="ctl00_cphMainBodyContainer_ctl03_lblCommentError" class="ErrorText">Comment is mandatory</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="LinkText" colspan="3">
                                <div id="ctl00_cphMainBodyContainer_ctl03_divCommentLink" class="LinkText">
                                    <a id="ctl00_cphMainBodyContainer_ctl03_lnkComments" class="LinkText" onclick="DisplayCommentBox(this,ctl00_cphMainBodyContainer_ctl03_divCommentsBox,ctl00_cphMainBodyContainer_ctl03_txtComment)">&raquo; &nbsp;Click here to add comments</a>&nbsp;<br />
                                    &nbsp;&nbsp;</div>
                            </td>
                        </tr>
                    </table>
                
                
		</div>
              
           
        </td>
	</tr>
	<tr style="display: none">
		<td>
            &nbsp; &nbsp;
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl03$hdnSectionID" id="ctl00_cphMainBodyContainer_ctl03_hdnSectionID" value="4" /><input type="hidden" name="ctl00$cphMainBodyContainer$ctl03$hdnSectionName" id="ctl00_cphMainBodyContainer_ctl03_hdnSectionName" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl03$hdnShowSectionHeader" id="ctl00_cphMainBodyContainer_ctl03_hdnShowSectionHeader" value="False" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl03$hdnQuestionID" id="ctl00_cphMainBodyContainer_ctl03_hdnQuestionID" value="23731" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl03$hdnQuestionOrderInAssessment" id="ctl00_cphMainBodyContainer_ctl03_hdnQuestionOrderInAssessment" value="4" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl03$hdnQuestionOrderInSection" id="ctl00_cphMainBodyContainer_ctl03_hdnQuestionOrderInSection" value="4" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl03$hdnSectionOrder" id="ctl00_cphMainBodyContainer_ctl03_hdnSectionOrder" value="4" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl03$hdnShowComment" id="ctl00_cphMainBodyContainer_ctl03_hdnShowComment" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl03$hdnQuestionLevelComment" id="ctl00_cphMainBodyContainer_ctl03_hdnQuestionLevelComment" value="True" />
        </td>
	</tr>
	<tr>
		<td colspan="3">
            <hr id="ctl00_cphMainBodyContainer_ctl03_hrQuestionSeperator" style="width: 100%;"></hr>
        </td>
	</tr>
</table>

<table id="ctl00_cphMainBodyContainer_ctl04_4" style="height: 100%" width="100%" onmouseout="check(this)">
	<tr>
		<td colspan="3" style="height: 19px">
        <div id="ctl00_cphMainBodyContainer_ctl04_divSectionHeader" class="Header" style="Display:none;">
            &nbsp;<span id="ctl00_cphMainBodyContainer_ctl04_lblSectionName">Label</span></div></td>
	</tr>
	<tr>
		<td style="width: 20%">
            <span id="ctl00_cphMainBodyContainer_ctl04_lblQuestionNumber" class="LabelText">Question: 5 of 7</span>
        </td>
		<td style="width: 15%">
            <span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl04_chkMarked" type="checkbox" name="ctl00$cphMainBodyContainer$ctl04$chkMarked" /><label for="ctl00_cphMainBodyContainer_ctl04_chkMarked">Marked</label></span>
        </td>
		<td style="width: 65%">
            <input type="submit" name="ctl00$cphMainBodyContainer$ctl04$btnSwitch" value="Single question view" id="ctl00_cphMainBodyContainer_ctl04_btnSwitch" class="Button" />
        </td>
	</tr>
	<tr>
		<td>
        </td>
		<td>
        </td>
		<td>
        </td>
	</tr>
	<tr>
		<td colspan="3" style="height: 21px">
            
            <span id="ctl00_cphMainBodyContainer_ctl04_lblQuestionText" class="LabelText"><pre>Does Apache come with Java support?
</pre></span>
        </td>
	</tr>
	<tr>
		<td colspan="3" valign="top">
        <div id="ctl00_cphMainBodyContainer_ctl04_UpdateProgress1" style="display:none;">
			
                          
                                
                                <div style="top:0px; height:10000px; background-color:White; opacity:0.75; filter:alpha(opacity=1); vertical-align:top; left:0px; z-index:999999; width:1000px; position:absolute; overflow:visible;"></div>
                                <img src="../../Contents/Images/ajax-loader.gif" />
                                    
                        
		</div>
            <div id="ctl00_cphMainBodyContainer_ctl04_upAnswerList">
			
                    <table width="100%" class="LabelText">
                        <tr class="LabelText">
                            <td colspan="3" class="LabelText">
                                <table id="ctl00_cphMainBodyContainer_ctl04_ctl20" class="mylist" onclick="check1(this)" border="0">
				<tr>
					<td><span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl04_ctl20_0" type="radio" name="ctl00$cphMainBodyContainer$ctl04$ctl20" value="14034" /><label for="ctl00_cphMainBodyContainer_ctl04_ctl20_0"><pre>Yes</pre></label></span></td>
				</tr><tr>
					<td><span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl04_ctl20_1" type="radio" name="ctl00$cphMainBodyContainer$ctl04$ctl20" value="14035" /><label for="ctl00_cphMainBodyContainer_ctl04_ctl20_1"><pre>No</pre></label></span></td>
				</tr>
			</table>
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan="3">
                            <div id="ctl00_cphMainBodyContainer_ctl04_divCommentMandatory" style="display:None;" class="ErrorText">
                                  Comments are mandatory for this answer.
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                
                                <div id="ctl00_cphMainBodyContainer_ctl04_divCommentsBox" style="display:none;">
                                    <table>
                                        <tr>
                                            <td>
                                                <span id="ctl00_cphMainBodyContainer_ctl04_lblComment" class="LabelText">Comments:</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 
                                            
                                                <textarea name="ctl00$cphMainBodyContainer$ctl04$txtComment" rows="2" cols="20" id="ctl00_cphMainBodyContainer_ctl04_txtComment" class="LabelText" style="width:319px;"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div id="ctl00_cphMainBodyContainer_ctl04_divErrorMessage" style="display: none">
                                                    <span id="ctl00_cphMainBodyContainer_ctl04_lblCommentError" class="ErrorText">Comment is mandatory</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="LinkText" colspan="3">
                                <div id="ctl00_cphMainBodyContainer_ctl04_divCommentLink" class="LinkText">
                                    <a id="ctl00_cphMainBodyContainer_ctl04_lnkComments" class="LinkText" onclick="DisplayCommentBox(this,ctl00_cphMainBodyContainer_ctl04_divCommentsBox,ctl00_cphMainBodyContainer_ctl04_txtComment)">&raquo; &nbsp;Click here to add comments</a>&nbsp;<br />
                                    &nbsp;&nbsp;</div>
                            </td>
                        </tr>
                    </table>
                
                
		</div>
              
           
        </td>
	</tr>
	<tr style="display: none">
		<td>
            &nbsp; &nbsp;
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl04$hdnSectionID" id="ctl00_cphMainBodyContainer_ctl04_hdnSectionID" value="4" /><input type="hidden" name="ctl00$cphMainBodyContainer$ctl04$hdnSectionName" id="ctl00_cphMainBodyContainer_ctl04_hdnSectionName" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl04$hdnShowSectionHeader" id="ctl00_cphMainBodyContainer_ctl04_hdnShowSectionHeader" value="False" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl04$hdnQuestionID" id="ctl00_cphMainBodyContainer_ctl04_hdnQuestionID" value="12915" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl04$hdnQuestionOrderInAssessment" id="ctl00_cphMainBodyContainer_ctl04_hdnQuestionOrderInAssessment" value="5" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl04$hdnQuestionOrderInSection" id="ctl00_cphMainBodyContainer_ctl04_hdnQuestionOrderInSection" value="5" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl04$hdnSectionOrder" id="ctl00_cphMainBodyContainer_ctl04_hdnSectionOrder" value="4" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl04$hdnShowComment" id="ctl00_cphMainBodyContainer_ctl04_hdnShowComment" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl04$hdnQuestionLevelComment" id="ctl00_cphMainBodyContainer_ctl04_hdnQuestionLevelComment" value="True" />
        </td>
	</tr>
	<tr>
		<td colspan="3">
            <hr id="ctl00_cphMainBodyContainer_ctl04_hrQuestionSeperator" style="width: 100%;"></hr>
        </td>
	</tr>
</table>

<table id="ctl00_cphMainBodyContainer_ctl05_5" style="height: 100%" width="100%" onmouseout="check(this)">
	<tr>
		<td colspan="3" style="height: 19px">
        <div id="ctl00_cphMainBodyContainer_ctl05_divSectionHeader" class="Header" style="Display:none;">
            &nbsp;<span id="ctl00_cphMainBodyContainer_ctl05_lblSectionName">Label</span></div></td>
	</tr>
	<tr>
		<td style="width: 20%">
            <span id="ctl00_cphMainBodyContainer_ctl05_lblQuestionNumber" class="LabelText">Question: 6 of 7</span>
        </td>
		<td style="width: 15%">
            <span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl05_chkMarked" type="checkbox" name="ctl00$cphMainBodyContainer$ctl05$chkMarked" /><label for="ctl00_cphMainBodyContainer_ctl05_chkMarked">Marked</label></span>
        </td>
		<td style="width: 65%">
            <input type="submit" name="ctl00$cphMainBodyContainer$ctl05$btnSwitch" value="Single question view" id="ctl00_cphMainBodyContainer_ctl05_btnSwitch" class="Button" />
        </td>
	</tr>
	<tr>
		<td>
        </td>
		<td>
        </td>
		<td>
        </td>
	</tr>
	<tr>
		<td colspan="3" style="height: 21px">
            
            <span id="ctl00_cphMainBodyContainer_ctl05_lblQuestionText" class="LabelText"><pre>When running basic authentication the directive AuthUserFile points
to the file containing the users and passwords, 
which command is used to create the file salesusers and add the user salesrep ?</pre></span>
        </td>
	</tr>
	<tr>
		<td colspan="3" valign="top">
        <div id="ctl00_cphMainBodyContainer_ctl05_UpdateProgress1" style="display:none;">
			
                          
                                
                                <div style="top:0px; height:10000px; background-color:White; opacity:0.75; filter:alpha(opacity=1); vertical-align:top; left:0px; z-index:999999; width:1000px; position:absolute; overflow:visible;"></div>
                                <img src="../../Contents/Images/ajax-loader.gif" />
                                    
                        
		</div>
            <div id="ctl00_cphMainBodyContainer_ctl05_upAnswerList">
			
                    <table width="100%" class="LabelText">
                        <tr class="LabelText">
                            <td colspan="3" class="LabelText">
                                <table id="ctl00_cphMainBodyContainer_ctl05_ctl20" class="mylist" onclick="check1(this)" border="0">
				<tr>
					<td><span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl05_ctl20_0" type="radio" name="ctl00$cphMainBodyContainer$ctl05$ctl20" value="60426" /><label for="ctl00_cphMainBodyContainer_ctl05_ctl20_0"><pre>htdigest -c salesusers sales salesrep</pre></label></span></td>
				</tr><tr>
					<td><span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl05_ctl20_1" type="radio" name="ctl00$cphMainBodyContainer$ctl05$ctl20" value="60427" /><label for="ctl00_cphMainBodyContainer_ctl05_ctl20_1"><pre>htdigest salesusers sales salesrep</pre></label></span></td>
				</tr><tr>
					<td><span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl05_ctl20_2" type="radio" name="ctl00$cphMainBodyContainer$ctl05$ctl20" value="60428" /><label for="ctl00_cphMainBodyContainer_ctl05_ctl20_2"><pre>htpasswd salesusers salesrep</pre></label></span></td>
				</tr><tr>
					<td><span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl05_ctl20_3" type="radio" name="ctl00$cphMainBodyContainer$ctl05$ctl20" value="60429" /><label for="ctl00_cphMainBodyContainer_ctl05_ctl20_3"><pre>htpasswd -c salesusers salesrep</pre></label></span></td>
				</tr>
			</table>
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan="3">
                            <div id="ctl00_cphMainBodyContainer_ctl05_divCommentMandatory" style="display:None;" class="ErrorText">
                                  Comments are mandatory for this answer.
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                
                                <div id="ctl00_cphMainBodyContainer_ctl05_divCommentsBox" style="display:none;">
                                    <table>
                                        <tr>
                                            <td>
                                                <span id="ctl00_cphMainBodyContainer_ctl05_lblComment" class="LabelText">Comments:</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 
                                            
                                                <textarea name="ctl00$cphMainBodyContainer$ctl05$txtComment" rows="2" cols="20" id="ctl00_cphMainBodyContainer_ctl05_txtComment" class="LabelText" style="width:319px;"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div id="ctl00_cphMainBodyContainer_ctl05_divErrorMessage" style="display: none">
                                                    <span id="ctl00_cphMainBodyContainer_ctl05_lblCommentError" class="ErrorText">Comment is mandatory</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="LinkText" colspan="3">
                                <div id="ctl00_cphMainBodyContainer_ctl05_divCommentLink" class="LinkText">
                                    <a id="ctl00_cphMainBodyContainer_ctl05_lnkComments" class="LinkText" onclick="DisplayCommentBox(this,ctl00_cphMainBodyContainer_ctl05_divCommentsBox,ctl00_cphMainBodyContainer_ctl05_txtComment)">&raquo; &nbsp;Click here to add comments</a>&nbsp;<br />
                                    &nbsp;&nbsp;</div>
                            </td>
                        </tr>
                    </table>
                
                
		</div>
              
           
        </td>
	</tr>
	<tr style="display: none">
		<td>
            &nbsp; &nbsp;
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl05$hdnSectionID" id="ctl00_cphMainBodyContainer_ctl05_hdnSectionID" value="4" /><input type="hidden" name="ctl00$cphMainBodyContainer$ctl05$hdnSectionName" id="ctl00_cphMainBodyContainer_ctl05_hdnSectionName" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl05$hdnShowSectionHeader" id="ctl00_cphMainBodyContainer_ctl05_hdnShowSectionHeader" value="False" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl05$hdnQuestionID" id="ctl00_cphMainBodyContainer_ctl05_hdnQuestionID" value="23725" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl05$hdnQuestionOrderInAssessment" id="ctl00_cphMainBodyContainer_ctl05_hdnQuestionOrderInAssessment" value="6" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl05$hdnQuestionOrderInSection" id="ctl00_cphMainBodyContainer_ctl05_hdnQuestionOrderInSection" value="6" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl05$hdnSectionOrder" id="ctl00_cphMainBodyContainer_ctl05_hdnSectionOrder" value="4" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl05$hdnShowComment" id="ctl00_cphMainBodyContainer_ctl05_hdnShowComment" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl05$hdnQuestionLevelComment" id="ctl00_cphMainBodyContainer_ctl05_hdnQuestionLevelComment" value="True" />
        </td>
	</tr>
	<tr>
		<td colspan="3">
            <hr id="ctl00_cphMainBodyContainer_ctl05_hrQuestionSeperator" style="width: 100%;"></hr>
        </td>
	</tr>
</table>

<table id="ctl00_cphMainBodyContainer_ctl06_6" style="height: 100%" width="100%" onmouseout="check(this)">
	<tr>
		<td colspan="3" style="height: 19px">
        <div id="ctl00_cphMainBodyContainer_ctl06_divSectionHeader" class="Header" style="Display:none;">
            &nbsp;<span id="ctl00_cphMainBodyContainer_ctl06_lblSectionName">Label</span></div></td>
	</tr>
	<tr>
		<td style="width: 20%">
            <span id="ctl00_cphMainBodyContainer_ctl06_lblQuestionNumber" class="LabelText">Question: 7 of 7</span>
        </td>
		<td style="width: 15%">
            <span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl06_chkMarked" type="checkbox" name="ctl00$cphMainBodyContainer$ctl06$chkMarked" /><label for="ctl00_cphMainBodyContainer_ctl06_chkMarked">Marked</label></span>
        </td>
		<td style="width: 65%">
            <input type="submit" name="ctl00$cphMainBodyContainer$ctl06$btnSwitch" value="Single question view" id="ctl00_cphMainBodyContainer_ctl06_btnSwitch" class="Button" />
        </td>
	</tr>
	<tr>
		<td>
        </td>
		<td>
        </td>
		<td>
        </td>
	</tr>
	<tr>
		<td colspan="3" style="height: 21px">
            
            <span id="ctl00_cphMainBodyContainer_ctl06_lblQuestionText" class="LabelText"><pre>If a site is going to use basic authentication, which module should be used?</pre></span>
        </td>
	</tr>
	<tr>
		<td colspan="3" valign="top">
        <div id="ctl00_cphMainBodyContainer_ctl06_UpdateProgress1" style="display:none;">
			
                          
                                
                                <div style="top:0px; height:10000px; background-color:White; opacity:0.75; filter:alpha(opacity=1); vertical-align:top; left:0px; z-index:999999; width:1000px; position:absolute; overflow:visible;"></div>
                                <img src="../../Contents/Images/ajax-loader.gif" />
                                    
                        
		</div>
            <div id="ctl00_cphMainBodyContainer_ctl06_upAnswerList">
			
                    <table width="100%" class="LabelText">
                        <tr class="LabelText">
                            <td colspan="3" class="LabelText">
                                <table id="ctl00_cphMainBodyContainer_ctl06_ctl20" class="mylist" onclick="check1(this)" border="0">
				<tr>
					<td><span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl06_ctl20_0" type="radio" name="ctl00$cphMainBodyContainer$ctl06$ctl20" value="80398" /><label for="ctl00_cphMainBodyContainer_ctl06_ctl20_0"><pre>LoadModule mod_authentic_basic</pre></label></span></td>
				</tr><tr>
					<td><span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl06_ctl20_1" type="radio" name="ctl00$cphMainBodyContainer$ctl06$ctl20" value="80399" /><label for="ctl00_cphMainBodyContainer_ctl06_ctl20_1"><pre>LoadModule mod_auth_digest</pre></label></span></td>
				</tr><tr>
					<td><span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl06_ctl20_2" type="radio" name="ctl00$cphMainBodyContainer$ctl06$ctl20" value="80400" /><label for="ctl00_cphMainBodyContainer_ctl06_ctl20_2"><pre>LoadModule mod_basic_auth or mod_auth</pre></label></span></td>
				</tr><tr>
					<td><span class="LabelText"><input id="ctl00_cphMainBodyContainer_ctl06_ctl20_3" type="radio" name="ctl00$cphMainBodyContainer$ctl06$ctl20" value="80401" /><label for="ctl00_cphMainBodyContainer_ctl06_ctl20_3"><pre>LoadModule mod_ssl</pre></label></span></td>
				</tr>
			</table>
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan="3">
                            <div id="ctl00_cphMainBodyContainer_ctl06_divCommentMandatory" style="display:None;" class="ErrorText">
                                  Comments are mandatory for this answer.
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                
                                <div id="ctl00_cphMainBodyContainer_ctl06_divCommentsBox" style="display:none;">
                                    <table>
                                        <tr>
                                            <td>
                                                <span id="ctl00_cphMainBodyContainer_ctl06_lblComment" class="LabelText">Comments:</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 
                                            
                                                <textarea name="ctl00$cphMainBodyContainer$ctl06$txtComment" rows="2" cols="20" id="ctl00_cphMainBodyContainer_ctl06_txtComment" class="LabelText" style="width:319px;"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div id="ctl00_cphMainBodyContainer_ctl06_divErrorMessage" style="display: none">
                                                    <span id="ctl00_cphMainBodyContainer_ctl06_lblCommentError" class="ErrorText">Comment is mandatory</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="LinkText" colspan="3">
                                <div id="ctl00_cphMainBodyContainer_ctl06_divCommentLink" class="LinkText">
                                    <a id="ctl00_cphMainBodyContainer_ctl06_lnkComments" class="LinkText" onclick="DisplayCommentBox(this,ctl00_cphMainBodyContainer_ctl06_divCommentsBox,ctl00_cphMainBodyContainer_ctl06_txtComment)">&raquo; &nbsp;Click here to add comments</a>&nbsp;<br />
                                    &nbsp;&nbsp;</div>
                            </td>
                        </tr>
                    </table>
                
                
		</div>
              
           
        </td>
	</tr>
	<tr style="display: none">
		<td>
            &nbsp; &nbsp;
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl06$hdnSectionID" id="ctl00_cphMainBodyContainer_ctl06_hdnSectionID" value="4" /><input type="hidden" name="ctl00$cphMainBodyContainer$ctl06$hdnSectionName" id="ctl00_cphMainBodyContainer_ctl06_hdnSectionName" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl06$hdnShowSectionHeader" id="ctl00_cphMainBodyContainer_ctl06_hdnShowSectionHeader" value="False" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl06$hdnQuestionID" id="ctl00_cphMainBodyContainer_ctl06_hdnQuestionID" value="28549" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl06$hdnQuestionOrderInAssessment" id="ctl00_cphMainBodyContainer_ctl06_hdnQuestionOrderInAssessment" value="7" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl06$hdnQuestionOrderInSection" id="ctl00_cphMainBodyContainer_ctl06_hdnQuestionOrderInSection" value="7" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl06$hdnSectionOrder" id="ctl00_cphMainBodyContainer_ctl06_hdnSectionOrder" value="4" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl06$hdnShowComment" id="ctl00_cphMainBodyContainer_ctl06_hdnShowComment" />
            <input type="hidden" name="ctl00$cphMainBodyContainer$ctl06$hdnQuestionLevelComment" id="ctl00_cphMainBodyContainer_ctl06_hdnQuestionLevelComment" value="True" />
        </td>
	</tr>
	<tr>
		<td colspan="3">
            <hr id="ctl00_cphMainBodyContainer_ctl06_hrQuestionSeperator" style="width: 100%;"></hr>
        </td>
	</tr>
</table>


                <br />
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <br />
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="ctl00$cphMainBodyContainer$btnFinishBottom" value="Finish assessment" onclick="javascript:return ConfirmFinish();" id="ctl00_cphMainBodyContainer_btnFinishBottom" class="Button" style="display:;" />
            </td>
            <td>
                <input name="ctl00$cphMainBodyContainer$btnCommentBottom" type="button" id="ctl00_cphMainBodyContainer_btnCommentBottom" value="Assessment level comment" class="Button" onclick="javascript:CommentPopUp(document.forms[\'aspnetForm\'].elements[\'ctl00_cphMainBodyContainer_hdnID\'].value);" />
            </td>
            <td>
            </td>
            <td>
            </td>
        </tr>
    </table>

                    </td>
                </tr>
              </table>
        </div>
    
<div>

	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWdgKryuCpAgKIp+nkBAKq3ttGAoeJ7JoPApP6oqAKAov1ir0BAuLolKALAuWys7QIAuSys7QIAq+ByNoHAvfalfIHApOrwLYCAqDyzb0EAsfX6eYLAujgu6YJAvb6o5YKAqKztPIHArPyrYEKApPyvOoGAviv7OoHAov1lpEKAuLo4IsGAum1+LgFAum15N0MAum1oO8GAvfa2dEKApOrpMAGAr/8uMYBAtSQnqcCAujgn+YPApKZ8cQOAqnxkxIC0vygggwCyPW9lAkC/YSE+AMCi/WCtAMC4ui8qgoCxrOT6AQCx7OT6AQCr4Gg7gMC3PHPnAEC+MGK1wkC7L3XqwsC546wvQ0Cg8qB6A4Ck9H9vwMCkNzI4AwC/73ngg4C/fi+zwECjsPO7gUCi/XuhgYC4uioxwoCuba3/AMCura3/AMCu7a3/AMCvLa3/AMCr4GM0AsC8My8+wwCjJ2XogcC/678xA8C6MvFiA4C98uI5AcCzf7E0QUCyvDlnQoCkq+0iAYCpuO59QMC3K6dqAkCi/WalAUC4uiknwUCpJWklQgCo5WklQgCr4H4nAkC3PGH6AcC+MHy0QYCwZq67wYCy6evlQ8Cg8qprwECjc2pnAEC4t+9zA4C1JqazgUC6M73nwsC2Inr7gkCi/XmmgkC4uiwvQsCv7aTmwUCoLaTmwUCsbaTmwUCsraTmwUCr4HkpgcC6b6/iA8Cyf3v7gwCj+mL/A0C+/a5/gYCnrOrhAIC1o7LzAoCkLq/jgECounziAQC9OfZxgsCguuP9wUCi/XSvQIC4ujMqQQCntDd7QMCn9Dd7QMC67vPxAYC7LvPxAYCr4HQsAUC6b7T6A8Cyf3z+QECody1pgoC66ijqA0CnrPv1Q0CrPbQsQEC2aOj2gYCtNzFmAYCjoL9owEC+YGmhQcCjNzc5AYCjfay0QuaLny2RUt2Xx3Hbb2LfY41q9gs4A==" />
</div>

<script type="text/javascript">
<!--
WebForm_AutoFocus(\'ctl00_cphMainBodyContainer_txtTimer\');Sys.Application.initialize();
Sys.Application.add_init(function() {
    $create(Sys.UI._UpdateProgress, {"associatedUpdatePanelId":"ctl00_cphMainBodyContainer_ctl00_upAnswerList","displayAfter":50,"dynamicLayout":true}, null, null, $get("ctl00_cphMainBodyContainer_ctl00_UpdateProgress1"));
});
Sys.Application.add_init(function() {
    $create(Sys.UI._UpdateProgress, {"associatedUpdatePanelId":"ctl00_cphMainBodyContainer_ctl01_upAnswerList","displayAfter":50,"dynamicLayout":true}, null, null, $get("ctl00_cphMainBodyContainer_ctl01_UpdateProgress1"));
});
Sys.Application.add_init(function() {
    $create(Sys.UI._UpdateProgress, {"associatedUpdatePanelId":"ctl00_cphMainBodyContainer_ctl02_upAnswerList","displayAfter":50,"dynamicLayout":true}, null, null, $get("ctl00_cphMainBodyContainer_ctl02_UpdateProgress1"));
});
Sys.Application.add_init(function() {
    $create(Sys.UI._UpdateProgress, {"associatedUpdatePanelId":"ctl00_cphMainBodyContainer_ctl03_upAnswerList","displayAfter":50,"dynamicLayout":true}, null, null, $get("ctl00_cphMainBodyContainer_ctl03_UpdateProgress1"));
});
Sys.Application.add_init(function() {
    $create(Sys.UI._UpdateProgress, {"associatedUpdatePanelId":"ctl00_cphMainBodyContainer_ctl04_upAnswerList","displayAfter":50,"dynamicLayout":true}, null, null, $get("ctl00_cphMainBodyContainer_ctl04_UpdateProgress1"));
});
Sys.Application.add_init(function() {
    $create(Sys.UI._UpdateProgress, {"associatedUpdatePanelId":"ctl00_cphMainBodyContainer_ctl05_upAnswerList","displayAfter":50,"dynamicLayout":true}, null, null, $get("ctl00_cphMainBodyContainer_ctl05_UpdateProgress1"));
});
Sys.Application.add_init(function() {
    $create(Sys.UI._UpdateProgress, {"associatedUpdatePanelId":"ctl00_cphMainBodyContainer_ctl06_upAnswerList","displayAfter":50,"dynamicLayout":true}, null, null, $get("ctl00_cphMainBodyContainer_ctl06_UpdateProgress1"));
});
// -->
</script>
</form>
     
<!--<script language="javascript" type="text/javascript">drawFooter();</script>-->
<script language="javascript" type="text/javascript">
function PrivacyPopup()
{
     var popupPrivacy;
     popupPrivacy = window.open(\'http://standards.corp.hp.com/policy/docs/HP002-03.htm\', "Privacy", "width=600,height=500,top=100,left=100,toolbars=no,scrollbars=yes,status=no,resizable=no");    
}
function TermPopup()
{
     var popupTerm;
     popupTerm = window.open(\'http://welcome.hp.com/country/us/en/termsofuse.html\', "Term", "width=600,height=500,top=100,left=100,toolbars=no,scrollbars=yes,status=no,resizable=no");    
}
//function SupportPopup()
//{
//     var popupSupport;
//     popupSupport = window.open(\'http://teams1.sharepoint.hp.com/teams/pmpi/help/Wiki%20Pages/support.aspx\', "Support", "width=600,height=500,top=100,left=100,toolbars=no,scrollbars=yes,status=no,resizable=yes");    
//}
//function FeedbackPopup()
//{
//     var popupFeedBack;
//     popupFeedBack = window.open(\'http://teams1.sharepoint.hp.com/teams/pmpi/help/Wiki%20Pages/feedback.aspx\', "Feedback","width=800,height=600,toolbars=no,scrollbars=yes,status=no,resizable=yes");    
//}
</script>
<table cellSpacing="0" cellPadding="2" width="100%" border="0" id="tblfooter">
	<tr>
		<td class="footerSkin" vAlign="top" align="center" width="100%" colspan="4">
		<a href="#" onclick="PrivacyPopup();">
		Privacy Statement</a>&nbsp;|&nbsp;<a class="footerSkin" href="#" onclick="TermPopup();">Terms 
		of Use</a>&nbsp;|&nbsp;<a href=\'http://ent102.sharepoint.hp.com/teams/pmpi/help/wiki%20pages/feedback.aspx\' target="_blank" >Feedback</a>&nbsp;|&nbsp;<a href=\'http://ent102.sharepoint.hp.com/teams/pmpi/help/Wiki%20Pages/support.aspx\' target="_blank">Support</a>&nbsp;|&nbsp;HP 
		Restricted<br>
&nbsp;<div class="copyright">
			© Copyright 2008 Hewlett-Packard Development Company, L.P</div>
		</td>
	</tr>
</table>

</body>
</html>
';



//Get the ?data string
//    <form name="aspnetForm" method="post" action="Assessment.aspx?data=(.*?)" id="aspnetForm">
preg_match_all('/<form name="aspnetForm" method="post" action="Assessment.aspx\?data=(.*?)" id="aspnetForm">/si', $data, $qstring);
//print_r($qstring);
echo "<a href='http://g1w0838.austin.hp.com/PMPINextGen/Code/Assessment/AssessmentSummary.aspx?data=".$qstring[1][0]."'>link</a>";


//Gets the question titles
preg_match_all('/<span id="ctl00_cphMainBodyContainer_ctl0._lblQuestionText" class="LabelText"><pre>(.*?)<\/pre><\/span>/si', $data, $matches);

//Gets the count of the questions
preg_match_all('/<span id="ctl00_cphMainBodyContainer_ctl00_lblQuestionNumber" class="LabelText">Question: 1 of (.*?)<\/span>/si', $data, $qcount);
$questions = $matches[1];


//Gets the sections
echo "Sections:<br>";

	
	//Sections parser (all subtypes)
	preg_match_all('/<span id="ctl00_cphMainBodyContainer_ctl.._lblSectionName">(.*?)<\/span>/si', $data, $techz);
	$subtypes=array();
	
	foreach($techz[1] as $k=>$v){
	$v = trim($v);
		if(!in_array($v, $subtypes, true) && trim($v)!="Label" && trim($v)!="Process standard"){
			array_push($subtypes, $v);
		}
	}
	
	print_r($subtypes);
	
	
?>
<br><br>

Another HTML: <form method=post>
<textarea name="data"></textarea>
<input type="submit" value="GO">
</form>