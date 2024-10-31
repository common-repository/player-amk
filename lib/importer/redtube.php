<?php
error_reporting(0);
apiControl("lastlogin");
global $wpdb;

$home  = explode('/', home_url());
$urli  = $home[2];
$table = $wpdb->prefix . "avgvideolinks";

$categories = array('http://www.redtube.com/redtube/amateur'=> 'Amateur','http://www.redtube.com/redtube/anal'=> 'Anal','http://www.redtube.com/redtube/arab'=> 'Arab','http://www.redtube.com/redtube/asian'=> 'Asian','http://www.redtube.com/redtube/bigtits'=> 'Big Tits','http://www.redtube.com/redtube/blonde'=> 'Blonde','http://www.redtube.com/redtube/blowjob'=> 'BlowJob','http://www.redtube.com/redtube/casting'=> 'Casting','http://www.redtube.com/redtube/compilation'=> 'Compilation','http://www.redtube.com/redtube/creampie'=> 'Creampie','http://www.redtube.com/redtube/cumshot'=> 'CumShot','http://www.redtube.com/redtube/doublepenetration'=> 'Doublepenetration','http://www.redtube.com/redtube/ebony'=> 'Ebony','http://www.redtube.com/redtube/facials'=> 'Facials','http://www.redtube.com/redtube/fetish'=> 'Fetish','http://www.redtube.com/redtube/gangbang'=> 'GangBang','http://www.redtube.com/redtube/gay'=> 'Gay','http://www.redtube.com/redtube/group'=> 'Group','http://www.redtube.com/redtube/interracial'=> 'interracial','http://www.redtube.com/redtube/japanese'=> 'Japanese','http://www.redtube.com/redtube/latina'=> 'Latina','http://www.redtube.com/redtube/lesbian'=> 'Lesbian','http://www.redtube.com/redtube/lingerie'=> 'Lingerie','http://www.redtube.com/redtube/milf'=> 'Milf','http://www.redtube.com/redtube/masturbation'=> 'Masturbation','http://www.redtube.com/redtube/mature'=> 'Mature','http://www.redtube.com/redtube/pov'=> 'Pov','http://www.redtube.com/redtube/public'=> 'Public','http://www.redtube.com/redtube/redhead'=> 'RedHead','http://www.redtube.com/redtube/shemale'=> 'SheMale','http://www.redtube.com/redtube/squirting'=> 'Squirting','http://www.redtube.com/redtube/teens'=> 'Teen','http://www.redtube.com/redtube/vintage'=> 'Vintage','http://www.redtube.com/redtube/wildcrazy'=> 'WildCrazy','http://www.redtube.com/redtube/youngandold'=> 'YoungandOld');

?>
<form method="post" action="" novalidate="novalidate">
	<table class="form-table">
		<tr>
			<th scope="row">
				<label>Select Category & Page</label>
			</th>
			<td>
				<select name="category" class="medium">
					<?php echo makeDropDown($categories, $_POST['category']); ?>
				</select>					
				&middot; <strong>Page:</strong> <input type="text" name="page" class="small" value="<?php if($_POST['page'] == ""){ echo "1"; } else{ echo $_POST['page']; } ?>" />									
				<input type="submit" name="submit" id="submit" class="button button-primary" value="Get Videos" />
				<input type="hidden" name="getvideos" value="1" />
			</td>
		</tr>
	</table>
</form>
<div id="the-list">
<?php
if($_POST['addvideo'] == 1){
	include "save-video.php";
}
if($_POST['getvideos'] == 1){
	$zlmxsdir = plugins_url() . '/'. plugin_basename(plugin_dir_path( __FILE__ ));
	$category = $_POST['category'];
	$page	  = $_POST['page'];
	$yourcat  = $_POST['cat'];
	$getvideo = getVideos("redtube", $category, $page);
	$listvids = json_decode($getvideo);
	$i = 0;
	foreach($listvids as $videos){
		$title 		= $videos->title;
		$image 		= $videos->image;
		$duration 	= $videos->duration;
		$videoid  	= $videos->videoid;
		$videourl	= base64urlencode("redtube|$videoid|$urli");
		$playerurl  = "$zlmxsdir/play.php?video=$videourl";
		$videolink  = $videos->video_link;
		$checkdb	= $wpdb->get_var("SELECT * FROM $table WHERE videolink = '$videolink'");
		
			$i++;
	?>
		<div class="plugin-card plugin-card-bbpress">
			<div class="plugin-card-top">
				<div class="name column-name">
					<form method="post" action="" novalidate="novalidate">
						
								<strong>Video Title:</strong><br>
						
							<input name="title" value="<?php echo $title; ?>" style="width:100%;" class="large" />
								<img src="<?php echo $image; ?>" class="plugin-icon" alt="">
						
					
				</div>
				
				<div class="desc column-description">
				
					
							<strong>Tags:</strong><br>
					
							<input name="tags" value="" placeholder="aaaa,bbbb,cccc,dddd" style="width:100%;" class="large" />
					<br>
							<strong>Description:</strong>
						<br>
							<textarea name="description" style="width:100%;" rows="4"  class="large"></textarea>
					
				</div>
				
			</div>
			<div class="plugin-card-bottom">
				<div class="vers column-rating"><strong>Categories:</strong>
				<div id="categorydiv" class="postbox ">
				
<div class="inside">
	<div id="taxonomy-category" class="categorydiv">
		



		<div id="category-all" class="tabs-panel">
				<?php multipleCat(); ?>
					</div>
			
			</div>
	</div>
</div>
				</div>
				<div class="column-updated">
					<strong>Video Duration:</strong> <?php echo $duration; ?>		<br>	<br>		

							<strong>Post Status:</strong>	<br>	
						
							<select name="status" class="small">
								<option value="publish">Publish</option>
								<option value="draft">Draft</option>
						 </select>
						 	<input type="hidden" name="image" value="<?php echo $image; ?>" />
							<input type="hidden" name="category" value="<?php echo $yourcat; ?>" />
							<input type="hidden" name="playerurl" value="<?php echo $playerurl; ?>" />
							<input type="hidden" name="videolink" value="<?php echo $videolink; ?>" /><br>	<br>	
					<?php if(!$checkdb){ ?>
					<button type="submit" name="submit" id="submit" class="button button-primary">Add This Video</button>
					<br><br>
					<a type="button" href="<?php echo $playerurl;?>" target="_blank" class="button button-info">Preview</a>
					<?php } else { ?>
					<button type="submit" name="submit" id="submit" class="button button-secondary" disabled>You Already Have This Video</button>
					<br><br>
					<a type="button" href="<?php echo $playerurl;?>" target="_blank" class="button button-info">Preview</a>
						<?php }  ?>
					<input type="hidden" name="addvideo" value="1" />
					</form>
					</div>
			
			
			</div>
		</div>
	<?php
		
	}
	if($i == 0){
		echo '<div id="message" class="updated fade" style="color:orange; font-weight: bold;"><p>No result for this page! Try another page.</p></div>';
	}
}
?>
	</div>