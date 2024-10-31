<?php
error_reporting(0);
apiControl("lastlogin");
global $wpdb;

$home  = explode('/', home_url());
$urli  = $home[2];
$table = $wpdb->prefix . "avgvideolinks";

$categories = array('http://www.youporn.com/category/1/amateur/'=> 'Amateur','http://www.youporn.com/category/2/anal/'=> 'Anal','http://www.youporn.com/category/3/asian/'=> 'Asian','http://www.youporn.com/category/4/bbw/'=> 'BBW','http://www.youporn.com/category/6/big-butt/'=> 'Big Butt','http://www.youporn.com/category/7/big-tits/'=> 'Big Tits','http://www.youporn.com/category/5/bisexual/'=> 'Bisexual','http://www.youporn.com/category/51/blonde/'=> 'Blonde','http://www.youporn.com/category/9/blowjob/'=> 'Blowjob','http://www.youporn.com/category/52/brunette/'=> 'Brunette','http://www.youporn.com/category/41/casting/'=> 'Casting','http://www.youporn.com/category/10/college/'=> 'College','http://www.youporn.com/category/11/compilation/'=> 'Compilation','http://www.youporn.com/category/69/cosplay/'=> 'Cosplay','http://www.youporn.com/category/12/couples/'=> 'Couples','http://www.youporn.com/category/13/creampie/'=> 'Creampie','http://www.youporn.com/category/37/cumshots/'=> 'Cumshots','http://www.youporn.com/category/15/cunnilingus/'=> 'Cunnilingus','http://www.youporn.com/category/44/dildos-toys/'=> 'Dildos/Toys','http://www.youporn.com/category/16/dp/'=> 'DP','http://www.youporn.com/category/8/ebony/'=> 'Ebony','http://www.youporn.com/category/48/european/'=> 'European','http://www.youporn.com/category/17/facial/'=> 'Facial','http://www.youporn.com/category/42/fantasy/'=> 'Fantasy','http://www.youporn.com/category/67/female-friendly/'=> 'Female Friendly','http://www.youporn.com/category/18/fetish/'=> 'Fetish','http://www.youporn.com/category/62/fingering/'=> 'Fingering','http://www.youporn.com/category/19/funny/'=> 'Funny','http://www.youporn.comhttp://www.youporngay.com/'=> 'Gay','http://www.youporn.com/category/58/german/'=> 'German','http://www.youporn.com/category/50/gonzo/'=> 'Gonzo','http://www.youporn.com/category/46/hairy/'=> 'Hairy','http://www.youporn.com/category/22/handjob/'=> 'Handjob','http://www.youporn.com/category/65/hd/'=> 'HD','http://www.youporn.com/category/23/hentai/'=> 'Hentai','http://www.youporn.com/category/66/homemade/'=> 'Homemade','http://www.youporn.com/category/24/instructional/'=> 'Instructional','http://www.youporn.com/category/25/interracial/'=> 'Interracial','http://www.youporn.com/category/71/japanese/'=> 'Japanese','http://www.youporn.com/category/40/kissing/'=> 'Kissing','http://www.youporn.com/category/49/latina/'=> 'Latina','http://www.youporn.com/category/26/lesbian/'=> 'Lesbian','http://www.youporn.com/category/64/massage/'=> 'Massage','http://www.youporn.com/category/55/masturbation/'=> 'Masturbation','http://www.youporn.com/category/28/mature/'=> 'Mature','http://www.youporn.com/category/29/milf/'=> 'MILF','http://www.youporn.com/category/21/orgy/'=> 'Orgy','http://www.youporn.com/category/56/panties/'=> 'Panties','http://www.youporn.com/category/57/pantyhose/'=> 'Pantyhose','http://www.youporn.com/category/36/pov/'=> 'POV','http://www.youporn.com/category/30/public/'=> 'Public','http://www.youporn.com/category/53/redhead/'=> 'Redhead','http://www.youporn.com/category/43/rimming/'=> 'Rimming','http://www.youporn.com/category/61/romantic/'=> 'Romantic','http://www.youporn.com/category/54/shaved/'=> 'Shaved','http://www.youporn.com/category/31/shemale/'=> 'Shemale','http://www.youporn.com/category/27/solo-girl/'=> 'Solo girl','http://www.youporn.com/category/60/solo-male/'=> 'Solo Male','http://www.youporn.com/category/39/squirting/'=> 'Squirting','http://www.youporn.com/category/47/straight-sex/'=> 'Straight Sex','http://www.youporn.com/category/59/swallow/'=> 'Swallow','http://www.youporn.com/category/32/teen/'=> 'Teen','http://www.youporn.com/category/38/threesome/'=> 'Threesome','http://www.youporn.com/category/73/verified-amateurs/'=> 'Verified Amateurs','http://www.youporn.com/category/33/vintage/'=> 'Vintage','http://www.youporn.com/category/34/voyeur/'=> 'Voyeur','http://www.youporn.com/category/35/webcam/'=> 'Webcam','http://www.youporn.com/category/45/young-old/'=> 'Young/Old','http://www.youporn.com/category/63/3d/'=> '3D');

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
	$getvideo = getVideos("youporn", $category, $page);
	$listvids = json_decode($getvideo);
	$i = 0;
	foreach($listvids as $videos){
		$title 		= $videos->title;
		$image 		= $videos->image;
		$duration 	= $videos->duration;
		$videoid  	= $videos->videoid;
		$videourl	= base64urlencode("youporn|$videoid|$urli");
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