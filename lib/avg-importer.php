<style>
.small{
	width: 150px;
}
.medium{
	width: 250px;
}
.large{
	width: 400px;
}
.smalldesc{
	font-size: 10px;
}
.clear{
	clear: both;
}
</style>
<?php
$activetab = $_GET['tab'];
if(!$activetab){ 
	$activetab = 'redtube';
}

importerstab($activetab);

switch($activetab){
	case "redtube":
	include 'importer/redtube.php';
	break;	

	case "txxx":
	include 'importer/txxx.php';
	break;	
	

    case "xhamster":
	include 'importer/xhamster.php';
	break;	

 case "spankwire":
	include 'importer/spankwire.php';
	break;	
 
case "ah-me":
	include 'importer/ah-me.php';
	break;	

 case "youporn":
	include 'importer/youporn.php';
	break;	

	default:
	include 'importer/redtube.php';
	break;
}
?>