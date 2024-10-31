<h1>JW Player Options</h1>
<?php
apiControl("lastlogin");
if($_POST['submit']){

	update_option('jwLicenseCode', 			$_POST['jwLicenseCode']);
	update_option('jwRightClickURL', 		$_POST['jwRightClickURL']);
	update_option('jwRightClickTitle', 		$_POST['jwRightClickTitle']);
	update_option('jwSkin', 				$_POST['jwSkin']);
	update_option('jwSkinActiveColor', 		$_POST['jwSkinActiveColor']);
	update_option('jwSkinInactiveColor',	$_POST['jwSkinInactiveColor']);
	update_option('jwLogoURL', 				$_POST['jwLogoURL']);
	update_option('jwLogoTargetURL', 		$_POST['jwLogoTargetURL']);
	update_option('jwAutoPlay', 			$_POST['jwAutoPlay']);
	update_option('jwBackgroundURL', 		$_POST['jwBackgroundURL']);
	update_option('jwDownload', 			$_POST['jwDownload']);
	update_option('jwHotlink', 				$_POST['jwHotlink']);


	echo '<div id="message" class="updated fade" style="color:green;"><p>Options saved!</p></div>';

}

$jwLicenseCode  		= get_option("jwLicenseCode");
$jwRightClickURL 		= get_option("jwRightClickURL");
$jwRightClickTitle 		= get_option("jwRightClickTitle");
$jwSkin					= get_option("jwSkin");
$jwSkinActiveColor		= get_option("jwSkinActiveColor");
$jwSkinInactiveColor 	= get_option("jwSkinInactiveColor");
$jwLogoURL  			= get_option("jwLogoURL");
$jwLogoTargetURL 		= get_option("jwLogoTargetURL");
$jwAutoPlay 			= get_option("jwAutoPlay");
$jwBackgroundURL		= get_option("jwBackgroundURL");
$jwDownload				= get_option("jwDownload");
$jwHotlink 				= get_option("jwHotlink");

?>
    <form method="post" action="" novalidate="novalidate">
        <table class="form-table">
		
			
			<tr>
				<th scope="row">
					<label>Player License Code</label>
				
				</th>
				<td>
                    <input name="jwLicenseCode" value="<?php echo $jwLicenseCode; ?>" class="large" />
						<p class="smalldesc">You already have free JW Player 7 License. If you have, You can change this with yours.</p>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label>Right Click Title</label>
				</th>
				<td>
                    <input name="jwRightClickTitle" value="<?php echo $jwRightClickTitle; ?>" class="large" />
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label>Right Click Site URL</label>
				</th>
				<td>
                    <input name="jwRightClickURL" value="<?php echo $jwRightClickURL; ?>" class="large" />
					
				</td>
			</tr>
			
			<tr>
				<th scope="row">
					<label>JW Player Skin</label>
				</th>
				<td>
                    <select name="jwSkin" class="small">
						<option value="beelden" <?php if($jwSkin == "beelden") { echo "selected"; } ?>>Beelden</option>
						<option value="seven" <?php if($jwSkin == "seven") { echo "selected"; } ?>>Seven</option>
						<option value="six" <?php if($jwSkin == "six") { echo "selected"; } ?>>Six</option>
						<option value="five" <?php if($jwSkin == "five") { echo "selected"; } ?>>Five</option>
						<option value="glow" <?php if($jwSkin == "glow") { echo "selected"; } ?>>Glow</option>
						<option value="vapor" <?php if($jwSkin == "vapor") { echo "selected"; } ?>>Vapor</option>
						<option value="bekle" <?php if($jwSkin == "bekle") { echo "selected"; } ?>>Bekle</option>
						<option value="roundster" <?php if($jwSkin == "roundster") { echo "selected"; } ?>>Roundster</option>
						<option value="stormtrooper" <?php if($jwSkin == "stormtrooper") { echo "selected"; } ?>>Stormtrooper</option>
						
					</select>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label>Skin Active & Inactive Colors</label>
				</th>
				<td>
				
                    <input type="color" name="jwSkinActiveColor" value="<?php echo $jwSkinActiveColor; ?>" class="medium" placeholder="Active Color #hexcode" />
					<input type="color" name="jwSkinInactiveColor" value="<?php echo $jwSkinInactiveColor; ?>" class="medium" placeholder="Inactive Color #hexcode" />
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label>Logo Image URL</label>
				</th>
				<td>
                    <input name="jwLogoURL" value="<?php echo $jwLogoURL; ?>" class="large" />
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label>Logo Target URL</label>
				</th>
				<td>
                    <input name="jwLogoTargetURL" value="<?php echo $jwLogoTargetURL; ?>" class="large" />
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label>Player Background Image URL</label>
				</th>
				<td>
                    <input name="jwBackgroundURL" value="<?php echo $jwBackgroundURL; ?>" class="large" />
					<p class="smalldesc">You can make default image for all videos preview image.</p>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label>Autoplay?</label>
				</th>
				<td>
                    <select name="jwAutoPlay" class="small">
						<option value="false" <?php if($jwAutoPlay == "false") { echo "selected"; } ?>>Off</option>
						<option value="true" <?php if($jwAutoPlay == "true") { echo "selected"; } ?>>On</option>
					</select>
				</td>
			</tr>
			
			<tr>
				<th scope="row">
					<label>Hotlink Protection</label>
				</th>
				<td>
                    <select name="jwHotlink" class="small">
						<option value="0" <?php if($jwHotlink == 0) { echo "selected"; } ?>>Off</option>
						<option value="1" <?php if($jwHotlink == 1) { echo "selected"; } ?>>On</option>
					</select>
					<p class="smalldesc">If you make this function "On". All videos works only in iframe with domain lock.</p>
				</td>
			</tr>
			
        </table>
        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes" />
        </p>
    </form>
