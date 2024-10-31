<h1>General & Custom Field Settings</h1>
<?php
apiControl("lastlogin");
if($_POST['submit']){

	update_option('iframeWidth', 			$_POST['iframeWidth']);
	update_option('iframeHeight', 			$_POST['iframeHeight']);
	update_option('descriptionCustomField', $_POST['descriptionCustomField']);
	update_option('thumbnailCustomField', 	$_POST['thumbnailCustomField']);
	update_option('durationCustomField', 	$_POST['durationCustomField']);
	update_option('iframeCustomField', 		$_POST['iframeCustomField']);
	update_option('jwDownload', 		$_POST['jwDownload']);

	echo '<div id="message" class="updated fade" style="color:green;"><p>Options saved!</p></div>';

}

$iframeWidth  			= get_option("iframeWidth");
$iframeHeight 			= get_option("iframeHeight");
$descriptionCustomField = get_option("descriptionCustomField");
$thumbnailCustomField 	= get_option("thumbnailCustomField");
$durationCustomField 	= get_option("durationCustomField");
$iframeCustomField 		= get_option("iframeCustomField");
$jwDownload 		    = get_option("jwDownload");
?>
    <form method="post" action="" novalidate="novalidate">
        <table class="form-table">
		<tr>
				<th scope="row">
					<label>I have SSL ( https:// )</label>
				</th>
				<td>
				 <select name="jwDownload" class="small">
                  <option value="0" <?php if($jwDownload == 0) { echo "selected"; } ?>>No</option>
						<option value="1" <?php if($jwDownload == 1) { echo "selected"; } ?>>Yes</option>
						</select>
					<p class="smalldesc">Some video importers needs SSL on your domain to work. Otherwise You cannot use SSL importers.</p>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label>Iframe Size</label>
				</th>
				<td>
                    <input name="iframeWidth" value="<?php echo $iframeWidth; ?>" class="small" /> width <input name="iframeHeight" value="<?php echo $iframeHeight; ?>" class="small" /> height
					<p class="smalldesc">Iframe width and height values (% or px)</p>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label>Description Custom Field</label>
				</th>
				<td>
                    <input name="descriptionCustomField" value="<?php echo $descriptionCustomField; ?>" class="medium" />
					<p class="smalldesc">If you have custom field for video description, please enter.</p>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label>Thumbnail Custom Field</label>
				</th>
				<td>
                    <input name="thumbnailCustomField" value="<?php echo $thumbnailCustomField; ?>" class="medium" />
					<p class="smalldesc">If you have custom field for video thumbnail, please enter.</p>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label>Duration Custom Field</label>
				</th>
				<td>
                    <input name="durationCustomField" value="<?php echo $durationCustomField; ?>" class="medium" />
					<p class="smalldesc">If you have custom field for video duration, please enter.</p>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label>Iframe Custom Field</label>
				</th>
				<td>
                    <input name="iframeCustomField" value="<?php echo $iframeCustomField; ?>" class="medium" />
					<p class="smalldesc">If you have custom field for iframe, please enter.</p>
				</td>
			</tr>
        </table>
        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes" />
        </p>
    </form>
