<?php
error_reporting(0);
apiControl("lastlogin");
global $wpdb;

$home  = explode('/', home_url());
$urli  = $home[2];
$table = $wpdb->prefix . "avgvideolinks";

$categories = array('http://www.spankwire.com/categories/Straight/Amateur/Submitted/16'=> 'Amateur','http://www.spankwire.com/categories/Straight/Anal/Submitted/20'=> 'Anal','http://www.spankwire.com/categories/Straight/Asian/Submitted/40'=> 'Asian','http://www.spankwire.com/categories/Straight/BBW/Submitted/80'=> 'BBW','http://www.spankwire.com/categories/Straight/Big+Boobs/Submitted/59'=> 'Big Boobs','http://www.spankwire.com/categories/Straight/Blonde/Submitted/74'=> 'Blonde','http://www.spankwire.com/categories/Straight/Blowjob/Submitted/75'=> 'Blowjob','http://www.spankwire.com/categories/Straight/Brunette/Submitted/76'=> 'Brunette','http://www.spankwire.com/categories/Straight/Celebrity/Submitted/38'=> 'Celebrity','http://www.spankwire.com/categories/Straight/Dildo+Toys/Submitted/67'=> 'Dildo/Toys','http://www.spankwire.com/categories/Straight/Ebony/Submitted/60'=> 'Ebony','http://www.spankwire.com/categories/Straight/Fetish/Submitted/69'=> 'Fetish','http://www.spankwire.com/categories/Straight/Group/Submitted/68'=> 'Group','http://www.spankwire.com/categories/Straight/Hardcore/Submitted/64'=> 'Hardcore','http://www.spankwire.com/categories/Straight/HD/Submitted/83'=> 'HD','http://www.spankwire.com/categories/Straight/Hentai+Anime/Submitted/21'=> 'Hentai &amp; Anime','http://www.spankwire.com/categories/Straight/Interracial/Submitted/61'=> 'Interracial','http://www.spankwire.com/categories/Straight/Latina/Submitted/62'=> 'Latina','http://www.spankwire.com/categories/Straight/Lesbian/Submitted/66'=> 'Lesbian','http://www.spankwire.com/categories/Straight/Mature/Submitted/63'=> 'Mature','http://www.spankwire.com/categories/Straight/Milf/Submitted/19'=> 'Milf','http://www.spankwire.com/categories/Straight/Porn+Stars/Submitted/39'=> 'Porn Stars','http://www.spankwire.com/categories/Straight/Softcore/Submitted/65'=> 'Softcore','http://www.spankwire.com/categories/Straight/Spanking/Submitted/84'=> 'Spanking','http://www.spankwire.com/categories/Straight/Teen/Submitted/71'=> 'Teen','http://www.spankwire.com/categories/Straight/Voyeur/Submitted/17'=> 'Voyeur','http://www.spankwire.com/home1/Gay/Week/Rating'=> 'GAY Top Rated','http://www.spankwire.com/home1/Gay/Week/Views'=> 'GAY Most Viewed','http://www.spankwire.com/home1/Gay/Week/Comments'=> 'GAY Talked About','http://www.spankwire.com/home1/Gay/Week/Duration'=> 'GAY Longest','http://www.spankwire.com/home2/Gay/Upcoming/All_Time/Submitted'=> 'GAY Most Recent','http://www.spankwire.com/home1/Tranny/Week/Rating'=> 'Tranny Top Rated','http://www.spankwire.com/home1/Tranny/Week/Views'=> 'Tranny Most Viewed','http://www.spankwire.com/home1/Tranny/Week/Comments'=> 'Tranny Talked About','http://www.spankwire.com/home1/Tranny/Week/Duration'=> 'Tranny Longest','http://www.spankwire.com/home2/Tranny/Upcoming/All_Time/Submitted'=> 'Tranny Most Recent');

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
	$getvideo = getVideos("spankwire", $category, $page);
	$listvids = json_decode($getvideo);
	$i = 0;
	foreach($listvids as $videos){
		$title 		= $videos->title;
		$image 		= $videos->image;
		$duration 	= $videos->duration;
		$videoid  	= $videos->videoid;
		$videourl	= base64urlencode("spankwire|$videoid|$urli");
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