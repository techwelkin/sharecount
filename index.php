<html>
<head>
<title>Shared Count: Social Sharing Count of Any URL</title>
<meta name="description" content="Get Shared Count for a URL. Social sharing count from Facebook, Twitter, Google+, Pinterest etc. in terms of likes, shares and comments"/>
<link rel="stylesheet" type="text/css" href="sharedcount.css" media="all" />
<link rel="publisher" href="https://plus.google.com/+LalitKumar">
<link rel="shortcut icon" href="http://techwelkin.com/wp-content/themes/techwelkin/images/favicon.png" type="image/x-icon" />
<link rel="icon" href="http://techwelkin.com/wp-content/themes/techwelkin/images/favicon.png" type="image/x-icon" />
<link media="all" type="text/css" rel="stylesheet" href="http://techwelkin.com/tools/tools-global-menu.css">
<link media="all" type="text/css" rel="stylesheet" href="../tools-style.css">

<meta name="viewport" content="width=device-width">
<meta property="og:title" content="Shared Count: Social Sharing Count of Any URL">
<meta property="og:description" content="Get Shared Count for a URL. Social sharing count from Facebook, Twitter, Google+, Pinterest etc. in terms of likes, shares and comments">
<meta property="og:site_name" content="TechWelkin">
<meta property="article:publisher" content="https://www.facebook.com/techwelkin">
<meta name="twitter:domain" content="TechWelkin">
<meta name="twitter:creator" content="@techwelkin">

</head>

<body class="sc-body" topmargin="0" leftmargin="0">

<h1>Shared Count</h1>
<div id="sc-container">
		<div class="sc-main">
			<form id="scForm" action="http://techwelkin.com/tools/sharedcount/" method="post" accept-charset="utf-8">
			      <input name="sc-url" id="sc-url" type="text" class="sc-url" placeholder="enter a url e.g. http://www.google.com" value="" />
				  <button name="submit" class="sc-btn" type="submit">Get Count</button>
			</form>
		</div>
</div>
<?php
require('sharedcount-class.php');
$fb_total = 'N/A';
$fb_likes = 'N/A';
$fb_shares = 'N/A';
$fb_comments = 'N/A';
$fb_clicks = 'N/A';
$fb_commentsbox = 'N/A';

$tweetctr = 'N/A';
$gplusctr = 'N/A';
$linkedinctr = 'N/A';
$pinterestctr = 'N/A';
$deliciousctr = 'N/A';
$stumblectr = 'N/A';
$redditctr = 'N/A';

$grand_total = 0;

if(isset($_POST['submit'])) {
$obj=new shareCount($_POST['sc-url']);  //Use your website or URL
$fb_total = $obj->get_fb_total();
$fb_likes = $obj->get_fb_likes();
$fb_shares = $obj->get_fb_shares();
$fb_comments = $obj->get_fb_comments();
$fb_clicks = $obj->get_fb_clicks();
$fb_commentsbox = $obj->get_fb_commentsbox();

//$tweetctr = $obj->get_tweets();
$gplusctr = $obj->get_plusones();
$linkedinctr = $obj->get_linkedin();
$pinterestctr = $obj->get_pinterest();
//$deliciousctr = $obj->get_delicious();
$stumblectr = $obj->get_stumble();
$redditctr = $obj->get_reddit();

$grand_total = $fb_total + $gplusctr + $linkedinctr + $pinterestctr + $stumblectr + $redditctr;

}
?>

<div id="sc-count-container" class="<?php if(isset($_POST['submit'])){ echo 'show'; }else{ echo 'hide';} ?>">

<center><div id="social-sharing-div">
<div style="float: left; padding-right: 20px;">Share this tool, please!</div>
<div class="addthis_native_toolbox"></div>
</div></center>

<div class="sc-show-url">Social Shared Count for: <span class="post-url"><?php echo $_POST['sc-url']; ?></span></div>

<div id="sc-group-container">
<div class="box-heading fb-box-heading">Facebook</div>
<div id="sc-count" class="count-box fb-box">
	<div class="sc-count-count"><?php echo $fb_total; ?></div>
	<div class="sc-count-text">total</div>
</div>

<div id="sc-count" class="count-box fb-box">
	<div class="sc-count-count"><?php echo $fb_likes; ?></div>
	<div class="sc-count-text">likes</div>
</div>

<div id="sc-count" class="count-box fb-box">
	<div class="sc-count-count"><?php echo $fb_shares; ?></div>
	<div class="sc-count-text">shares</div>
</div>

<div id="sc-count" class="count-box fb-box">
	<div class="sc-count-count"><?php echo $fb_comments; ?></div>
	<div class="sc-count-text">comments</div>
</div>

<div id="sc-count" class="count-box fb-box">
	<div class="sc-count-count"><?php echo $fb_clicks; ?></div>
	<div class="sc-count-text">clicks</div>
</div>

<div id="sc-count" class="count-box fb-box">
	<div class="sc-count-count"><?php echo $fb_commentsbox; ?></div>
	<div class="sc-count-text">comment box</div>
</div>

</div>


<div id="sc-group-container">
<div id="sc-count" class="count-box tweet-box">
	<div class="box-heading tweet-box-heading">Twitter</div>
	<div class="sc-count-count"><?php echo $tweetctr; ?></div>
	<div class="sc-count-text">tweets</div>
</div>
</div>

<div id="sc-group-container">
<div id="sc-count" class="count-box gplus-box">
	<div class="box-heading gplus-box-heading">Google+</div>
	<div class="sc-count-count"><?php echo $gplusctr; ?></div>
	<div class="sc-count-text">plus ones</div>
</div>
</div>

<div id="sc-group-container">
<div id="sc-count" class="count-box linkedin-box">
	<div class="box-heading linkedin-box-heading">LinkedIn</div>
	<div class="sc-count-count"><?php echo $linkedinctr; ?></div>
	<div class="sc-count-text">shares</div>
</div>
</div>

<div id="sc-group-container">
<div id="sc-count" class="count-box pinterest-box">
	<div class="box-heading pinterest-box-heading">Pinterest</div>
	<div class="sc-count-count"><?php echo $pinterestctr; ?></div>
	<div class="sc-count-text">pins</div>
</div>
</div>

<!--<div id="sc-group-container">
<div id="sc-count" class="count-box delicious-box">
	<div class="box-heading delicious-box-heading">Delicious</div>
	<div class="sc-count-count"><?php echo $deliciousctr; ?></div>
	<div class="sc-count-text">shares</div>
</div>
</div> -->

<div id="sc-group-container">
<div id="sc-count" class="count-box stumble-box">
	<div class="box-heading stumble-box-heading">Stumble</div>
	<div class="sc-count-count"><?php echo $stumblectr; ?></div>
	<div class="sc-count-text">shares</div>
</div>
</div>

<div id="sc-group-container">
<div id="sc-count" class="count-box reddit-box">
	<div class="box-heading reddit-box-heading">Reddit</div>
	<div class="sc-count-count"><?php echo $redditctr; ?></div>
	<div class="sc-count-text">shares</div>
</div>
</div>

</div>


<div id="grand-count">
	<div class="box-heading grand-total-box-heading">Total of All</div>
	<div class="grand-count-count"><?php echo $grand_total; ?></div>
	<div class="grand-count-text">shares + likes + comments etc.</div>
</div>

<div id="shared-count-description">
<p>Shared Count is a TechWelkin.com tool that shows the sharing count count of a particular <a href="http://techwelkin.com/understanding-the-components-and-structure-of-a-url" title="Understanding the Components and Structure of a URL" target="_blank">URL (web address)</a>. Nowadays, content sharing on social networks like <a href="http://techwelkin.com/facebook-latest-facts-statistics-one-billion-users-story" title="Facebook Facts: From Zero to One Billion Users" target="_blank">Facebook</a>, Twitter, Google+, Delicious, StumbleUpon, Pinterest etc. is extremely important. The more a URL gets shared, the more important it becomes in the eyes of search engines like <a href="http://techwelkin.com/google-facts-amazing-trivia-about-google" title="Google Facts: Amazing Trivia about Google" target="_blank">Google</a>.</p>

<p>Shared count acts as a counter of likes, shares, comments etc. on the online social networks. Although, good quality content is still the most important criteria for the success of a website, but social bookmarking and sharing has also become an extremely important factor. Gone are the days when PageRank ruled the <a href="http://techwelkin.com/google-search-algorithm-updates" title="Google Search Algorithm Updates" target="_blank">Google's algorithmic world</a>. Now the TrustRank decides how a webpage will rank in Google. Social sharing count is a major factor in building this TrustRank. It is assumed that more likes and share and comments on a URL denotes more trust of public in that link.</p>

<p>The above Shared Count tool helps in <i>finding social count of any link.</i></p>

<p>Just paste the complete and valid URL in the above box and click <b>"Get Count"</b> button to see total count from all important social networking channels.</p>
</div>


<?php unset($_POST['submit']) ?>

</body>
</html>