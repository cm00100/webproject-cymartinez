<?php 

include "oauthstuff/tweetoauth.php";

$consumer_key = "hidden";
$consumer_secret = "hidden";
$access_token = "hidden";
$access_token_secret = "hidden";

$twitter = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);

$tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=software&result_type=random&count=1');

?>
<!DOCTYPE html>
<html lang="en">
 <link  href="css/style.css" rel="stylesheet" type="text/css" />
<head>
  <meta charset="UTF-8">
  <title>Web Project</title>
</head>
<body>


<div class="content">


    <?php foreach ($tweets->statuses as $key => $tweet) { ?>
        <img src="<?=$tweet->user->profile_image_url;?>" /><?=$tweet->text; ?><br>
    <?php } ?>
  
</div>


</body>
</html>
