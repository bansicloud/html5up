<?php
	
	include("http://wakilapp.azurewebsites.net/integrations/views.php");
	include("http://wakilapp.azurewebsites.net/integrations/views4.php");
	
$emailbody = 0;
if (!empty($_GET['emailbody'])) {
$emailbody = $_GET['emailbody'];
}

$subject = 0;
if (!empty($_GET['subject'])) {
$subject = $_GET['subject'];
}


header ("location: mailto:ck@wakilapp.com?subject=".$subject."&body=".$emailbody);
?>
