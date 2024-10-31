<?php
if($_POST['addvideo'] == 1){

	// add post array	
	$mypost = array();
	$uppost = array();

	// custom fields
	$iframeWidth  			= get_option("iframeWidth");
	$iframeHeight 			= get_option("iframeHeight");
	$descriptionCustomField = get_option("descriptionCustomField");
	$thumbnailCustomField 	= get_option("thumbnailCustomField");
	$durationCustomField 	= get_option("durationCustomField");
	$iframeCustomField 		= get_option("iframeCustomField");

	// post values	
	$title 		 = $_POST['title'];
	$duration 	 = $_POST['duration'];
	$iframe		 = $_POST['iframecode'];
	$image		 = $_POST['image'];
	$playerurl   = $_POST['playerurl'];
	$tags		 = $_POST['tags'];
	$category    = $_POST['yourcat'];
	$description = $_POST['description'];
	$videolink   = $_POST['videolink'];
	$poststatus  = $_POST['status'];
	$iframecode  = '<iframe src="' . $playerurl . '" width="' . $iframeWidth . '" height="' . $iframeHeight . '" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen"></iframe>';
	
	// save image
	$kon      = wp_upload_dir();
	$filename = getSlug($title);
	$uz       = findExt($image);
	getImage($image, $filename);
	$imgurl     = get_bloginfo('url')."/wp-content/uploads/$filename.$uz";

	// add post	
	$mypost['post_title'] 		= $title;
	$mypost['post_type'] 		= 'post';
	$mypost['post_status']		= $poststatus;
	$mypost['post_category']	= $category;
	$mypost['tags_input']		= $tags;
	$mypost['post_author'] 		= 1;

	$postid = wp_insert_post($mypost);
	if($postid){
		echo '<div id="message" class="updated fade" style="color:green;"><p>Video Added!</p></div>';
		if($iframeCustomField != ''){
			add_post_meta($postid, $iframeCustomField, $iframecode);
		}
		else{
			$content1 = "<p>$iframecode</p>";
		}
		if($descriptionCustomField != ''){
			add_post_meta($postid, $descriptionCustomField, $description);
		}
		else{
			$content2 = "<p>$description</p>";
		}
		if($durationCustomField != ''){
			add_post_meta($postid, $durationCustomField, $duration);
		}
		if($thumbnailCustomField != ''){
			add_post_meta($postid, $thumbnailCustomField, $imgurl);
		}
		else{
			$filename = $imgurl;
			require_once(ABSPATH . 'wp-admin/includes/image.php');
			// The ID of the post this attachment is for.
			$parent_post_id = $postid;

			// Check the type of file. We'll use this as the 'post_mime_type'.
			$filetype = wp_check_filetype( basename( $filename ), null );

			// Get the path to the upload directory.
			$wp_upload_dir = wp_upload_dir();

			// Prepare an array of post data for the attachment.
			$attachment = array(
				'guid'           => $wp_upload_dir['url'] . '/' . basename( $filename ), 
				'post_mime_type' => $filetype['type'],
				'post_title'     => preg_replace( '/\.[^.]+$/', '', basename( $filename ) ),
				'post_content'   => '',
				'post_status'    => 'inherit'
			);

			// Insert the attachment.
			$attach_id = wp_insert_attachment( $attachment, $filename, $parent_post_id );

			// Generate the metadata for the attachment, and update the database record.
			$attach_data = wp_generate_attachment_metadata( $attach_id, $filename );
			wp_update_attachment_metadata( $attach_id, $attach_data );

			set_post_thumbnail( $parent_post_id, $attach_id );  
		}
		if($content1 != '' AND $content2 != ''){
			$uppost['ID'] 			= $postid;		
			$uppost['post_content'] = $content1 . $content2;
			wp_update_post($uppost);
		}
		if($iframeCustomField != '' AND $content2 != ''){
			$uppost['ID'] 			= $postid;		
			$uppost['post_content'] = $content2;
			wp_update_post($uppost);
		}
	}
	$wpdb->get_var("INSERT INTO $table (videolink) VALUES ('$videolink')");	
}
?>