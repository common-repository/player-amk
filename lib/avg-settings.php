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
</style>
<?php
$activetab = $_GET['tab'];
if(!$activetab){ 
	$activetab = 'general';
}

settingstab($activetab);

switch($activetab){
	case "general":
	include 'admin/general.php';
	break;	

	case "player":
	include 'admin/player.php';
	break;	

		case "ads":
	include 'admin/ads.php';
	break;	

	default:
	include 'admin/general.php';
	break;
}
?>