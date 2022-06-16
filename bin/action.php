<html>
<body>

<?php
$org = $_POST["organism"];
$orgFile = "modelreport_" . $org .".html";
$orgFile = str_replace(' ','_',$orgFile);
$loc = "../reports/" . $orgFile;
include $loc;
?>

</body>
</html>