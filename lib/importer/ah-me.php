<?php
error_reporting(0);
apiControl("lastlogin");
global $wpdb;
$jwDownload 		    = get_option("jwDownload");
$home  = explode('/', home_url());
$urli  = $home[2];
$table = $wpdb->prefix . "avgvideolinks";

$categories = array('http://m.ah-me.com/channels/14/amateur/most-recent/page1.html'=> 'Amateur','http://m.ah-me.com/channels/43/anal/most-recent/page1.html'=> 'Anal','http://m.ah-me.com/channels/202/anime/most-recent/page1.html'=> 'Anime','http://m.ah-me.com/channels/37/asian/most-recent/page1.html'=> 'Asian','http://m.ah-me.com/channels/46/babes/most-recent/page1.html'=> 'Babes','http://m.ah-me.com/channels/29/bathroom/most-recent/page1.html'=> 'Bathroom','http://m.ah-me.com/channels/94/bbw/most-recent/page1.html'=> 'BBW','http://m.ah-me.com/channels/89/bdsm/most-recent/page1.html'=> 'BDSM','http://m.ah-me.com/channels/103/bedroom/most-recent/page1.html'=> 'Bedroom','http://m.ah-me.com/channels/58/big-ass/most-recent/page1.html'=> 'Big Ass','http://m.ah-me.com/channels/10/big-cock/most-recent/page1.html'=> 'Big Cock','http://m.ah-me.com/channels/33/big-tits/most-recent/page1.html'=> 'Big Tits','http://m.ah-me.com/channels/126/bikini/most-recent/page1.html'=> 'Bikini','http://m.ah-me.com/channels/79/bizarre/most-recent/page1.html'=> 'Bizarre','http://m.ah-me.com/channels/35/blondes/most-recent/page1.html'=> 'Blondes','http://m.ah-me.com/channels/16/blowjobs/most-recent/page1.html'=> 'Blowjobs','http://m.ah-me.com/channels/120/bondage/most-recent/page1.html'=> 'Bondage','http://m.ah-me.com/channels/11/brunettes/most-recent/page1.html'=> 'Brunettes','http://m.ah-me.com/channels/155/bukkake/most-recent/page1.html'=> 'Bukkake','http://m.ah-me.com/channels/25/butts/most-recent/page1.html'=> 'Butts','http://m.ah-me.com/channels/44/car/most-recent/page1.html'=> 'Car','http://m.ah-me.com/channels/200/cartoons/most-recent/page1.html'=> 'Cartoons','http://m.ah-me.com/channels/187/casting/most-recent/page1.html'=> 'Casting','http://m.ah-me.com/channels/199/cfnm/most-recent/page1.html'=> 'CFNM','http://m.ah-me.com/channels/212/classroom/most-recent/page1.html'=> 'Classroom','http://m.ah-me.com/channels/209/club/most-recent/page1.html'=> 'Club','http://m.ah-me.com/channels/223/college/most-recent/page1.html'=> 'College','http://m.ah-me.com/channels/211/college-girls/most-recent/page1.html'=> 'College Girls','http://m.ah-me.com/channels/136/creampie/most-recent/page1.html'=> 'Creampie','http://m.ah-me.com/channels/160/cuckold/most-recent/page1.html'=> 'Cuckold','http://m.ah-me.com/channels/66/cumshots/most-recent/page1.html'=> 'Cumshots','http://m.ah-me.com/channels/56/deep-throat/most-recent/page1.html'=> 'Deep Throat','http://m.ah-me.com/channels/31/dildos/most-recent/page1.html'=> 'Dildos','http://m.ah-me.com/channels/50/doggy-style/most-recent/page1.html'=> 'Doggy Style','http://m.ah-me.com/channels/131/double-penetration/most-recent/page1.html'=> 'Double Penetration','http://m.ah-me.com/channels/74/ebony/most-recent/page1.html'=> 'Ebony','http://m.ah-me.com/channels/45/facials/most-recent/page1.html'=> 'Facials','http://m.ah-me.com/channels/12/fetish/most-recent/page1.html'=> 'Fetish','http://m.ah-me.com/channels/192/ffm/most-recent/page1.html'=> 'FFM','http://m.ah-me.com/channels/67/fingering/most-recent/page1.html'=> 'Fingering','http://m.ah-me.com/channels/42/fishnet/most-recent/page1.html'=> 'Fishnet','http://m.ah-me.com/channels/106/fisting/most-recent/page1.html'=> 'Fisting','http://m.ah-me.com/channels/6/foot-fetish/most-recent/page1.html'=> 'Foot Fetish','http://m.ah-me.com/channels/185/foursome/most-recent/page1.html'=> 'Foursome','http://m.ah-me.com/channels/99/gang-bang/most-recent/page1.html'=> 'Gang Bang','http://m.ah-me.com/channels/349/german/most-recent/page1.html'=> 'German','http://m.ah-me.com/channels/72/girlfriends/most-recent/page1.html'=> 'Girlfriends','http://m.ah-me.com/channels/84/glasses/most-recent/page1.html'=> 'Glasses','http://m.ah-me.com/channels/82/glory-hole/most-recent/page1.html'=> 'Glory Hole','http://m.ah-me.com/channels/95/granny/most-recent/page1.html'=> 'Granny','http://m.ah-me.com/channels/81/group-sex/most-recent/page1.html'=> 'Group Sex','http://m.ah-me.com/channels/93/hairy/most-recent/page1.html'=> 'Hairy','http://m.ah-me.com/channels/59/handjobs/most-recent/page1.html'=> 'Handjobs','http://m.ah-me.com/channels/9/hardcore/most-recent/page1.html'=> 'Hardcore','http://m.ah-me.com/channels/201/hentai/most-recent/page1.html'=> 'Hentai','http://m.ah-me.com/channels/73/homemade/most-recent/page1.html'=> 'Homemade','http://m.ah-me.com/channels/90/humiliation/most-recent/page1.html'=> 'Humiliation','http://m.ah-me.com/channels/17/interracial/most-recent/page1.html'=> 'Interracial','http://m.ah-me.com/channels/241/japanese/most-recent/page1.html'=> 'Japanese','http://m.ah-me.com/channels/108/jeans/most-recent/page1.html'=> 'Jeans','http://m.ah-me.com/channels/63/kitchen/most-recent/page1.html'=> 'Kitchen','http://m.ah-me.com/channels/18/latinas/most-recent/page1.html'=> 'Latinas','http://m.ah-me.com/channels/38/lesbian/most-recent/page1.html'=> 'Lesbian','http://m.ah-me.com/channels/23/lingerie/most-recent/page1.html'=> 'Lingerie','http://m.ah-me.com/channels/111/massage/most-recent/page1.html'=> 'Massage','http://m.ah-me.com/channels/28/masturbation/most-recent/page1.html'=> 'Masturbation','http://m.ah-me.com/channels/1/mature/most-recent/page1.html'=> 'Mature','http://m.ah-me.com/channels/5/milf/most-recent/page1.html'=> 'Milf','http://m.ah-me.com/channels/193/mmf/most-recent/page1.html'=> 'MMF','http://m.ah-me.com/channels/4/moms-and-boys/most-recent/page1.html'=> 'Moms and Boys','http://m.ah-me.com/channels/189/moms-and-teens/most-recent/page1.html'=> 'Moms and Teens','http://m.ah-me.com/channels/119/office/most-recent/page1.html'=> 'Office','http://m.ah-me.com/channels/55/oiled/most-recent/page1.html'=> 'Oiled','http://m.ah-me.com/channels/88/old-farts/most-recent/page1.html'=> 'Old Farts','http://m.ah-me.com/channels/32/outdoor/most-recent/page1.html'=> 'Outdoor','http://m.ah-me.com/channels/60/panties/most-recent/page1.html'=> 'Panties','http://m.ah-me.com/channels/71/pantyhose/most-recent/page1.html'=> 'Pantyhose','http://m.ah-me.com/channels/110/party/most-recent/page1.html'=> 'Party','http://m.ah-me.com/channels/172/pick-up/most-recent/page1.html'=> 'Pick up','http://m.ah-me.com/channels/96/pissing/most-recent/page1.html'=> 'Pissing','http://m.ah-me.com/channels/174/pornstars/most-recent/page1.html'=> 'Pornstars','http://m.ah-me.com/channels/15/pov/most-recent/page1.html'=> 'POV','http://m.ah-me.com/channels/122/public/most-recent/page1.html'=> 'Public','http://m.ah-me.com/channels/356/public-place-sex/most-recent/page1.html'=> 'Public Place Sex','http://m.ah-me.com/channels/98/pussy/most-recent/page1.html'=> 'Pussy','http://m.ah-me.com/channels/52/pussy-licking/most-recent/page1.html'=> 'Pussy Licking','http://m.ah-me.com/channels/36/reality/most-recent/page1.html'=> 'Reality','http://m.ah-me.com/channels/57/redheads/most-recent/page1.html'=> 'Redheads','http://m.ah-me.com/channels/54/riding/most-recent/page1.html'=> 'Riding','http://m.ah-me.com/channels/116/schoolgirls/most-recent/page1.html'=> 'Schoolgirls','http://m.ah-me.com/channels/372/sex-orgy/most-recent/page1.html'=> 'Sex Orgy','http://m.ah-me.com/channels/22/shaved-pussy/most-recent/page1.html'=> 'Shaved Pussy','http://m.ah-me.com/channels/30/small-tits/most-recent/page1.html'=> 'Small Tits','http://m.ah-me.com/channels/26/softcore/most-recent/page1.html'=> 'Softcore','http://m.ah-me.com/channels/169/solo-girls/most-recent/page1.html'=> 'Solo Girls','http://m.ah-me.com/channels/3/stockings/most-recent/page1.html'=> 'Stockings','http://m.ah-me.com/channels/39/strapon/most-recent/page1.html'=> 'Strapon','http://m.ah-me.com/channels/278/striptease/most-recent/page1.html'=> 'Striptease','http://m.ah-me.com/channels/150/tattoo/most-recent/page1.html'=> 'Tattoo','http://m.ah-me.com/channels/8/teen/most-recent/page1.html'=> 'Teen','http://m.ah-me.com/channels/140/threesome/most-recent/page1.html'=> 'Threesome','http://m.ah-me.com/channels/34/tits/most-recent/page1.html'=> 'Tits','http://m.ah-me.com/channels/2/toys/most-recent/page1.html'=> 'Toys','http://m.ah-me.com/channels/127/uniform/most-recent/page1.html'=> 'Uniform','http://m.ah-me.com/channels/178/vintage/most-recent/page1.html'=> 'Vintage','http://m.ah-me.com/channels/322/virgins/most-recent/page1.html'=> 'Virgins','http://m.ah-me.com/channels/87/voyeur/most-recent/page1.html'=> 'Voyeur','http://m.ah-me.com/channels/357/webcams/most-recent/page1.html'=> 'Webcams');

?>
<?php if($jwDownload==0)
 
{
	echo '<div id="message" class="updated fade" style="color:orange; font-weight: bold;"><p>Ah-Me Video importer needs SSL to play videos. If you have SSL (https:// connections) go Settings >> General Settings >> I have SSL >> Yes</p></div>';
		exit;
	}

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
	$getvideo = getVideos("ah-me", $category, $page);
	$listvids = json_decode($getvideo);
	$i = 0;
	foreach($listvids as $videos){
		$title 		= $videos->title;
		$image 		= $videos->image;
		$duration 	= $videos->duration;
		$videoid  	= $videos->videoid;
		$videourl	= base64urlencode("ah-me|$videoid|$urli");
		$basedomain = str_replace("http://","https://",$zlmxsdir);
		$playerurl  = "$basedomain/play.php?video=$videourl";
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