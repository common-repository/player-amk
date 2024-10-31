<?php
error_reporting(0);
apiControl("lastlogin");
global $wpdb;
$jwDownload 		    = get_option("jwDownload");
$home  = explode('/', home_url());
$urli  = $home[2];
$table = $wpdb->prefix . "avgvideolinks";

$categories = array('https://m.xhamster.com/18_years_old.html'=> '18 Years Old','https://m.xhamster.com/69.html'=> '69','https://m.xhamster.com/african.html'=> 'African','https://m.xhamster.com/agent.html'=> 'Agent','https://m.xhamster.com/albanian.html'=> 'Albanian','https://m.xhamster.com/algerian.html'=> 'Algerian','https://m.xhamster.com/alien.html'=> 'Alien','https://m.xhamster.com/amateur.html'=> 'Amateur','https://m.xhamster.com/american.html'=> 'American','https://m.xhamster.com/anal.html'=> 'Anal','https://m.xhamster.com/arab.html'=> 'Arab','https://m.xhamster.com/argentinian.html'=> 'Argentinian','https://m.xhamster.com/armenian.html'=> 'Armenian','https://m.xhamster.com/asian.html'=> 'Asian','https://m.xhamster.com/categories/ass-licking'=> 'Ass Licking','https://m.xhamster.com/audition.html'=> 'Audition','https://m.xhamster.com/categories/australian'=> 'Australian','https://m.xhamster.com/austrian.html'=> 'Austrian','https://m.xhamster.com/azeri.html'=> 'Azeri','https://m.xhamster.com/bbc.html'=> 'BBC','https://m.xhamster.com/bbw.html'=> 'BBW','https://m.xhamster.com/bdsm.html'=> 'BDSM','https://m.xhamster.com/babes.html'=> 'Babes','https://m.xhamster.com/babysitters.html'=> 'Babysitters','https://m.xhamster.com/ballbusting.html'=> 'Ballbusting','https://m.xhamster.com/bangladeshi.html'=> 'Bangladeshi','https://m.xhamster.com/beach.html'=> 'Beach','https://m.xhamster.com/belgian.html'=> 'Belgian','https://m.xhamster.com/big_boobs.html'=> 'Big Boobs','https://m.xhamster.com/big_butts.html'=> 'Big Butts','https://m.xhamster.com/big_clits.html'=> 'Big Clits','https://m.xhamster.com/big_cock.html'=> 'Big Cock','https://m.xhamster.com/big_natural_tits.html'=> 'Big Natural Tits','https://m.xhamster.com/categories/big-nipples'=> 'Big Nipples','https://m.xhamster.com/bikini.html'=> 'Bikini','https://m.xhamster.com/bisexuals.html'=> 'Bisexuals','https://m.xhamster.com/ebony.html'=> 'Black and Ebony','https://m.xhamster.com/blondes.html'=> 'Blondes','https://m.xhamster.com/blowjobs.html'=> 'Blowjobs','https://m.xhamster.com/bolivian.html'=> 'Bolivian','https://m.xhamster.com/bondage.html'=> 'Bondage','https://m.xhamster.com/bosnian.html'=> 'Bosnian','https://m.xhamster.com/brazilian.html'=> 'Brazilian','https://m.xhamster.com/british.html'=> 'British','https://m.xhamster.com/brunettes.html'=> 'Brunettes','https://m.xhamster.com/bukkake.html'=> 'Bukkake','https://m.xhamster.com/bulgarian.html'=> 'Bulgarian','https://m.xhamster.com/cfnm.html'=> 'CFNM','https://m.xhamster.com/cambodian.html'=> 'Cambodian','https://m.xhamster.com/canadian.html'=> 'Canadian','https://m.xhamster.com/cartoons.html'=> 'Cartoons','https://m.xhamster.com/castings.html'=> 'Castings','https://m.xhamster.com/cat_fight.html'=> 'Cat Fights','https://m.xhamster.com/celebs.html'=> 'Celebrities','https://m.xhamster.com/cheating.html'=> 'Cheating','https://m.xhamster.com/cheerleaders.html'=> 'Cheerleaders','https://m.xhamster.com/chilean.html'=> 'Chilean','https://m.xhamster.com/chinese.html'=> 'Chinese','https://m.xhamster.com/close_ups.html'=> 'Close-ups','https://m.xhamster.com/coed.html'=> 'Coed','https://m.xhamster.com/college.html'=> 'College','https://m.xhamster.com/colombian.html'=> 'Colombian','https://m.xhamster.com/compilation.html'=> 'Compilation','https://m.xhamster.com/cosplay.html'=> 'Cosplay','https://m.xhamster.com/costa_rica.html'=> 'Costa Rica','https://m.xhamster.com/cougars.html'=> 'Cougars','https://m.xhamster.com/creampie.html'=> 'Creampie','https://m.xhamster.com/croatian.html'=> 'Croatian','https://m.xhamster.com/cuckold.html'=> 'Cuckold','https://m.xhamster.com/cum_swallowing.html'=> 'Cum Swallowing','https://m.xhamster.com/categories/cum-in-mouth'=> 'Cum in Mouth','https://m.xhamster.com/cumshots.html'=> 'Cumshots','https://m.xhamster.com/cunnilingus.html'=> 'Cunnilingus','https://m.xhamster.com/czech.html'=> 'Czech','https://m.xhamster.com/dad.html'=> 'Dad','https://m.xhamster.com/danish.html'=> 'Danish','https://m.xhamster.com/categories/deep-throat'=> 'Deep Throats','https://m.xhamster.com/dildo.html'=> 'Dildo','https://m.xhamster.com/categories/dirty-talk'=> 'Dirty Talk','https://m.xhamster.com/doctor.html'=> 'Doctor','https://m.xhamster.com/dogging.html'=> 'Dogging','https://m.xhamster.com/doggy_style.html'=> 'Doggy Style','https://m.xhamster.com/double_penetration.html'=> 'Double Penetration','https://m.xhamster.com/dutch.html'=> 'Dutch','https://m.xhamster.com/ecuador.html'=> 'Ecuador','https://m.xhamster.com/egyptian.html'=> 'Egyptian','https://m.xhamster.com/emo.html'=> 'Emo','https://m.xhamster.com/escort.html'=> 'Escort','https://m.xhamster.com/estonia.html'=> 'Estonia','https://m.xhamster.com/european.html'=> 'European','https://m.xhamster.com/face_sitting.html'=> 'Face Sitting','https://m.xhamster.com/facials.html'=> 'Facials','https://m.xhamster.com/female_choice.html'=> 'Female Choice','https://m.xhamster.com/femdom.html'=> 'Femdom','https://m.xhamster.com/fingering.html'=> 'Fingering','https://m.xhamster.com/finnish.html'=> 'Finnish','https://m.xhamster.com/fisting.html'=> 'Fisting','https://m.xhamster.com/categories/flashing'=> 'Flashing','https://m.xhamster.com/foot_fetish.html'=> 'Foot Fetish','https://m.xhamster.com/footjob.html'=> 'Footjob','https://m.xhamster.com/french.html'=> 'French','https://m.xhamster.com/fucking_machines.html'=> 'Fucking Machines','https://m.xhamster.com/funny.html'=> 'Funny','https://m.xhamster.com/gangbang.html'=> 'Gangbang','https://m.xhamster.com/gaping.html'=> 'Gaping','https://m.xhamster.com/german.html'=> 'German','https://m.xhamster.com/ghetto.html'=> 'Ghetto','https://m.xhamster.com/glory_holes.html'=> 'Glory Holes','https://m.xhamster.com/gothic.html'=> 'Gothic','https://m.xhamster.com/grannies.html'=> 'Grannies','https://m.xhamster.com/greek.html'=> 'Greek','https://m.xhamster.com/group.html'=> 'Group Sex','https://m.xhamster.com/guadeloupe.html'=> 'Guadeloupe','https://m.xhamster.com/guatemala.html'=> 'Guatemala','https://m.xhamster.com/hd_videos.html'=> 'HD Videos','https://m.xhamster.com/hairy.html'=> 'Hairy','https://m.xhamster.com/halloween.html'=> 'Halloween','https://m.xhamster.com/handjobs.html'=> 'Handjobs','https://m.xhamster.com/hardcore.html'=> 'Hardcore','https://m.xhamster.com/hentai.html'=> 'Hentai','https://m.xhamster.com/categories/hidden'=> 'Hidden Cams','https://m.xhamster.com/high_heels.html'=> 'High Heels','https://m.xhamster.com/hogtied.html'=> 'Hogtied','https://m.xhamster.com/homemade.html'=> 'Homemade','https://m.xhamster.com/hungarian.html'=> 'Hungarian','https://m.xhamster.com/indian.html'=> 'Indian','https://m.xhamster.com/indonesian.html'=> 'Indonesian','https://m.xhamster.com/interracial.html'=> 'Interracial','https://m.xhamster.com/interview.html'=> 'Interview','https://m.xhamster.com/iranian.html'=> 'Iranian','https://m.xhamster.com/irish.html'=> 'Irish','https://m.xhamster.com/israeli.html'=> 'Israeli','https://m.xhamster.com/italian.html'=> 'Italian','https://m.xhamster.com/joi.html'=> 'JOI','https://m.xhamster.com/jamaican.html'=> 'Jamaican','https://m.xhamster.com/japanese.html'=> 'Japanese','https://m.xhamster.com/jewish.html'=> 'Jewish','https://m.xhamster.com/kissing.html'=> 'Kissing','https://m.xhamster.com/korean.html'=> 'Korean','https://m.xhamster.com/lactating.html'=> 'Lactating','https://m.xhamster.com/latex.html'=> 'Latex','https://m.xhamster.com/latin.html'=> 'Latin','https://m.xhamster.com/latvian.html'=> 'Latvian','https://m.xhamster.com/lebanese.html'=> 'Lebanese','https://m.xhamster.com/lesbians.html'=> 'Lesbians','https://m.xhamster.com/lingerie.html'=> 'Lingerie','https://m.xhamster.com/lithuanian.html'=> 'Lithuanian','https://m.xhamster.com/milfs.html'=> 'MILFs','https://m.xhamster.com/macedonian.html'=> 'Macedonian','https://m.xhamster.com/maid.html'=> 'Maid','https://m.xhamster.com/malaysian.html'=> 'Malaysian','https://m.xhamster.com/massage.html'=> 'Massage','https://m.xhamster.com/masturbation.html'=> 'Masturbation','https://m.xhamster.com/matures.html'=> 'Matures','https://m.xhamster.com/medical.html'=> 'Medical','https://m.xhamster.com/mexican.html'=> 'Mexican','https://m.xhamster.com/midgets.html'=> 'Midgets','https://m.xhamster.com/military.html'=> 'Military','https://m.xhamster.com/mistress.html'=> 'Mistress','https://m.xhamster.com/moldavian.html'=> 'Moldavian','https://m.xhamster.com/mom.html'=> 'Mom','https://m.xhamster.com/moroccan.html'=> 'Moroccan','https://m.xhamster.com/muscular_women.html'=> 'Muscular Women','https://m.xhamster.com/nigerian.html'=> 'Nigerian','https://m.xhamster.com/nipples.html'=> 'Nipples','https://m.xhamster.com/norwegian.html'=> 'Norwegian','https://m.xhamster.com/nudist.html'=> 'Nudist','https://m.xhamster.com/nylon.html'=> 'Nylon','https://m.xhamster.com/old_young.html'=> 'Old+Young','https://m.xhamster.com/orgasms.html'=> 'Orgasms','https://m.xhamster.com/orgy.html'=> 'Orgy','https://m.xhamster.com/outdoor.html'=> 'Outdoor','https://m.xhamster.com/pov.html'=> 'POV','https://m.xhamster.com/pakistani.html'=> 'Pakistani','https://m.xhamster.com/panama.html'=> 'Panama','https://m.xhamster.com/pantyhose.html'=> 'Pantyhose','https://m.xhamster.com/party.html'=> 'Party','https://m.xhamster.com/peruvian.html'=> 'Peruvian','https://m.xhamster.com/philippines.html'=> 'Philippines','https://m.xhamster.com/piercing.html'=> 'Piercing','https://m.xhamster.com/polska.html'=> 'Polish','https://m.xhamster.com/pornstars.html'=> 'Pornstars','https://m.xhamster.com/portuguese.html'=> 'Portuguese','https://m.xhamster.com/pregnant.html'=> 'Pregnant','https://m.xhamster.com/public.html'=> 'Public Nudity','https://m.xhamster.com/puerto_rican.html'=> 'Puerto Rican','https://m.xhamster.com/puffy_nipples.html'=> 'Puffy Nipples','https://m.xhamster.com/pussy.html'=> 'Pussy','https://m.xhamster.com/redheads.html'=> 'Redheads','https://m.xhamster.com/retro.html'=> 'Retro','https://m.xhamster.com/rimjob.html'=> 'Rimjob','https://m.xhamster.com/romanian.html'=> 'Romanian','https://m.xhamster.com/russian.html'=> 'Russian','https://m.xhamster.com/saggy_tits.html'=> 'Saggy Tits','https://m.xhamster.com/secretary.html'=> 'Secretaries','https://m.xhamster.com/serbian.html'=> 'Serbian','https://m.xhamster.com/toys.html'=> 'Sex Toys','https://m.xhamster.com/showers.html'=> 'Showers','https://m.xhamster.com/singaporean.html'=> 'Singaporean','https://m.xhamster.com/skinny.html'=> 'Skinny','https://m.xhamster.com/slave.html'=> 'Slave','https://m.xhamster.com/slovakian.html'=> 'Slovakian','https://m.xhamster.com/slovenian.html'=> 'Slovenian','https://m.xhamster.com/small_tits.html'=> 'Small Tits','https://m.xhamster.com/softcore.html'=> 'Softcore','https://m.xhamster.com/south_african.html'=> 'South African','https://m.xhamster.com/spandex.html'=> 'Spandex','https://m.xhamster.com/spanish.html'=> 'Spanish','https://m.xhamster.com/spanking.html'=> 'Spanking','https://m.xhamster.com/sport.html'=> 'Sports','https://m.xhamster.com/squirting.html'=> 'Squirting','https://m.xhamster.com/sri_lankan.html'=> 'Sri Lankan','https://m.xhamster.com/categories/stockings'=> 'Stockings','https://m.xhamster.com/strapon.html'=> 'Strapon','https://m.xhamster.com/categories/striptease'=> 'Striptease','https://m.xhamster.com/swedish.html'=> 'Swedish','https://m.xhamster.com/swingers.html'=> 'Swingers','https://m.xhamster.com/swiss.html'=> 'Swiss','https://m.xhamster.com/sybian.html'=> 'Sybian','https://m.xhamster.com/tattoo.html'=> 'Tattoos','https://m.xhamster.com/taxi.html'=> 'Taxi','https://m.xhamster.com/teacher.html'=> 'Teacher','https://m.xhamster.com/teens.html'=> 'Teens','https://m.xhamster.com/thai.html'=> 'Thai','https://m.xhamster.com/threesomes.html'=> 'Threesomes','https://m.xhamster.com/tits.html'=> 'Tits','https://m.xhamster.com/titty_fucking.html'=> 'Titty Fucking','https://m.xhamster.com/top.html'=> 'Top Rated','https://m.xhamster.com/tunisian.html'=> 'Tunisian','https://m.xhamster.com/turkish.html'=> 'Turkish','https://m.xhamster.com/ukrainian.html'=> 'Ukrainian','https://m.xhamster.com/upskirts.html'=> 'Upskirts','https://m.xhamster.com/valentines_day.html'=> 'Valentine\'\s Day','https://m.xhamster.com/venezuelan.html'=> 'Venezuelan','https://m.xhamster.com/vibrator.html'=> 'Vibrator','https://m.xhamster.com/vietnamese.html'=> 'Vietnamese','https://m.xhamster.com/vintage.html'=> 'Vintage','https://m.xhamster.com/vr.html'=> 'Virtual Reality','https://m.xhamster.com/voyeur.html'=> 'Voyeur','https://m.xhamster.com/webcams.html'=> 'Webcams','https://m.xhamster.com/whipping.html'=> 'Whipping','https://m.xhamster.com/wife.html'=> 'Wife','https://m.xhamster.com/wife_sharing.html'=> 'Wife Sharing','https://m.xhamster.com/xmas.html'=> 'Xmas','https://m.xhamster.com/yoga.html'=> 'Yoga','https://m.xhamster.com/amateur_shemales.html'=> 'Transsexuals Amateur','https://m.xhamster.com/bdsm_shemales.html'=> 'Transsexuals BDSM','https://m.xhamster.com/bareback_shemales.html'=> 'Transsexuals Bareback','https://m.xhamster.com/big_ass_shemales.html'=> 'Transsexuals Big Asses','https://m.xhamster.com/big_cocks_shemales.html'=> 'Transsexuals Big Cocks','https://m.xhamster.com/big_tits_shemales.html'=> 'Transsexuals Big Tits','https://m.xhamster.com/black_shemales.html'=> 'Transsexuals Black','https://m.xhamster.com/blowjobs_shemales.html'=> 'Transsexuals Blowjobs','https://m.xhamster.com/creampie_shemales.html'=> 'Transsexuals Creampie','https://m.xhamster.com/gangbang_shemales.html'=> 'Transsexuals Gangbang','https://m.xhamster.com/guy_fucks_shemale.html'=> 'Transsexuals Guy Fucks Shemale','https://m.xhamster.com/hd_shemales.html'=> 'Transsexuals HD Shemales','https://m.xhamster.com/interracial_shemales.html'=> 'Transsexuals Interracial','https://m.xhamster.com/ladyboys.html'=> 'Transsexuals Ladyboys','https://m.xhamster.com/latex_shemales.html'=> 'Transsexuals Latex','https://m.xhamster.com/latin_shemales.html'=> 'Transsexuals Latin','https://m.xhamster.com/lingerie_shemales.html'=> 'Transsexuals Lingerie','https://m.xhamster.com/shemales_masturbation.html'=> 'Transsexuals Masturbation','https://m.xhamster.com/outdoor_shemales.html'=> 'Transsexuals Outdoor','https://m.xhamster.com/pov_shemales.html'=> 'Transsexuals POV','https://m.xhamster.com/sex_toys_shemales.html'=> 'Transsexuals Sex Toys','https://m.xhamster.com/shemale_girl.html'=> 'Transsexuals Shemale Fucks Girl','https://m.xhamster.com/shemale_fucks_guy.html'=> 'Transsexuals Shemale Fucks Guy','https://m.xhamster.com/shemale_fucks_shemale.html'=> 'Transsexuals Shemale Fucks Shemale','https://m.xhamster.com/shemale.html'=> 'Transsexuals Shemales','https://m.xhamster.com/small_tits_shemales.html'=> 'Transsexuals Small Tits Shemales','https://m.xhamster.com/solo_shemales.html'=> 'Transsexuals Solo','https://m.xhamster.com/shemales_in_stockings.html'=> 'Transsexuals Stockings','https://m.xhamster.com/teen_shemales.html'=> 'Transsexuals Teens','https://m.xhamster.com/vintage_shemales.html'=> 'Transsexuals Vintage','https://m.xhamster.com/shemales_webcams.html'=> 'Transsexuals Webcams','https://m.xhamster.com/amateur_gays.html'=> 'Gay Amateur','https://m.xhamster.com/asian_gays.html'=> 'Gay Asian','https://m.xhamster.com/gay_bdsm.html'=> 'Gay BDSM','https://m.xhamster.com/bareback.html'=> 'Gay Bareback','https://m.xhamster.com/beach_gays.html'=> 'Gay Beach','https://m.xhamster.com/gay_bears.html'=> 'Gay Bears','https://m.xhamster.com/big_cocks.html'=> 'Gay Big Cocks','https://m.xhamster.com/black_gays.html'=> 'Gay Black Gays','https://m.xhamster.com/blowjobs_gays.html'=> 'Gay Blowjobs','https://m.xhamster.com/bukkake_gays.html'=> 'Gay Bukkake','https://m.xhamster.com/crossdressers.html'=> 'Gay Crossdressers','https://m.xhamster.com/cum_tributes.html'=> 'Gay Cum Tributes','https://m.xhamster.com/gay_daddies.html'=> 'Gay Daddies','https://m.xhamster.com/emo_gays.html'=> 'Gay Emo Boys','https://m.xhamster.com/fat_gays.html'=> 'Gay Fat Gays','https://m.xhamster.com/gay_fisting.html'=> 'Gay Fisting','https://m.xhamster.com/gay_gangbang.html'=> 'Gay Gangbang','https://m.xhamster.com/gay_gaping.html'=> 'Gay Gaping','https://m.xhamster.com/gays.html'=> 'Gay Gay Porn','https://m.xhamster.com/gay_glory_holes.html'=> 'Gay Glory Holes','https://m.xhamster.com/group_sex_gays.html'=> 'Gay Group Sex','https://m.xhamster.com/hd_gays.html'=> 'Gay HD Gays','https://m.xhamster.com/gay_handjobs.html'=> 'Gay Handjobs','https://m.xhamster.com/hunks.html'=> 'Gay Hunks','https://m.xhamster.com/interracial_gays.html'=> 'Gay Interracial','https://m.xhamster.com/latin_gays.html'=> 'Gay Latin','https://m.xhamster.com/locker_rooms.html'=> 'Gay Locker Rooms','https://m.xhamster.com/gay_massage.html'=> 'Gay Massage','https://m.xhamster.com/gay_masturbation.html'=> 'Gay Masturbation','https://m.xhamster.com/men.html'=> 'Gay Men','https://m.xhamster.com/military_gays.html'=> 'Gay Military','https://m.xhamster.com/muscle_gays.html'=> 'Gay Muscle','https://m.xhamster.com/old_young_gays.html'=> 'Gay Old+Young','https://m.xhamster.com/outdoor_gays.html'=> 'Gay Outdoor','https://m.xhamster.com/gay_sex_toys.html'=> 'Gay Sex Toys','https://m.xhamster.com/small_cocks.html'=> 'Gay Small Cocks','https://m.xhamster.com/gays_spanking.html'=> 'Gay Spanking','https://m.xhamster.com/gay_striptease.html'=> 'Gay Striptease','https://m.xhamster.com/twinks.html'=> 'Gay Twinks','https://m.xhamster.com/vintage_gays.html'=> 'Gay Vintage','https://m.xhamster.com/gay_voyeur.html'=> 'Gay Voyeur','https://m.xhamster.com/gay_webcams.html'=> 'Gay Webcams','https://m.xhamster.com/gay_wrestling.html'=> 'Gay Wrestling');

?>
<?php if($jwDownload==0)
 
{
	echo '<div id="message" class="updated fade" style="color:orange; font-weight: bold;"><p>xHamster Video importer needs SSL to play videos. If you have SSL (https:// connections) go Settings >> General Settings >> I have SSL >> Yes</p></div>';
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
	$getvideo = getVideos("xhamster", $category, $page);
	$listvids = json_decode($getvideo);
	$i = 0;
	foreach($listvids as $videos){
		$title 		= $videos->title;
		$image 		= $videos->image;
		$duration 	= $videos->duration;
		$videoid  	= $videos->videoid;
		$videourl	= base64urlencode("xhamster|$videoid|$urli");
		$basedomain = str_replace("http://","https://",$zlmxsdir);
		$playerurl  = "$basedomain/play.php?video=$videourl";
		$videolink  = $videos->video_link;
		$checkdb	= $wpdb->get_var("SELECT * FROM $table WHERE videolink = '$videolink'");
		//if(!$checkdb){
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
	//	}
	}
	if($i == 0){
		echo '<div id="message" class="updated fade" style="color:orange; font-weight: bold;"><p>No result for this page! Try another page.</p></div>';
	}
}
?>
</div>