<h1>JW Player Advertising Settings</h1>
<?php
apiControl("lastlogin");
if($_POST['submit']){

	update_option('jwPreVideo', 			$_POST['jwPreVideo']);
	update_option('jwPreVideoImageURL', 	$_POST['jwPreVideoImageURL']);
	update_option('jwPreVideoTargetURL', 	$_POST['jwPreVideoTargetURL']);
	update_option('jwOnPause', 				$_POST['jwOnPause']);
	update_option('jwOnPauseImageURL', 		$_POST['jwOnPauseImageURL']);
	update_option('jwOnPauseTargetURL',		$_POST['jwOnPauseTargetURL']);
	update_option('jwAds', 					$_POST['jwAds']);

	echo '<div id="message" class="updated fade" style="color:green;"><p>Options saved!</p></div>';

}

$jwPreVideo  			= get_option("jwPreVideo");
$jwPreVideoImageURL 	= get_option("jwPreVideoImageURL");
$jwPreVideoTargetURL 	= get_option("jwPreVideoTargetURL");
$jwOnPause				= get_option("jwOnPause");
$jwOnPauseImageURL		= get_option("jwOnPauseImageURL");
$jwOnPauseTargetURL 	= get_option("jwOnPauseTargetURL");
$jwAds 					= get_option("jwAds");
?>
    <form method="post" action="" novalidate="novalidate">
        <table class="form-table">
			<tr>
				<th scope="row">
					<label>Pre-Video Ads</label>
				</th>
				<td>
                    <select name="jwPreVideo" class="small">
						<option value="0" <?php if($jwPreVideo == 0) { echo "selected"; } ?>>Off</option>
						<option value="1" <?php if($jwPreVideo == 1) { echo "selected"; } ?>>On</option>
					</select>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label>Pre-Video Ads Image URL</label>
				</th>
				<td>
                    <input name="jwPreVideoImageURL" value="<?php echo $jwPreVideoImageURL; ?>" class="large" />
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label>Pre-Video Ads Target URL</label>
				</th>
				<td>
                    <input name="jwPreVideoTargetURL" value="<?php echo $jwPreVideoTargetURL; ?>" class="large" />
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label>On-Pause Ads</label>
				</th>
				<td>
                    <select name="jwOnPause" class="small">
						<option value="0" <?php if($jwOnPause == 0) { echo "selected"; } ?>>Off</option>
						<option value="1" <?php if($jwOnPause == 1) { echo "selected"; } ?>>On</option>
					</select>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label>On-Pause Ads Image URL</label>
				</th>
				<td>
                    <input name="jwOnPauseImageURL" value="<?php echo $jwOnPauseImageURL; ?>" class="large" />
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label>On-Pause Ads Target URL</label>
				</th>
				<td>
                    <input name="jwOnPauseTargetURL" value="<?php echo $jwOnPauseTargetURL; ?>" class="large" />
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label>Other Ad Codes</label>
				</th>
				<td>
                    <textarea name="jwAds" class="large"><?php echo $jwAds; ?></textarea>
				</td>
			</tr>
        </table>
        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes" />
        </p>
    </form>

