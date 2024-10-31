<?php
error_reporting(0);
apiControl("lastlogin");
global $wpdb;

$home  = explode('/', home_url());
$urli  = $home[2];
$table = $wpdb->prefix . "avgvideolinks";

$categories = array('http://m.hclips.com/categories/amateur/'=> 'Amateur','http://m.hclips.com/categories/anal/'=> 'Anal','http://m.hclips.com/categories/arab/'=> 'Arab','http://m.hclips.com/categories/asian/'=> 'Asian','http://m.hclips.com/categories/ass/'=> 'Ass','http://m.hclips.com/categories/bbw/'=> 'BBW','http://m.hclips.com/categories/bdsm/'=> 'BDSM','http://m.hclips.com/categories/beach/'=> 'Beach','http://m.hclips.com/categories/big-dick/'=> 'Big Dick','http://m.hclips.com/categories/big-tits/'=> 'Big Tits','http://m.hclips.com/categories/bisexual/'=> 'Bisexual','http://m.hclips.com/categories/black/'=> 'Black','http://m.hclips.com/categories/blonde/'=> 'Blonde','http://m.hclips.com/categories/blowjob/'=> 'Blowjob','http://m.hclips.com/categories/bondage/'=> 'Bondage','http://m.hclips.com/categories/bongacams/'=> 'Bongacams','http://m.hclips.com/categories/brunette/'=> 'Brunette','http://m.hclips.com/categories/cam4/'=> 'Cam4','http://m.hclips.com/categories/cameltoe/'=> 'Cameltoe','http://m.hclips.com/categories/casting/'=> 'Casting','http://m.hclips.com/categories/Celebrities/'=> 'Celebrities','http://m.hclips.com/categories/changing-room/'=> 'Changing Room','http://m.hclips.com/categories/chaturbate/'=> 'Chaturbate','http://m.hclips.com/categories/chinese/'=> 'Chinese','http://m.hclips.com/categories/close-up/'=> 'Close-up','http://m.hclips.com/categories/college/'=> 'College','http://m.hclips.com/categories/compilation/'=> 'Compilation','http://m.hclips.com/categories/couple/'=> 'Couple','http://m.hclips.com/categories/creampie/'=> 'Creampie','http://m.hclips.com/categories/cuckold/'=> 'Cuckold','http://m.hclips.com/categories/cumshot/'=> 'Cumshot','http://m.hclips.com/categories/cunnilingus/'=> 'Cunnilingus','http://m.hclips.com/categories/czech/'=> 'Czech','http://m.hclips.com/categories/deep-throat/'=> 'Deep Throat','http://m.hclips.com/categories/doggy-style/'=> 'Doggy Style','http://m.hclips.com/categories/double-penetration/'=> 'Double Penetration','http://m.hclips.com/categories/downblouse/'=> 'Downblouse','http://m.hclips.com/categories/ebony/'=> 'Ebony','http://m.hclips.com/categories/emo/'=> 'Emo','http://m.hclips.com/categories/european/'=> 'European','http://m.hclips.com/categories/face-sitting/'=> 'Face Sitting','http://m.hclips.com/categories/facial/'=> 'Facial','http://m.hclips.com/categories/femdom/'=> 'Femdom','http://m.hclips.com/categories/fetish/'=> 'Fetish','http://m.hclips.com/categories/filipina/'=> 'Filipina','http://m.hclips.com/categories/fingering/'=> 'Fingering','http://m.hclips.com/categories/fisting/'=> 'Fisting','http://m.hclips.com/categories/flashing/'=> 'Flashing','http://m.hclips.com/categories/foot-fetish/'=> 'Foot Fetish','http://m.hclips.com/categories/funny/'=> 'Funny','http://m.hclips.com/categories/gangbang/'=> 'Gangbang','http://m.hclips.com/categories/gaping/'=> 'Gaping','http://m.hclips.com/categories/gay-aged/'=> 'Gay Aged','http://m.hclips.com/categories/gay-amateur/'=> 'Gay Amateur','http://m.hclips.com/categories/gay-asian/'=> 'Gay Asian','http://m.hclips.com/categories/gay-bareback/'=> 'Gay Bareback','http://m.hclips.com/categories/gay-bdsm/'=> 'Gay BDSM','http://m.hclips.com/categories/gay-bears/'=> 'Gay Bears','http://m.hclips.com/categories/gay-big-dick/'=> 'Gay Big Dick','http://m.hclips.com/categories/gay-bisexual/'=> 'Gay Bisexual','http://m.hclips.com/categories/gay-black/'=> 'Gay Black','http://m.hclips.com/categories/gay-blonde/'=> 'Gay Blonde','http://m.hclips.com/categories/gay-blowjob/'=> 'Gay Blowjob','http://m.hclips.com/categories/gay-boyfriends/'=> 'Gay Boyfriends','http://m.hclips.com/categories/gay-brunette/'=> 'Gay Brunette','http://m.hclips.com/categories/gay-cam4/'=> 'Gay Cam4','http://m.hclips.com/categories/gay-chaturbate/'=> 'Gay Chaturbate','http://m.hclips.com/categories/gay-crossdressers/'=> 'Gay Crossdressers','http://m.hclips.com/categories/gay-cum-tributes/'=> 'Gay Cum Tributes','http://m.hclips.com/categories/gay-daddies/'=> 'Gay Daddies','http://m.hclips.com/categories/gay-deep-throat/'=> 'Gay Deep Throat','http://m.hclips.com/categories/gay-dildos-toys/'=> 'Gay Dildos/Toys','http://m.hclips.com/categories/gay-dilettante/'=> 'Gay Dilettante','http://m.hclips.com/categories/gay-emo-boys/'=> 'Gay Emo Boys','http://m.hclips.com/categories/gay-fat/'=> 'Gay Fat','http://m.hclips.com/categories/gay-fetish/'=> 'Gay Fetish','http://m.hclips.com/categories/gay-fisting/'=> 'Gay Fisting','http://m.hclips.com/categories/gay-fursuits/'=> 'Gay Fursuits','http://m.hclips.com/categories/gay-gaping/'=> 'Gay Gaping','http://m.hclips.com/categories/gay-group-sex/'=> 'Gay Group Sex','http://m.hclips.com/categories/gay-handjob/'=> 'Gay Handjob','http://m.hclips.com/categories/gay-ass/'=> 'Gay Hot Ass','http://m.hclips.com/categories/gay-hunks/'=> 'Gay Hunks','http://m.hclips.com/categories/gay-interracial/'=> 'Gay Interracial','http://m.hclips.com/categories/gay-latins/'=> 'Gay Latins','http://m.hclips.com/categories/gay-massage/'=> 'Gay Massage','http://m.hclips.com/categories/gay-masturbation/'=> 'Gay Masturbation','http://m.hclips.com/categories/gay-oldy/'=> 'Gay Oldy','http://m.hclips.com/categories/gay-outdoor/'=> 'Gay Outdoor','http://m.hclips.com/categories/gay-pov/'=> 'Gay POV','http://m.hclips.com/categories/gay-redhead/'=> 'Gay Redhead','http://m.hclips.com/categories/gay-sex/'=> 'Gay Sex','http://m.hclips.com/categories/gay-skinny/'=> 'Gay Skinny','http://m.hclips.com/categories/gay-softcore/'=> 'Gay Softcore','http://m.hclips.com/categories/gay-solo-male/'=> 'Gay Solo Male','http://m.hclips.com/categories/gay-threesomes/'=> 'Gay Threesomes','http://m.hclips.com/categories/gay-twinks/'=> 'Gay Twinks','http://m.hclips.com/categories/gay-uniform/'=> 'Gay Uniform','http://m.hclips.com/categories/gay-voyeur/'=> 'Gay Voyeur','http://m.hclips.com/categories/gay-webcam/'=> 'Gay Webcam','http://m.hclips.com/categories/german/'=> 'German','http://m.hclips.com/categories/girlfriend/'=> 'Girlfriend','http://m.hclips.com/categories/grannies/'=> 'Grannies','http://m.hclips.com/categories/group-sex/'=> 'Group Sex','http://m.hclips.com/categories/hairy/'=> 'Hairy','http://m.hclips.com/categories/handjob/'=> 'Handjob','http://m.hclips.com/categories/hardcore/'=> 'Hardcore','http://m.hclips.com/categories/hidden-cam/'=> 'Hidden Cams','http://m.hclips.com/categories/indian/'=> 'Indian','http://m.hclips.com/categories/interracial/'=> 'Interracial','http://m.hclips.com/categories/japanese/'=> 'Japanese','http://m.hclips.com/categories/korean/'=> 'Korean','http://m.hclips.com/categories/latina/'=> 'Latina','http://m.hclips.com/categories/lesbian/'=> 'Lesbian','http://m.hclips.com/categories/lingerie/'=> 'Lingerie','http://m.hclips.com/categories/live-shows/'=> 'Live Shows','http://m.hclips.com/categories/livejasmin/'=> 'LiveJasmin','http://m.hclips.com/categories/massage/'=> 'Massage','http://m.hclips.com/categories/masturbation/'=> 'Masturbation','http://m.hclips.com/categories/mature/'=> 'Mature','http://m.hclips.com/categories/milf/'=> 'MILF','http://m.hclips.com/categories/myfreecams/'=> 'MyFreeCams','http://m.hclips.com/categories/nipples/'=> 'Nipples','http://m.hclips.com/categories/non-nude/'=> 'Non Nude','http://m.hclips.com/categories/nudism/'=> 'Nudism','http://m.hclips.com/categories/orgasm/'=> 'Orgasm','http://m.hclips.com/categories/outdoor/'=> 'Outdoor','http://m.hclips.com/categories/panties-and-bikini/'=> 'Panties and Bikini','http://m.hclips.com/categories/phone/'=> 'Phone','http://m.hclips.com/categories/piercing/'=> 'Piercing','http://m.hclips.com/categories/pov/'=> 'POV','http://m.hclips.com/categories/pregnant/'=> 'Pregnant','http://m.hclips.com/categories/premium/'=> 'Premium','http://m.hclips.com/categories/public/'=> 'Public','http://m.hclips.com/categories/reality/'=> 'Reality','http://m.hclips.com/categories/redhead/'=> 'Redhead','http://m.hclips.com/categories/rimming/'=> 'Rimming','http://m.hclips.com/categories/runetki/'=> 'Runetki','http://m.hclips.com/categories/ruscams/'=> 'Ruscams','http://m.hclips.com/categories/russian/'=> 'Russian','http://m.hclips.com/categories/selfshot/'=> 'Selfshot','http://m.hclips.com/categories/shaved/'=> 'Shaved','http://m.hclips.com/categories/shemale-amateur/'=> 'Shemale Amateur','http://m.hclips.com/categories/shemale-asian/'=> 'Shemale Asian','http://m.hclips.com/categories/shemale-ass-to-mouth/'=> 'Shemale Ass to Mouth','http://m.hclips.com/categories/shemale-bareback/'=> 'Shemale Bareback','http://m.hclips.com/categories/shemale-bdsm/'=> 'Shemale BDSM','http://m.hclips.com/categories/shemale-big-asses/'=> 'Shemale Big Asses','http://m.hclips.com/categories/shemale-big-dick/'=> 'Shemale Big Dick','http://m.hclips.com/categories/shemale-big-tits/'=> 'Shemale Big Tits','http://m.hclips.com/categories/shemale-black/'=> 'Shemale Black','http://m.hclips.com/categories/shemale-blonde/'=> 'Shemale Blonde','http://m.hclips.com/categories/shemale-blowjob/'=> 'Shemale Blowjob','http://m.hclips.com/categories/shemale-brunette/'=> 'Shemale Brunette','http://m.hclips.com/categories/shemale-cam4/'=> 'Shemale Cam4','http://m.hclips.com/categories/shemale-chaturbate/'=> 'Shemale Chaturbate','http://m.hclips.com/categories/shemale-cumshot/'=> 'Shemale Cumshot','http://m.hclips.com/categories/shemale-dildos-toys/'=> 'Shemale Dildos/Toys','http://m.hclips.com/categories/shemale-fetish/'=> 'Shemale Fetish','http://m.hclips.com/categories/shemale-fucks-girl/'=> 'Shemale Fucks Girl','http://m.hclips.com/categories/shemale-fucks-guy/'=> 'Shemale Fucks Guy','http://m.hclips.com/categories/shemale-fucks-shemale/'=> 'Shemale Fucks Shemale','http://m.hclips.com/categories/shemale-gangbang/'=> 'Shemale Gangbang','http://m.hclips.com/categories/shemale-group-sex/'=> 'Shemale Group Sex','http://m.hclips.com/categories/shemale-guy-fucks-shemale/'=> 'Shemale Guy Fucks Shemale','http://m.hclips.com/categories/shemale-interracial/'=> 'Shemale Interracial','http://m.hclips.com/categories/shemale-ladyboys/'=> 'Shemale Ladyboys','http://m.hclips.com/categories/shemale-latex/'=> 'Shemale Latex','http://m.hclips.com/categories/shemale-latin/'=> 'Shemale Latin','http://m.hclips.com/categories/shemale-lingerie/'=> 'Shemale Lingerie','http://m.hclips.com/categories/shemale-masturbation/'=> 'Shemale Masturbation','http://m.hclips.com/categories/shemale-mature/'=> 'Shemale Mature','http://m.hclips.com/categories/shemale-outdoor/'=> 'Shemale Outdoor','http://m.hclips.com/categories/shemale-pov/'=> 'Shemale POV','http://m.hclips.com/categories/shemale-redhead/'=> 'Shemale Redhead','http://m.hclips.com/categories/shemale-self-sucking/'=> 'Shemale Self Sucking','http://m.hclips.com/categories/shemale-small-tits/'=> 'Shemale Small Tits','http://m.hclips.com/categories/shemale-solo/'=> 'Shemale Solo','http://m.hclips.com/categories/shemale-stockings/'=> 'Shemale Stockings','http://m.hclips.com/categories/shemale-teens/'=> 'Shemale Teens','http://m.hclips.com/categories/shemale-threesome/'=> 'Shemale Threesome','http://m.hclips.com/categories/shemale-webcam/'=> 'Shemale Webcam','http://m.hclips.com/categories/shower/'=> 'Shower','http://m.hclips.com/categories/skinny/'=> 'Skinny','http://m.hclips.com/categories/small-tits/'=> 'Small Tits','http://m.hclips.com/categories/smoking/'=> 'Smoking','http://m.hclips.com/categories/softcore/'=> 'Softcore','http://m.hclips.com/categories/solo/'=> 'Solo','http://m.hclips.com/categories/spanking/'=> 'Spanking','http://m.hclips.com/categories/squirting/'=> 'Squirting','http://m.hclips.com/categories/stickam/'=> 'Stickam','http://m.hclips.com/categories/stockings/'=> 'Stockings','http://m.hclips.com/categories/strapon/'=> 'Strapon','http://m.hclips.com/categories/strip/'=> 'Strip','http://m.hclips.com/categories/swallow/'=> 'Swallow','http://m.hclips.com/categories/swingers/'=> 'Swingers','http://m.hclips.com/categories/tattoos/'=> 'Tattoos','http://m.hclips.com/categories/thai/'=> 'Thai','http://m.hclips.com/categories/threesome/'=> 'Threesome','http://m.hclips.com/categories/tight-clothes/'=> 'Tight Clothes','http://m.hclips.com/categories/toys/'=> 'Toys','http://m.hclips.com/categories/twerk/'=> 'Twerk','http://m.hclips.com/categories/upskirt/'=> 'Upskirt','http://m.hclips.com/categories/vintage/'=> 'Vintage','http://m.hclips.com/categories/voyeur/'=> 'Voyeur','http://m.hclips.com/categories/webcam/'=> 'Webcam','http://m.hclips.com/categories/wife/'=> 'Wife','http://m.hclips.com/categories/xlovecam/'=> 'Xlovecam','http://m.hclips.com/categories/young-old/'=> 'Young/Old');

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
	$getvideo = getVideos("hclips", $category, $page);
	$listvids = json_decode($getvideo);
	$i = 0;
	foreach($listvids as $videos){
		$title 		= $videos->title;
		$image 		= $videos->image;
		$duration 	= $videos->duration;
		$videoid  	= $videos->videoid;
		$videourl	= base64urlencode("hclips|$videoid|$urli");
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