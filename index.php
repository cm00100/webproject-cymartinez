<?php 

include "oauthstuff/tweetoauth.php";

$consumer_key = "9gTw0WOKueMOeMeGwg5v6KyGN";
$consumer_secret = "2JrEdjC6MkI7hD3LziUWlMnMVAOwFhQokaauKQtAYT2BF3LWMf";
$access_token = "905959971908608000-i5HNoiDVVHwCv084boJNb2XpBKC6DSk";
$access_token_secret = "cL2Z90SdaeFWOOyfO5J5lA04Q370Fe0CvMVns4L5M3hsa";

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