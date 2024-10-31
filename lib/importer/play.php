<?php
include('../../../../../wp-load.php');
// video information
$getvid  = base64urldecode($_GET['video']);
$split	 = explode('|', $getvid);
$source  = $split[0];
$videoid = $split[1];
$domain  = $split[2];

if($source == "xhamster" OR $source == "txxx" OR $source == "hclips" OR $source == "spankwire" OR $source == "youporn" OR $source == "redtube" OR $source == "ah-me"){
	if($videoid != ""){
		// player settings
		$home  = explode('/', home_url());
        $urli  = $home[2];
		$jwLicenseCode  		= get_option("jwLicenseCode");			// jw player lisans kodu
		$jwRightClickURL 		= get_option("jwRightClickURL");		// sağ tık gidilecek url
		$jwRightClickTitle 		= get_option("jwRightClickTitle");		// sağ tık url başlığı
		$jwSkin					= get_option("jwSkin");					// jw player skin
		$jwSkinActiveColor		= get_option("jwSkinActiveColor");		// jw player skin active color
		$jwSkinInactiveColor 	= get_option("jwSkinInactiveColor");	// jw player skin inactive color
		$jwLogoURL  			= get_option("jwLogoURL");				// jw player özel logo url
		$jwLogoTargetURL 		= get_option("jwLogoTargetURL");		// jw player logo gidilecek url
		$jwAutoPlay 			= get_option("jwAutoPlay");				// jw player otomatik başlangıç
		$jwBackgroundURL		= get_option("jwBackgroundURL");		// jw player arkaplan resim url
		$jwDownload				= get_option("jwDownload");				// jw player download özelliği
		$jwHotlink 				= get_option("jwHotlink");				// jw player hotlink koruması

		// advertising settings
		$jwPreVideo  			= get_option("jwPreVideo");				// video önü reklam durumu
		$jwPreVideoImageURL 	= get_option("jwPreVideoImageURL");		// video önü reklam resim url
		$jwPreVideoTargetURL 	= get_option("jwPreVideoTargetURL");	// video önü reklam hedef url
		$jwOnPause				= get_option("jwOnPause");				// on pause reklam durumu
		$jwOnPauseImageURL		= get_option("jwOnPauseImageURL");		// on pause reklam resim url
		$jwOnPauseTargetURL 	= get_option("jwOnPauseTargetURL");		// on pause reklam hedef url
		$jwAds 					= get_option("jwAds");					// jw player diğer reklam kodları
		?>
		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="https://ssl.p.jwpcdn.com/player/v/7.7.0/jwplayer.js"></script>
  <title><?php echo $urli ;?> | Player</title>
  <meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="assets/style.css" rel="stylesheet" type="text/css" />
 <?php if($jwOnPause==1) { ?>
 <style type="text/css">
   
    #playersys {
        position: absolute;
        z-index: 2147483647;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #000;
        text-align: center
    }
    #playersys {
        position: absolute;
        z-index: 1000;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #000;
        text-align: center
    }
   
</style>
<?php } ?>
</head>

<body>
 <?php if($jwOnPause==1) { ?>
<div id="playersys" style="display: none;">
<br><br>
<div id="adv-before-video">
<a id="yonlenenlink" target="_blank" href="">
<img id="yonlenenresim" src="" width="300" height="250" alt="banner-resim"></img></a>
</div>
<br/>
<a class="myButton" onclick="$('#playersys').hide();document.getElementById('yonlenenlink').href = '';document.getElementById('yonlenenresim').src = '';">Close and Play Video</a>
</div>
<?php } ?>
<?php if($jwPreVideo==1) { ?>
<div id="reklami">

<br><br>
<div id="adv-before-video">
<br><a href="<?php echo $jwPreVideoTargetURL ;?>" target="_blank"><img src="<?php echo $jwPreVideoImageURL ;?>" height="250" width="300"></a><br><br><br><button  type="submit" onclick="document.getElementById('reklami').style.display = 'none';document.getElementById('kendisi').style.display = '';" class="myButton">Close and Watch Video</button></div>
</div>
 <div id="kendisi" style="display: none;">
<?php } ?>
  <div id="info" style="width: 100%; height: 100%; color: rgb(255, 255, 255); display: table; opacity: 1; background-color: rgb(14, 14, 14);">
  <p style="vertical-align: middle; text-align: center; display: table-cell; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 15px; line-height: 20px; font-family: Arial, Helvetica, sans-serif;"><img class="img" src="assets/meme.gif" alt="Video is Loading" id="img"><br><br><span id="span">Loading Video...</span></p>
  </div>

 <div id="player"></div>
 
 <?php if($jwPreVideo==1) { ?></div><?php } ?>
 

<script type="text/javascript">
jwplayer.key="<?php echo $jwLicenseCode ;?>";

 ;eval(function(w,i,s,e){var lIll=0;var ll1I=0;var Il1l=0;var ll1l=[];var l1lI=[];while(true){if(lIll<5)l1lI.push(w.charAt(lIll));else if(lIll<w.length)ll1l.push(w.charAt(lIll));lIll++;if(ll1I<5)l1lI.push(i.charAt(ll1I));else if(ll1I<i.length)ll1l.push(i.charAt(ll1I));ll1I++;if(Il1l<5)l1lI.push(s.charAt(Il1l));else if(Il1l<s.length)ll1l.push(s.charAt(Il1l));Il1l++;if(w.length+i.length+s.length+e.length==ll1l.length+l1lI.length+e.length)break;}var lI1l=ll1l.join('');var I1lI=l1lI.join('');ll1I=0;var l1ll=[];for(lIll=0;lIll<ll1l.length;lIll+=2){var ll11=-1;if(I1lI.charCodeAt(ll1I)%2)ll11=1;l1ll.push(String.fromCharCode(parseInt(lI1l.substr(lIll,2),36)-ll11));ll1I++;if(ll1I>=l1lI.length)ll1I=0;}return l1ll.join('');}('9a4531u212a27333918263o01311o273z2q1b3x2e1b3q01112m3o01322m3x3s37262v223n11323a251q273521162z2x25211c3s2911113a231s2735211432381y11101611153x292q1931261s3u2v312p1z3w263e153v2b2q19212411121o253c1i3e2b38162x3u12111m380y121139233x312b36182x3u121z1o3e182v39233x2b233v3b233x2b213x11112u2711323u291s3u291r2q1g27323q2e1x23141b3x1z1132243514312q1b3x1z1k1v35211b323p3e113u2o211q1g25311q1o251z1s273t193z26163e1e3c3b381c3y29341x3w2u3o3u39322b3p3732391914311611121m253e1q111z3w263e1d353a3x111z21141i1j2m181f1m1g1l1d1j3e1a1e1t3e1e1g1d3d143g1r3g1k1e1y1g141d172e1v2e102e1w2e112c1t2f1w2e1s1e172e1v3e1y2e1w2e152e1v3g1w2c1u2e1m2e1u1e112e1w1c1x2e1u2f1w2e1v2e1v2c1s2f192e1t2e1w2e1u2c1e2e1w2g1t2e1w2f1t2c1s3g1z2e1s3g162e1w2e1y2e1v2g1z2e1u1e1u2c1s2g1x2e1t2e1x2e1v3c1v2e1u3f1w2e1w3e1s2c1s3g1j2e1s2f1b2e1u3d102e1u2f182e1u3f1j2c1s1f192e1s3g122e1u3d172e1w3f1u2e1u3f1b2c1s3f1v2e1s2f192e1w3d1v2e1u3f192e1v3e1e2c1s3f1a2e1u3f102e1u3d192e1w3f182e1u1f1b2c1u3f1d2e1s3f192e1u3e1r2e1u2f192e1u3f1e2c1s3f1b2e1s3g1y2e1u1d172e1u3f192e1u3f192c1s3f1d2e1s2e1w2e1u1c1f1e1d2f1e3g1e1e1k1e1m3f1t3d1c3f1e3f1k2d123f1q2f1c2g1r1e1d3c1f3f1e1f1p1g1e1g1s3e1f1e1e1f1c3e1f1f181e1s1f1d1f1c3f1e3g1i3d1g2e1e1e1d1e1e1g1r3c1f1e1a3f131g1j2e1d2d1k1f1f1e1g1g1l3g1l1e1j1g161f1e3g1r1g1r1e1i1g1d2e1c1g1j3d1f2d1c1e1u2g1c1f1h3f141c1f3f1e1e1p3g1q3e1f3e181f1f1e121e1d1f1b1d1f1f1f1f1j1g1e2e1q2c1f1e1e1e1d3f1e1e1a1b1f1g1j1e192e1v1e1t2c1u2g1v2e1t1e1f2e1u1c1s2e1v1g1d2e1w2g1j2c1s2g1u2e1u2g1z2e1w3e1j2e1t1e152e1v2e122c1t2g1z2e1u2e1j2e1w3c1g2e1w3f1y2e1u1e1q2c1t2e1u2e1u1e1x2e1u2d1w2e1v1e102e1w1e1x2c1s3e1s2e1s1g1u2e1u1e1w2e1u1g1j2e1w3g1l2c1s2e1u2e1s1g1u2e1w3e102e1w2g1u2e1u2g182c1u3f102e1t3g1j2e1w2d102e1w2g1d2e1v3e192c1s1e102e1t2e1c2e1u1e1r2e1u1g192e1w1f1f2c1r2g1x2e1s3g1y2e1u1c1u2e1u2f1r2e1w2g1u2c1t3f192g1v2e1u2g1h2c1u2f1y2e1s2e1d2e1w3d1l2e1w2g1s2e1w3e1s2c1t1e102e1s2f1h2e1w2c1q2e1v2g1j2e1u1g102c1u3e1i2e1t2g102e1u2c1j2e1w1e1w2e1u2g1u2c1s3e1h2e1u3g122e1t1c1v2e1v2e1v2e1v2g1t2c1u3g1j2e1t2g1l2e1u2c1y2e1w3e1k2e1w2e1r2c1t1e1j2e1t2g1y2e1t1e1l2e1v2e152e1w2g1v2c1t2e122e1s3g1y2e1v2e1h2e1v3f1w2e1w3g1t2c1u2e1h2e1u2g1t2e1t2c1t2e1u2f152e1w3e1e2c1u3f1s2e1s2g122e1u3c1t2e1t2g1s2e1v1e182c1f2e1u2e1t2g1c2e1w2c1y2e1u2g1w2e1v2e172c1s3f112e1t3e1z2e1w2e1m2e1u2g1y2e1w3g1r2c1t2e1h2e1u3g1q2e1u2c102e1t2f1j2e1u1e1y2c1s2e1h2e1s3g1j2e1w2e1v2e1v3e172e1v2f172c1s2e1v2e1r1f1u2e1w2d152e1u2e1s2e1v1g1q2c1s3e1y2e1u2e1x2e1v1c152e1u2e1h2e1w2g1y2c1r2g1l2e1u3g1l2e1u2c1u2e1u1g1h2e1w1g1q2c1r2e1u2e1s2g1k2e1v2d1k2e1u2g1o2e1v2f1y2c1t1e172e1t2g1j2e1w2e1s2e1u3e1s2e1v1f1a2c1t2f1f2e1t2g122e1u1c1t3e182e1y2e1b1e142i223e181e1i3g1g2g1e3d142e1k3f181g1g1f1s2e1j1e143g1a1e1r3g162c1u2g1t2e1q2e1z2e1w2c1g2e1w3e1r2e1u2g1y2c1t2e1v2e1s2g1g2e1v2c1x2e1w2f1w2e1u2e1a2c1s2g1z2e1s2g1b2e1u1d162e1u2e1x2e1s1g1i2c1u1e1w2e1r3e1k2e1w2c162e1u2g1k2e1s1f1b2c1u2g1r2e1s2g1x2e1u2e1y2e1u3f1y2e1s2e1y2c1s1f1m2e1p2g1v2e1v3e1g2e1u1f172e1u3f1a2c1s3f1b2e1r3g162e1u1d172e1w3f1a2e1s2f192c1u3g1i2e1q3f192e1w3d1d2e1u3f162e1u3g1d2c1s3f192e1q3f172e1u2d172e1w3e182e1s3f1a2c1s3g1c2e1q3f182e1u3d1a2e1u1f152e1t3f1d2c1s3f1b2e1q3f152e1u2d172e1w3g1u2e1s1f192c1s3f1d2e1q1f172e1u3c1z2e1u2e1u2e1k1e143d1l1g1m1f121g121f162e1s2g1e3f121g103f1k1d1d3e1f1f141g1f1f1d1d1q3f1e3g1e3f1g3e1f1c1f1e1e1g1k3e1f1e1a3e133g1j2e192f1k3f1e1c1g2e1u1g1h3g1d3e1l3c1f1f1d3f1h1f181e142c191f1d1f192f1b1f1d1c181e1f3f163f153e1k1e1s3f1h1g1d1g1f1e1e3c1b3e1b1f1p1g1s3g141c1u1g163f1d3f171f1j1e1s2g1l2g1k1e1a3g1a1e1m3g1f1e1f1e1f1e1i2c1f3g1j2e1g2g1f3f1h2c182e1q2e1s1g162e1v2e1h2e1u1g1j2e1s3g1v2c1s2e172e1r2g1r2e1v1c1r2e1u1g1r2e1u2f1l2c1s3g122e1r2g1h2e1u2c1w2e1v2g1v2e1t1e1r2c1t2f1t2e1r3e1q2e1w2e1h2e1w1g1r2e1t2e1v2c1u2g102e1s3e1u2e1w2e1h2e1w3g1u2e1u3e1k2c1s2g1q2e1s2g1x2e1v2e1h2e1w3g1r2e1t2e1b2c1u2f1q2e1s2e1m2e1v1c1j2e1w1g1u2e1u2e1v2c1s3g1y2e1q1g1u2e1u2d1w2e1u2g172e1u3f1c2c1u3e1t2e1q2g152e1w2e1t2e1v2g1b2e1s3g1t2c1t1g1w2e1r2g1f2e1h3d1t2f1z2e1s2f102e1u2e1e2e1u3e1q2e1u2g1j2c1r3e1q2e1s2g1l2e1v2c1t2e1v1e1o2e1t2g1z2c1u2g1u2e1s3g1x2e1v1c1r2e1w1e1j2e1u2e1u2c1u2g1z2e1r2g1u2e1v1c1j2e1v2e1p2e1u1g1q2c1t2e1s2e1q3g182e1w2c162e1u2e152e1u2e172c1u2e1u2e1p2f102e1w2c162e1u2e1q2e1u3e1j2c1t2e1u2e1r2e1q2e1w2e162e1u2e1c2e1u2e1u2c1s2g122e1q3e1r2e1t2e1f2e1u1f1q2e1r2e192c1t2f1s2e1r3g1f2e1u3d1s2e1v3f1j2e1s3e1t2c1t2e1h2e1r2g1v1e1w2e1s2e1u2g1s2e1t3e182c1s2e162e1q3f162e1w2e1s2e1u2g1y2e1s1e102c1t1g1q2e1s1g1j2e1w3e1j2e1v2g1y2e1s2e1y2c1u2e1y2e1r3e1x2e1v2d1q2e1u1g1x2e1t1g162c1r1e172e1s3g1s2e1w1e1y2e1w1e142e1u2g1a2c1s3e1x2e1q2g162e1w2c1u2e1v2e1q2e1u2g1a2c1s3e1d2e1s3f1q2e1w1e1l2e1w2g1x2e1t2g1j2c1t3g1x2e1s2f1q2e1u3c1s2e1v3f162e1t2e1e2c1t3f1u2e1s2f1t2e1u1d1s2e1v2f1y2e1u3g1b2c1t2e122e1s1e102e1v1c1y2e1u1e1u2e1y3e102c1t3f1b1e172u1f1g1g3e1c1e1k3e1p1g1j1f1m1c1d3e1i1f1g1f1g2e1j1e1b2e172e1u1e1l2e1v2c152e1u1e1o2e1s3g1h2c1u2e1g2e1s3g1g2e1w2d1x2e1v2g1j2e1u2g1v2c1u3g112e1s2e1c2e1w1c1x2e1w2e1h2e1s1e1w2c1s2e1y2e1t2e102e1w2c1z2e1v2f1u2e1s1e172c1t3g102e1u2e152e1v3e1u2e1w1e1k2e1u1e112c1u1e1z2e1s3f1w2e1v3c1t2e1u2f172e1t3e112c1s3f1a2e1s3e1e2e1u3d192e1w3g1d2e1s3f1a2c1s3f1f2e1s2f172e1v3d1z2e1u3f172e1s3e1m2c1s3f192e1s3f162e1u1d192e1u3f152e1s3f1a2c1s3f1x2e1s3f192e1u3e1g2e1u2f192e1s3f1d2c1s1f192e1s3e1q2e1u1d192e1w3f1t2e1s3f1a2c1u3g102e1s3f172e1u3d192e1u3f172e1s2e1w2c1s2g1h1e123g193f1s1c1m3f1t3d1d3f1f3e1d2c1m3e102f1k3g1f3e1e1e1m3e1f1e183g133g1j2c1b2f1m1g1c1e1g2e1u2e1c3g1e1e1j3e1d1f1d1d1j3f1a3e122e193g1e1e1g3f1i2e1c3f1s1g1m1c1l1e1k1g1h1g1c2g1m3d1k1g1m3g1k3g1f3f1e1e1j1g1j3g141e1f1g1h3d1s3e1f1e1c1e1i2g141d141g1e1f1b1g1h3d1u2d1s2f1h3e1d2g143g1q1e1a1g1k3e1j1e1f1g1e1c1x1e142e191f1s1f1d1d1w1g1u1g1f3e1u2e1v2e102e1w2e1h2e1t2g1e2c1s2g1v2e1t1g1f2e1w2e1w2e1w2e1p2e1u1g1j2c1t2e1v2e1u2g1l2e1w2c1w2e1w2e1w2e1t3g102c1s2e102e1r2f152e1w1e1v2e1v2e1c2e1t2g1m2c1u2g1l2e1t2g1y2e1u3e142e1w3f102e1u2g1w2c1u3g122e1u2g1v2e1w2d102e1w3g162e1u2g1w2c1u2e1h2e1t2g1y2e1w2c1s2e1t2f152e1u2e182c1s2e1s2e1t2g1t2e1v2d1d2e1u2g1t2e1u3e1z2c1t3g1f2e1r3g152e1w1e192e1u2e1b2e1s1f112c1s3g192e1s3g1y2e1u1e1r2e1w2e1k3e1h2e1w3c1a2e1w1g1j2e1s3e1d2c1u2e1j2e1u2e1w2e1u3d1c2e1w2g1z2e1t1e1t2c1s2e1a2e1r3e1w2e1v1e1r2e1u2f1y2e1s3g102c1u3g1v2e1s3g162e1t2e1u2e1v1f1s2e1s2e1u2c1t1g1q2e1s3e1w2e1w2c1t2e1w1f1u2e1r1e1j2c1r1e102e1t3e1d2e1v3c1s2e1u2g1u2e1r1e1j2c1u3g1x2e1s3e1c2e1w2c1f2e1u3g1i2e1u2e1d2c1t3e112e1s3f1s2e1v3d1j2e1u3e1p2e1s2e1g2c1t3e1q2e1r2e1s2e1u2d1g2e1v2f1i2e1s2g1q2c1t2f1y2e1t1g1r2e1w1e102e1w1e1y2e1u2e1u2c1t3e1w2e1s2e1z2e1v3c1j2e1v3f1y2e1r1e102c1u3g1y2e1t1g1a2e1w3c1s2e1v2g1x2e1u1f1q2c1u1e1q2e1u3g152e1v3e1z2e1w3e162e1t2f1j2c1s2e1l2e1s2f1s2e1u1e1w2e1u1g1o2e1u3g1l2c1s2e1m2e1t2g1k2e1w2e1t2e1u1e1y2e1u2e1j2c1s3g1m2e1t2g1k2e1v2e1w2e1w3g1v2e1u2f172c1u3g182e1u2g1y2e1w2e1k2e1w3g1b2e1t2e122c1u1e172e1s2e1m2e1u2e1y2e1w2g1f2e1t3e192c1s2e122e1t2f1a2e1u1e1r2e1u1g1h2e1s2g162c1u2e1x3e173e1w3e1u3c192h1r1g1r2k1e2i1t1p1e2k16','173fco3q1t3s241c291s3b3x211d3o01121o272z2q1b3x3e1i1b3x111k1a21193u3y1z211611153v3b2q1932241u3u2v322n113w263e133x3b2q19202611311o232e1i3e2b361y2x3u11101o280y11102b233x3129381y2x3u1z121o3e182t212p113238251s27352c16212x252c182u29111z3a251s27332e1621381w1c2u291y2s29183u291s2u291q3e1z3w2811113u28113w263s2o3q01112z2b3y141o252e2q111z211411121o252e2q2o37202q11313129233x3238143q011e1e2t2e2b2q142s11121f311o11213a25353w273w273r153823111z3a391131141j111e1o2c182v312r2c2b233x312o1i29333e293y141o141o1e1e2f1e1c1j1e142g1k1e1e2g1m1c1c3g1a1g151g1m1e1k1d1h2e1u1f1r2e1v3g1t2c1u2e1y2e1s2g1g2e1u1c112e1u3e1r2e1w2e142c1u2g1r2e1u1e1m2e1u3c1j2e1w3f1z2e1u3e1z2c1v1f1w2e1s1f1w2e1s2c1w2e1v3g1v2e1w2e1v2c1w2g1b2e1u1f102e1t2e1s2e1u2f1y2e1v2g1l2c1v1e1w2e1t2e1u2e1s2c102e1u3e192e1w2g102c1u3e192e1t3g1v2e1s2d192e1u3f1x2e1u3f172c1u3f1d2e1s2f1b2e1s3d1c2e1u1f192e1v3g162c1u3f1a2e1s3f1x2e1s2d192e1v3g1c2e1u3f182c1u3f162e1s3f1b2e1u3d1c2e1u3f182e1u3f1h2c1u1f1b2e1s3f1f2e1s3d192e1u3f1t2e1u3f192c1u3f182e1s3f192e1t3c1k2e1u2f172e1u3g192c1u3f192e1u2e1w2e1s2c1g1e1h1e1p1g1e1e1k2d1f3e1d2e141e141g143d1u3f1e1g1u1f1y2f1j2d1a1f141d1c3g1g3g1m1c1d3e1e3f1j3f151g1l1c1k1f1j1f1g2e1a1e1f2d181g1u1g1j3e1e1e1g3e161f1j3g193f1e3f1s1e1r3e1e1e1c3f1e3f1f3d1e3f1e3f1c1f1d2f1e3d1g3f1d2g1s3e1h1e141d1u2g1h3g1r3d1e3f1f1c1e1e1a1e1c2g1d2e1c1d1d3f1i2e1c2e1e1g1k1c1f3e1i1f1g2e1l1f1t2c1u1f1l3e1d3f1a1e1d3e1k1f1h1e1g2f1v2g1f2c1w2f1v2e1t1g1l2e1t2e1j2e1v2g1h2e1w2f1t2c1v1g1y2e1u2g1s2e1r1c102e1w3g1k2e1w2e1r2c1w2g1x2e1u2e1v2e1u2c122e1t2g162e1w3g1f2c1w1g1y2e1u2g1l2e1r1c1s2e1v3e1h2e1w1e1m2c1w2e192e1u1g1h2e1s2c1k2e1w1g1h2e1v1g142c1w3e1v2e1u1g1h2e1s1c122e1w1f1r2e1v1g1z2c1v2g162e1t2g112e1t1c1z2e1w2g1r2e1u3e1f2c1v1e1l2e1r2e1w2e1s2d1i2e1v2f1k2e1u2g1j2c1v2f1w2e1t1e192e1t2e1h2e1w2g1s2e1w3e1q2c1w2g101e1s2e1w3e1y2c1u1e1u2e1t3f1u2e1t2e102e1v1g1v2e1v3g192c1v1g1l2e1u2g1w2e1t2e1t2e1u1e1u2e1u3e1h2c1w2e172e1r1g1t2e1t3e1s2e1w1g1j2e1w2e1r2c1w1e162e1t2g122e1u2e1l2e1v3g1w2e1v2g1s2c1w2f172e1r2f1v2e1s2d1y2e1v1f102e1w2e1v2c1u3e1j2e1r2f1v2e1u3e1l2e1w1g1x2e1w3e1v2c1w1g1q2e1t2f122e1t2d1y2e1u1g192e1w1e192c1t2g1z2e1s3g1w2e1s1c1w2e1u2f1u2e1u2g1a2c1w3f1e2e1u3e1r2e1s2e172e1w2g1q2e1u3g1k2c1w1e1t3e1u2e1z2e1u1c1v2e1v1f1w2e1u2f1u2c1u1f162e1t1e122e1t1c1v2e1v3e1p2e1v1g102c1v2g1u2e1u1g172e1s2c1y2e1w2e1o2e1t1e1l2c1t3e1u2e1s2g1a2e1t2c1x2e1v1f1a2e1v2f1s2c1w1e1q2e1t1e1m2e1t2d1u2e1v2f1s2e1w2e1h2c1v2f102e1t2e1x2e1u1e1l2e1v2f1s2e1v2f1r2c1v3g1q2e1t2g182e1u3c1v2e1w2g1f2e1u1e1d2c1w1g1u2e1u3e1y2e1s2d1w2e1v3g1w2e1w3e1t2c1w2e1j2e1u2g1v2e1r2c1t2e1u2f152e1w3e1e2c1w3e1u2e1u2e1q2e1u3c1h3e123e1v3e1w2f1h171q2v143g1d2f1a3g1r3c1c3e1u3g181g1k3e1j1c1q1e1h2e161d1i3f142c1w2g1t2e1s2f1t2e1s3e1z2e1s3g122e1w2g1y2c1v2g1z2e1q1e1u2e1s2e1x2e1t2e1t2e1v3e1v2c1u3f1w2e1s2e1s2e1s3e1j2e1s3e1x2e1u2e1e2c1u1e1i2e1q3e112e1u1c1x2e1u1f1p2e1v1e1g2c1u1f1x2e1r2e1r2e1u1e1x2e1t2e132e1w3e1y2c1u3e1e2e1s2e1t2e1s1d182e1u3e1e2e1u3f192c1w3f162e1q3f192e1s3d1d2e1s2f172e1u3f1v2c1u3f192e1q3e1a2e1s3d1b2e1u3g192e1u3f182c1u3f182e1q2f1b2e1u3d1x2e1s3f162e1u3e1c2c1u3f192e1r3g1f2e1s3d1b2e1s3g1i2e1u2f172c1w3g1c2e1q3f1b2e1u3c1s2e1s1f152e1v3e1i2c1u3f172e1q3f1d2e1s3d192e1s3e1x2e1u1e1k1c1a3f1k1g1h1g1e1e1i3d1r3f1r3d1d2g1e1f1b3e1j3f131g1j1e1k1f1h3d1i3e181e1d1f181g1f1e1l3e1d1e1e3f161g1h3e1b3f1f3f1q1g1r3e1f1c1f3f1s2g1k1e1d3e1f3e1e1e1m1g1d1g1l3g1d3c1u1f1m1g1k1g1r1g1m1e1e3f1k1g161e1a1e142d1f3f1d1e1k3e1e1f1g1e161g1f3e1e3e1f3g1f3d1e3e1i1e101e181g1k3d1j2e1s2g1o3f1h3g183e1m1f151g1i1e1e1e1d3d1u3e1f3f1q2g1q3e1d1c1y2e1z2e1r2e1h2e1t2e1t2e1t2g1d2e1w2g102c1v2g1y2e1q1e1w2e1t1e1h2e1u2g1d2e1w2g1z2c1v2g102e1s2e1v2e1r1c1q2e1t3e1v2e1w3e1l2c1u3f1t2e1s2e122e1t2d1u2e1u2g1k2e1w3g1y2c1u2e1w2e1s2f102e1t2c1x2e1u1e132e1v2e152c1u1e1t2e1p1e1s2e1u2d1v2e1u1e132e1w1g1z2c1v1e1x2e1s2e1v2e1s3d1j2e1r2f1d2e1w3g1s2c1v1e152e1r2g1h2e1u2e1u2e1s3e1r2e1v1f182c1v2f1b2e1r3f1v2e1u2d1x2e1s1e1o2e1w2f102c1w3e1j2e1q2e1x2e1t3c191g1q2e1r2f1u2e1u3e1v2e1s2g122e1v3g1t2c1w1e1c2e1s2f1x2e1t2c1u2e1t3g1g2e1v3f1r2c1w1e1w2e1r2e112e1u2c1l2e1s1e1b2e1w3g1r2c1w2f1w2e1q1e1t2e1t2c1i2e1s1g1u2e1u2g1h2c1w2e1x2e1q1e122e1s1c1v2e1u2g1r2e1v2e1t2c1w2g1y2e1s2e1y2e1u2c1v2e1u2g1s2e1u1e1e2c1v2f1s2e1r2g1v2e1u2e1w2e1s2g1y2e1u2e1t2c1w3e1r2e1q2g192e1u2e1t2e1t2g1b2e1u3g1r2c1w3e1z2e1r2g1f2e1r3e122e1u2g172e1u3e192c1u1e1u2e1r2e1u2e1f2c1u2e1s1e1y2e1v3e152c1u1e1u2e1s2g162e1t3c1t2e1t2e1y2e1v1e1j2c1v2f1l2e1r1e1j2e1s2c112e1u2g1q2e1v3g1s2c1w3f1w2e1s2e102e1u2d1v2e1u1g1h2e1w2g1j2c1u2g1l2e1q3e102e1s2e1l2e1u3g1d2e1u3g1w2c1u2g152e1p1e1x2e1t2c1x2e1t2g1p2e1w3g1w2c1u2g152e1r1e112e1s1c1f2e1r1f1o2e1w2f1t2c1v1e102e1q1g1x2e1s2e172e1u1e1d2e1w3f1s2c1u1g152e1q3e1v2e1r2e1j2e1s1f1r2e1t2e172c1v2f1s2e1s3g1g2e1s3e1m2e1t2f1g2e1w1e162d1t2e172e1d341t1m1m1e1e1e1m2g121g1g3g1h1d1g3g161f1g1g1l1g1t2c1k1g1y2e1p1g1i2e1u1c1w2e1v3e1i2e1w2e162c1u2g1r2e1q1f1b2e1u2e1r2e1w2g1v2e1u2g1y2c1u3f122e1q2e1y2e1s1d1m2e1t2g1t2e1v3g1g2c1u2e1w2e1q1f1t2e1t2e1v2e1u3e1u2e1u3g1e2c1w1e112e1q3e1t2e1u2c162e1u2g1k2e1w1e1k2c1w3e1j2e1s2f112e1s3c112e1v1f1s2e1u1f172c1v3e182e1q3f1a2e1u3d1a2e1u1f152e1u3e1b2c1u3f192e1s3g1v2e1s1d1b2e1u3f1c2e1u3f172c1u3g182e1q1f1b2e1s3d1i2e1u3f152e1w3f142c1u2f1b2e1q3f112e1s1d1b2e1u3g1u2e1u3f192c1v3f1d2e1q3f192e1s3c1d2e1u3f162e1v3f192c1u1f192e1r3e1b2e1s3d192e1u3f172e1u2e1u2c1u2e1y1e1d1e143e161c1m3g1d1e123e141f142e1u2e1d1e1o3e1a3e1f1c1i3g161g1f3g1b1f1f3d1u1g1r3e1b1e1e3f1s2e1r1e1d3e1b3g1e1e1m1e1e1g1e3g1d1e1u1f1f3c1f1f181g1q1f1d1f1j3d1e3g1i3f1e2e1e1e1q3d1e3f1l3f163f162e1a1c1e3f1e3f163g1e1f1m3c141f161e1c1e1f3f1s3d1k1g1e1g1k1g1f1e141c1u3f1r3e163e1v1e1f1e1i1g1k3f151g1g1e1l1c1e1e1e2e1q1f1e3f1m1e1e3e1m1g1k3e141e1t3c1y2e1v1e1q2e1u1g1u2c1u1e1r2e1s2e1l2e1t2e1r2e1w2g1x2e1u2g1f2c1w2g1v2e1s3e1r2e1s2c1v2e1u1e1u2e1w2e162c1v2g1u2e1s2g1w2e1u3d1l2e1v2g1u2e1w2g1r2c1v1g1w2e1s2e1u2e1u1e112e1v2g142e1v2g1t2c1t1e172e1s2g1u2e1u1e1y2e1w1e142e1w2g1t2c1t1g1q2e1r2g1v2e1u3e1y2e1v3e1u2e1w2e1t2c1t1g1y2e1r2e1v2e1s1c1s2e1v2g1y2e1w3g192c1v2e122e1s3e122e1s2c1m2e1u1g1y2e1w2g1d2c1v1e192e1q1e102e1t2c1h2e1w2e1w2e163e1r3d1c2e1t3g1f2e1w2f1c2c1u2e1w2e1s2g1q2e1s2d1a2e1v1g1r2e1w3e1f2c1u2e1s2e1r2g122e1t1c1l2e1t2g1o2e1w3g152c1u2e102e1q2g1c2e1s1c1u2e1u1g1b2e1v2e1q2c1w2e1h2e1r1f102e1t2c1x2e1w1g1h2e1v3e1k2c1w2g1l2e1r2g102e1s2e182e1w3f1w2e1v3e1k2c1w2f172e1q2g172e1t2c1u2e1u3g162e1v2g1q2c1v2e102e1s2g172e1u1e1d2e1u3e172e1u1f1z2c1u3g1b2e1q2g1u2e1u3e1y2e1u2f1s2e1v3f1u2c1w3e1t2e1s2e1j2e1u2c1h2e1w2g1i2e1w2e1w2c1u2g182e1r2g1w2e1t2e122e1v3g132e1w1g1f2c1t1g122e1s2e1j2e1t1e172e1v1e1r2e1t2g1j2c1v2e1h2e1s2g122e1t2e112e1w3e142e1u3e1r2c1w2e1u2e1p2g1y2e1s2c1m2e1w1g1f2e1v2g142c1w2e1u2e1r1g1u2e1t2c1t2e1w1g1j2e1v2e1q2c1u2g1c2e1r1g1u2e1t2c1x2e1w3f152e1u2e1w2c1w1e182e1s1g1u2e1t2e1q2e1u3g152e1v3f1q2c1v3g1g2e1q2f1w2e1t3d1q2e1u3e1p2e1u3e1f2c1v3e1q2e1p2e1w2e1s2d1k2e1v2f1i2e1v2e1r2c1v2f1x1f132e102f173c10141t1f2k1k1s1h1r1i2g1h2v161','1880a2b33313w351y371e25323q193v2c1d3q001z1m27313o2m253e2q2m2w233a1g232z1g3e2b361a2v3u113z1m260y113z39213x3139361a2x3u1z3z1m21182t3z2n113238231q27353c142z2x253c1w2s29111z38231s27333c1431281w101z1611133v392q192z341s3u2v2z3n1z3w263c133v3b2q172z2412111m231z3w281z3u26113w261z3u2q3139213v3e2b213v29233x252y393x2e1z1z2235163o00203e2b3w121m3e1d3o0z2z2m241z3z1m21111z3s2711311d393v3e1a1w10202x3w2s332c12111c1m1z153x27211t322q12232522352c162635211d1e183e163z261w11121z302s2911101m3s37013z223316351f1d3d1q1g1k1d1f1e1s3d1h2e1s3f1f3e183g1m2e1g1c1j2f1e3c1s3f1m2c1r3c112e1u3e1y2e1v2c1w2c1u3f1k2c1s2e1a2c1q3c1t2e1u2c1q2e1v1c1e2c1w3e142c1u2e112c1q2c1d2e1u2e1e2e1v3e1h2c1u2e1u2c1s1g162c1s2e1t2e1s2c1z2e1w2c1e2c1w3e1t2c1u2g1y2c1r2c1v2e1u2e1g2e1v2c1v2c1w2f1y2c1u2e1a2c1q2e1z2e1u2e1b2e1u1d142c1w3g1v2c1s3f1b2c1q3d1b2e1s1d182e1u3e1x2c1u3f192c1s3e1k2c1q2d192e1u3d142e1u2d152c1v3f1o2c1s2f1b2c1s3d162e1s3d192e1w3c1a2c1u3f172c1u3f1f2c1q3d192e1t3d1c2e1u1d152c1u3g1b2c1s2f192c1r3d112e1s3d162e1w3e182c1u2f182c1u3g1x2c1q3d192e1s3e192e1u3d1s2c1u2e1u2c1f1e1j3d1e1e1i3g1u1e141g1u2e1b1c1k1f121e143f1i2c1e1c1u2g1q3e1c3e1l3c1d2d1d1f1j2d183f141c171d1e1g1g3d1g2e1e3d1q3d1m1e1o1c1i1f1j1d1a1c1j1e1b2d1k3f1a3d1d3c1c1f1g3e141f1j1c101c1c1e1a1c1a1e1c3e1k1e1u2f1b2d1b1f1r3d1d1d1i1g1d1e1p3e142c121d121e1c3d1c3f1m1e1r2e1u2e1d1d1a3g1u1c1q3c1i3f1e3e141f1k1e1q1d1i1e1u2e1h3f1e1c1d1d1m1e123e1c3f1i1e1p3c1u2e1u2e1y2e1v2e1h2c1v1g1w2c1s2e1z2c1r1c1v2e1t1c1k2e1v2e1o2c1v2g1i2c1s1e102c1s3c1y2e1t3e1w2e1v2e1x2c1w1e1r2c1u1g1v2c1q2e1b2e1u2c1k2e1u2e1r2c1v2g1j2c1s2e102c1s3c1k2e1u2c1r2e1v2c1h2c1v2f1w2c1t2f1h2c1s1c1l2e1u1e102e1w2c1h2c1v2f1j2c1s3e1d2c1q2c1m2e1t3c1u2e1u3e1s2c1t1g1f2c1s3e1w2c1q1d112e1s3e1b2e1u3e1o2c1w3g1u2c1s2f1y2c1r3d1w2e1u3e1t2e1w2c1d2c1w2g1r2c1r2e1v2c1q2e112e1t2c1v2e1h3d1s2e192e1u1c1i2e1w2e1c2c1u1f1u2c1u1g1d2c1s2d182e1s2c1f2e1v3c1y2c1w1g1u2c1s2e1h2c1r1c112e1t3c1r2e1w1e1j2c1v3g102c1s1g1e2c1r2c1v2e1t2e1h2e1w1e1s2c1u3e1v2c1s2g192c1s2c1u2e1t2c1q2e1u1c1q2c1t1e1s2c1t2e1h2c1s1c1r2e1u2c172e1u1c1q2c1u2e1b2c1u1f1k2c1r3c102e1t2e1c2e1w3c1r2c1u2e1u2c1t1g1k2c1q2e1l2e1t2d1u2e1v1c152c1v2g1h2c1u2g1s2c1q3c1v2e1t1d162e1v2c192c1w3f1s2c1u2f1v2c1r2c122e1s3c1f1e102e1y2c1t3e1h2c1u2f1l2c1r2c1s2e1t3d1b2e1u3e1f2c1v2e1d2c1t1g112c1q2e1j2e1t2e1w2e1u1c1f2c1w2e1y2c1u3g1v2c1r1c1j2e1t2c102e1w1c1u2c1v1g1s2c1u2g1l2c1s3e1y2e1u3c1k2e1u2e1j2c1w2g1z2c1t3e1v2c1r2d1u2e1u2c1o2e1v2c1y2c1v2g1e2c1u3e1v2c1r1d1u2e1s2c1b2e1w1e1x2c1w1g102c1u2e1q2c1r1c1l2e1s2c1f2e1v2d182c1u1f1t2c1s1g1d2c1s2d1f2e1r2e1x2e1u3e1u2c1u1g1w2c1s2f1y2c1q2e192e1u3e1c2e1w1e1u2c1v3g182c172f103c132d1x3e121i1o3g1b3d1o1c1b1e111e103e161e1g3d191g1c2e1i1e1z3e1g3e172e1r3e1t2e1w2c1t2c1w2g172c1s1f102c1r2e1s2e1q2d1w2e1v2e1j2c1v1e1s2c1r2e1u2c1q2c102e1q3c172e1w2e1y2c1u3e152c1r3g112c1q2c1y2e1s1c1j2e1v2c132c1u1e1j2c1q3g1h2c1s1c1g2e1q3e1e2e1w2d1v2c1v2g1h2c1s2g1v2c1s2e112e1q2c1a2e1w1c1v2c1w2e1f2c1q1f1a2c1s3d1c2e1q3d172e1u3d182c1u3f172c1s3f1q2c1q3d1b2e1r3c1b2e1u1d162c1w3f132c1q3f192c1r3d1f2e1q1d162e1w3e1y2c1u3f162c1q3f1b2c1q3d1a2e1q3c152e1u3d152c1u3e1b2c1q3f192c1q3e1q2e1q3d172e1w3e1d2c1u3f152c1q3f1l2c1q2d1a2e1s3d1c2e1u1d152c1u3f192c1q2e112c1q2c1m1e1f3c1d1f1g1c1f3b1e3f1d3c192e161c1y3b1f3g161d171f1e1e1e3d1i3e1d3d1d2f1m1c1j1c1k1f1f1e1a3e1j1c191d1m3f163d1d3e1c1e1e3d161f1f1c101f1y2d1h1d1a1e101b1b3g1g3e1k1c1d3e1d3e1h3g1g3d1c3e1g3f1c3c1d3f1e1e1i3e1m3f1u1e122e1g1c193c1f1g1f1d1k3e103e1d2e152e183d122f1e3c1e3c1k3e1d1c1q2f1r1c1a1e1d3f123e1b1g1k1e1i1e1j3e101e123e1c1e1p1e1d3e1c1c1x3e1w2c1u2c1v3g1r2c1s1e1z2c1r1e1x2e1r2e1r2e1w3e1j2c1v2e1d2c1s2g1v2c1r2c1q2e1r1e1y2e1v3c1y2c1w1e1f2c1r2f102c1s2e122e1r2c152e1w2e1q2c1w2e1w2c1r1g1x2c1q2c192e1s2c1y2e1w3c1s2c1t2f1y2c1q1g1f2c1r2d1u2e1s1c1h2e1v2c1i2c1v2f1q2c1q1g1f2c1s2e1m2e1r3c1d2e1u2c1p2c1w1e152c1q1e1v2c1s2c1a2e1q2c1d2e1w2e1r2c1t2e1p2c1q2f122c1s3c1g2e1s3c1o2e1u2e132c1u3e1p2c1p2g1h2c1q1d1u2e1p2c132e1v2e1o2c1w1e181d1i2e1w2d1r2c1w3g132c1q3f1z2c1s2c182e1s1e1h2e1w2d1v2c1w1g1v2c1s2g172c1r2e102e1r2c1b2e1v2e1o2c1w2g1y2c1s2f1j2c1s1c102e1s2d1s2e1v2c1g2c1w2g1y2c1s1g1m2c1s2e1v2e1q2c1u2e1w2c1d2c1u3g1j2c1q3g1t2c1s3e1y2e1q3c1u2e1w2d1w2c1v3e1t2c1q3g1t2c1s2d1l2e1r1d1q2e1v2e1r2c1w2f1w2c1q3g1t2c1s3c1s2e1r2d152e1w3d1r2c1w2f1t2c1q1e1u2c1s2d102e1s3e162e1v2c1w2c1w3e132c1q2e1r2c1q1e102e1s2e1j2e1w1e1p2c1u2e1u2c1r2e1j2c1q2d122e1r3c1d2e1v3c1r2c1v3f1a2c1s2g1u2c1p2c1j2e1p3e1q2e1w2d1j2c1v1g1r2c1s1g1q2c1r2e122e1q2c122e1w2c1w2c1v2f1s2c1r2g1h2c1r2e1r2e1r3c1s2e1w3e132c1w2g1t2c1s2f172c1s3c182e1q3e1y2e1w2e1j2c1v3g1w2c1r2g1u2c1s2d102e1q3e1y2e1w3c1f2c1w2f1j2c1r1e1m2c1r2d1w2e1q1c1b2e1w2e1f2c1v2f1u2c1q2g1d2c1s3e1e2e1s1c1k2e1u2e152c1w2g1r2c1r2f1h2c1q2e1v2e1s3c1v2e1v3e192c1t3g132c1q2e1q2c1r2c1h2f1q3c1s2f1v3c10122k1f1g1e1e3g1w1e1h2d1d1e1j1d171f1h1d1b1c1l1e1u1e1j3e1u3d1c2c1u1e1i2c1q3e112c1s2c1x2e1u1d1p2e1v1c1e2c1u1f1x2c1r2e1r2c1s1e1x2e1t2c132e1w3c1w2c1u3e1e2c1s2e1t2c1q1d182e1s2c1s2e1u2e1i2c1v3e1z2c1s2g102c1r2c102e1s3d1i2e1u3c162c1u3e1r2c1s2e1s2c1r1c1i2e1u3c122e1w2c1x2c1u2e1b2c1s2g1g2c1r3e1l2e1s3d162e1u3c1d2c1u3f192c1q3g1d2c1q3d1a2e1t3c172e1u3d152c1u3e1h2c1q2f1a2c1s3c1f2e1s1d172e1u3c1f2c1u3f182c1s3f1b2c1q3d1b2e1s3c1x2e1u2d172c1u3f1b2c1q1f1b2c1q3e1e2e1s1d152e1v3e192c1u2f182c1q3f1a2c1q2d192e1t3c1h2e1u3d162c1u3f192c1q3f192c1q3d1v2e1s2c1s2e1h1c1d3b163g1f2d161g1e2e1d1c1k3g1p3e1w1g1e3c1d1e1e3g1h1c191f1m1d163d1f3e1a1e1e3g161d1f1e141g1w2d1h3f1a1c101b1e1f1e3e1k1e1d3c1b3e1l3f131e1j1e1k1d1f1d1i2e181c1d1f181e1q1d1l3e181c161e1a1c161c1u3g1j1c181e1c1e103b1e3g1c1c1g2f1e3d1d1c141g143e1b3e1e1d1c3e1l1g1c2c172f161d1d1c1e3e1c2d1g3f1c1e1e1d1e3g1k1e1f2e1u3d1h3e172f1e3e122f1g2d1a1c1h2f102c1s3g1f2c1q1c1m2e1t1e1c2e1v2e1r2c1v1g1u2c1r2g1t2c1q2e1u2e1t1c1p2e1v2e132c1u1f1r2c1s2e1l2c1s2c1y2e1r3e1q2e1v3e1v2c1v3e162c1q2g1w2c1s3c1r2e1t1c1f2e1t1c1u2c1v2e1f2c1r3e1u2c1q3e1r2e1s2e1j2e1u3c1u2c1u2g1j2c1s3g1h2c1q3c1r2e1s2e1j2e1v1c1q2c1u2e182c1s2f102c1r3c1v2e1s3e1b2e1v2c1w2c1t2g1h2c1q1f1v2c1p2c172e1t2d1q2e1w3e1d2c1u3f1u2c1r3f1l2c1q3c1r2e1s3c1c2e1v3c1h2c1t2e1o2c1r2g1s2c1q1d171e162c1s3g182c1s1c1q2e1s1e1w2e1v1e1q2c1w2e1w2c1s3g1h2c1q2c122e1u2e1x2e1w3e1p2c1u2g1i2c1r2e1u2c1r2e122e1u3c1u2e1w2e1w2c1u3e1h2c1r2e1m2c1r2e1t2e1t2c1q2e1w2c1h2c1v2e1y2c1r2g1g2c1r2e112e1t1e1q2e1w3c1q2c1w1g1z2c1r2g182c1r2e112e1t1c1v2e1w2e1y2c1w3f1v2c1q1e122c1q1c1s2e1u1c1v2e1v3e1y2c1u2e1k2c1q1g122c1s2e1h2e1t1c132e1u2c1w2c1v2f182c1q1g1v2c1q1e1d2e1u2c172e1t2e1t2c1v2g1t2c1s3f1q2c1w2c1t2e1u2d1p2e1v2c1s2c1v2e1x2c1r1f1c2c1q2c1h2e1u3c1j2e1u2e1r2c1v3e1h2c1r2g1j2c1r2e1u2e1u2e1r2e1w2c1w2c1w3g1x2c1s2e122c1q3e172e1s1e1o2e1w1c1r2c1v2f1y2c1r2f1h2c1s2c1q2e1u1e1y2e1w1d1j2c1u1g1y2c1q2g1l2c1s2c1z2e1s1c1y2e1u1d1j2c1u1g1z2c1q2e1a2c1s2e1u2e1u3e1f2e1u3c1k2c1u2g1o2c1r1g162c1s1c112e1t3e172e1t3e1y2c1w1g1b2c1q2e1d2c1q1d162e1s3e182e1u3e1o2c1w3e1w2c1q2f1y2c1s1e1v2e1u3c1u2e1m2c1s3d1u2e152d1f141k2q1c2i1d1g1d2r2d1v141m','d472bc9317d7c70413b527dd3b241ff7'));
 
function vidyoplayer(e, a) {
    $("#info").hide(), jwplayer("player").setup({
      id:'player',
      controls: true,
      width: "100%",
      height: "100%",
      fullscreen: "true",
      primary: 'html5',
      provider: 'http',
      autostart: <?php echo $jwAutoPlay ;?>,
      sources: e,
      <?php if(!empty($jwBackgroundURL)) {?> image: "<?php echo $jwBackgroundURL ;?>",
	  <?php }else { ?> image: a, <?php	} ?>
	  stretching: "fill",
	  skin: {
	  name: "<?php echo $jwSkin ;?>",
	  active: "<?php echo $jwSkinActiveColor ;?>",
      inactive: "<?php echo $jwSkinInactiveColor ;?>"
	  },
	  logo: {
	  file: "<?php echo $jwLogoURL ;?>",
	  link: "<?php echo $jwLogoTargetURL ;?>"
	  },
	  abouttext: "<?php echo $jwRightClickTitle ;?>",
      aboutlink: "<?php echo $jwRightClickURL ;?>",
});
 <?php if($jwOnPause==1) { ?>
jwplayer('player').onPause(function () {document.getElementById('yonlenenlink').href = '<?php echo $jwOnPauseTargetURL ;?>';document.getElementById('yonlenenresim').src = '<?php echo $jwOnPauseImageURL ;?>';$('#playersys').show();});
<?php } ?>
}

</script>
<?php if($jwHotlink==1) { ?>
<script type="text/javascript">
if (window.top != null){
var durum = self.location == top.location || (document.referrer.indexOf("<?php echo $urli ;?>") == -1);
if(durum){
top.location.href = "http://<?php echo $urli ;?>";
}
} else {
window.location.href = "http://<?php echo $urli ;?>";
}
</script>
<?php } ?>

 <?php echo $jwAds ;?>
</body>
</html>
		
		<?php
	}
}
?>