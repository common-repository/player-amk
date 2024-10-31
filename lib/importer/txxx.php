<?php
error_reporting(0);
apiControl("lastlogin");
global $wpdb;

$home  = explode('/', home_url());
$urli  = $home[2];
$table = $wpdb->prefix . "avgvideolinks";

$categories = array('http://m.txxx.com/categories/amateur/'=> 'Amateur','http://m.txxx.com/categories/anal/'=> 'Anal','http://m.txxx.com/categories/asian/'=> 'Asian','http://m.txxx.com/categories/babes/'=> 'Babes','http://m.txxx.com/categories/bbw/'=> 'BBW','http://m.txxx.com/categories/bdsm/'=> 'BDSM','http://m.txxx.com/categories/big-butt/'=> 'Big Butt','http://m.txxx.com/categories/big-dick/'=> 'Big Dick','http://m.txxx.com/categories/big-tits/'=> 'Big Tits','http://m.txxx.com/categories/bisexual/'=> 'Bisexual','http://m.txxx.com/categories/ebony/'=> 'Ebony','http://m.txxx.com/categories/blonde/'=> 'Blonde','http://m.txxx.com/categories/blowjob/'=> 'Blowjob','http://m.txxx.com/categories/brunette/'=> 'Brunette','http://m.txxx.com/categories/college/'=> 'Teen','http://m.txxx.com/categories/compilation/'=> 'Compilation','http://m.txxx.com/categories/creampie/'=> 'Creampie','http://m.txxx.com/categories/cuckold/'=> 'Cuckold','http://m.txxx.com/categories/cumshots/'=> 'Cumshots','http://m.txxx.com/categories/cunnilingus/'=> 'Cunnilingus','http://m.txxx.com/categories/dildos-toys/'=> 'Dildos/Toys','http://m.txxx.com/categories/dp/'=> 'DP','http://m.txxx.com/categories/european/'=> 'European','http://m.txxx.com/categories/face-sitting/'=> 'Face Sitting','http://m.txxx.com/categories/facial/'=> 'Facial','http://m.txxx.com/categories/femdom/'=> 'Femdom','http://m.txxx.com/categories/fetish/'=> 'Fetish','http://m.txxx.com/categories/fingering/'=> 'Fingering','http://m.txxx.com/categories/foot-fetish/'=> 'Foot Fetish','http://m.txxx.com/categories/funny/'=> 'Funny','http://m.txxx.com/categories/gangbang/'=> 'Gangbang','http://m.txxx.com/categories/gaping/'=> 'Gaping','http://m.txxx.com/categories/gay-amateur/'=> 'GAY Amateur','http://m.txxx.com/categories/gay-bareback/'=> 'GAY Bareback','http://m.txxx.com/categories/gay-bears/'=> 'GAY Bears','http://m.txxx.com/categories/gay-big-dick/'=> 'GAY Big Dick','http://m.txxx.com/categories/gay-blowjob/'=> 'GAY Blowjob','http://m.txxx.com/categories/gay-crossdressers/'=> 'GAY Crossdressers','http://m.txxx.com/categories/gay-cum-tributes/'=> 'GAY Cum Tributes ','http://m.txxx.com/categories/gay-daddies/'=> 'GAY Daddies','http://m.txxx.com/categories/gay-dildos-toys/'=> 'GAY Dildos/Toys','http://m.txxx.com/categories/gay-fetish/'=> 'GAY Fetish ','http://m.txxx.com/categories/gay-group-sex/'=> 'GAY Group Sex','http://m.txxx.com/categories/gay-handjob/'=> 'GAY Handjob','http://m.txxx.com/categories/gay-hunks/'=> 'GAY Hunks','http://m.txxx.com/categories/gay-interracial/'=> 'GAY Interracial','http://m.txxx.com/categories/gay-latin/'=> 'GAY Latin Boys','http://m.txxx.com/categories/gay-masturbate/'=> 'GAY Masturbate','http://m.txxx.com/categories/gay-men/'=> 'Gay Men','http://m.txxx.com/categories/gay-muscle/'=> 'GAY Muscle','http://m.txxx.com/categories/gay-outdoor/'=> 'GAY Outdoor','http://m.txxx.com/categories/gay-sex/'=> 'Gay Sex','http://m.txxx.com/categories/gay-solo-male/'=> 'GAY Solo Male','http://m.txxx.com/categories/gay-twinks/'=> 'GAY Twinks','http://m.txxx.com/categories/gay-webcams/'=> 'GAY Webcams','http://m.txxx.com/categories/german/'=> 'German','http://m.txxx.com/categories/grannies/'=> 'Grannies','http://m.txxx.com/categories/group-sex/'=> 'Group Sex','http://m.txxx.com/categories/hairy/'=> 'Hairy','http://m.txxx.com/categories/handjob/'=> 'Handjob','http://m.txxx.com/categories/hardcore/'=> 'Hardcore','http://m.txxx.com/categories/hd/'=> 'HD','http://m.txxx.com/categories/hidden-cams/'=> 'Hidden Cams','http://m.txxx.com/categories/indian/'=> 'Indian','http://m.txxx.com/categories/interracial/'=> 'Interracial','http://m.txxx.com/categories/japanese/'=> 'Japanese','http://m.txxx.com/categories/latex/'=> 'Latex','http://m.txxx.com/categories/latina/'=> 'Latina','http://m.txxx.com/categories/lesbian/'=> 'Lesbian','http://m.txxx.com/categories/lingerie/'=> 'Lingerie','http://m.txxx.com/categories/massage/'=> 'Massage','http://m.txxx.com/categories/masturbate/'=> 'Masturbate','http://m.txxx.com/categories/mature/'=> 'Mature','http://m.txxx.com/categories/milf/'=> 'MILF','http://m.txxx.com/categories/nipples/'=> 'Nipples','http://m.txxx.com/categories/Oldie/'=> 'Young/Old','http://m.txxx.com/categories/panties/'=> 'Panties','http://m.txxx.com/categories/pornstars/'=> 'Pornstars','http://m.txxx.com/categories/pov/'=> 'POV','http://m.txxx.com/categories/public/'=> 'Public','http://m.txxx.com/categories/reality/'=> 'Reality','http://m.txxx.com/categories/redhead/'=> 'Redhead','http://m.txxx.com/categories/rimming/'=> 'Rimming','http://m.txxx.com/categories/romantic/'=> 'Romantic','http://m.txxx.com/categories/russian/'=> 'Russian','http://m.txxx.com/categories/shaved/'=> 'Shaved','http://m.txxx.com/categories/shemale-amateur/'=> 'Shemale Amateur','http://m.txxx.com/categories/shemale-asian/'=> 'Shemale Asian','http://m.txxx.com/categories/shemale-bareback/'=> 'Shemale Bareback','http://m.txxx.com/categories/shemale-big-dick/'=> 'Shemale Big Dick','http://m.txxx.com/categories/shemale-big-tits/'=> 'Shemale Big Tits','http://m.txxx.com/categories/shemale-blowjobs/'=> 'Shemale Blowjob','http://m.txxx.com/categories/shemale-dildos-toys/'=> 'Shemale Dildos/Toys','http://m.txxx.com/categories/shemale-fucks-girl/'=> 'Shemale Fucks Girl','http://m.txxx.com/categories/shemale-fucks-guy/'=> 'Shemale Fucks Guy','http://m.txxx.com/categories/guy-fucks-shemale/'=> 'Guy Fucks Shemale','http://m.txxx.com/categories/ladyboys/'=> 'Ladyboys','http://m.txxx.com/categories/latin-shemale/'=> 'Shemale Latin','http://m.txxx.com/categories/shemale-masturbation/'=> 'Shemale Masturbation','http://m.txxx.com/categories/shemale-solo/'=> 'Shemale Solo','http://m.txxx.com/categories/shemale-webcams/'=> 'Shemale Webcam','http://m.txxx.com/categories/small-tits-shemales/'=> 'Small Tits Shemales','http://m.txxx.com/categories/showers/'=> 'Shower','http://m.txxx.com/categories/softcore/'=> 'Softcore','http://m.txxx.com/categories/solo-girl/'=> 'Solo Girl','http://m.txxx.com/categories/spanking/'=> 'Spanking','http://m.txxx.com/categories/squirting/'=> 'Squirting','http://m.txxx.com/categories/pantyhose/'=> 'Stockings','http://m.txxx.com/categories/strapon/'=> 'Strapon','http://m.txxx.com/categories/swallow/'=> 'Swallow','http://m.txxx.com/categories/swingers/'=> 'Swingers','http://m.txxx.com/categories/threesomes/'=> 'Threesomes','http://m.txxx.com/categories/vintage/'=> 'Vintage','http://m.txxx.com/categories/voyeur/'=> 'Voyeur','http://m.txxx.com/categories/webcam/'=> 'Webcam');

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
	$getvideo = getVideos("txxx", $category, $page);
	$listvids = json_decode($getvideo);
	$i = 0;
	foreach($listvids as $videos){
		$title 		= $videos->title;
		$image 		= $videos->image;
		$duration 	= $videos->duration;
		$videoid  	= $videos->videoid;
		$videourl	= base64urlencode("txxx|$videoid|$urli");
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