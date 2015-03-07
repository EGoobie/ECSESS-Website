<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Displaying A Custom Facebook Page Feed Using The Facebook PHP SDK</title>

    <meta name="description" content="In this lab, we take a look at using the Facebook PHP SDK to connect to a Facebook app, retrieve the graph data from a Facebook page, and output it in a neat, nice looking format." />

</head>



<body>
<div id="main">
    <div class="container">

<?php

function fetchUrl($url){

 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_TIMEOUT, 20);
 // You may need to add the line below
 // curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);

 $feedData = curl_exec($ch);
 curl_close($ch);

 return $feedData;

}

$profile_id = "618578424896289";

//App Info, needed for Auth
$app_id = "1458229197795058";
$app_secret = "c6e47cf110d990c3374e733797407283";

//Retrieve auth token
$authToken = fetchUrl("https://graph.facebook.com/oauth/access_token?grant_type=client_credentials&client_id={$app_id}&client_secret={$app_secret}");

$json_object = fetchUrl("https://graph.facebook.com/{$profile_id}/feed?{$authToken}");
//echo $json_object;
$pagefeed = json_decode($json_object);

/*foreach ( $feedarray->data as $feed_data )
{
    echo "<h2>{$feed_data->name}</h2><br />";
    echo "{$feed_data->message}<br /><br />";
}*/

/*echo "<div class=\"fb-feed\">";

// set counter to 0, because we only want to display 10 posts
$i = 0;
foreach($pagefeed['data'] as $post) {

    if ($post['type'] == 'status' || $post['type'] == 'link' || $post['type'] == 'photo') {

        // open up an fb-update div
        echo "<div class=\"fb-update\">";

            // post the time

            // check if post type is a status
            if ($post['type'] == 'status') {
                echo "<h2>Status updated on: " . date("jS M, Y", (strtotime($post['created_time']))) . "</h2>";
                echo "<p>" . $post['message'] . "</p>";
            }

            // check if post type is a link
            if ($post['type'] == 'link') {
                echo "<h2>Link posted on: " . date("jS M, Y", (strtotime($post['created_time']))) . "</h2>";
                echo "<p>" . $post['name'] . "</p>";
                echo "<p><a href=\"" . $post['link'] . "\" target=\"_blank\">" . $post['link'] . "</a></p>";
            }

            // check if post type is a photo
            if ($post['type'] == 'photo') {
                echo "<h2>Photo posted on: " . date("jS M, Y", (strtotime($post['created_time']))) . "</h2>";
                if (empty($post['story']) === false) {
                    echo "<p>" . $post['story'] . "</p>";
                } elseif (empty($post['message']) === false) {
                    echo "<p>" . $post['message'] . "</p>";
                }
                echo "<p><a href=\"" . $post['link'] . "\" target=\"_blank\">View photo &rarr;</a></p>";
            }

        echo "</div>"; // close fb-update div

        $i++; // add 1 to the counter if our condition for $post['type'] is met
    }

    //  break out of the loop if counter has reached 10
    if ($i == 10) {
        break;
    }
} // end the foreach statement

echo "</div>";
?>*/
  <?php foreach ( $pagefeed['data'] as $data ) : ?>
  <div class="message">
    <p><?php echo $data['message']; ?></p>
    <?php $images = @$data['attachment']['media']; ?>
    <?php if ( $images ) : ?>
      <?php foreach ( $images as $image ) : ?>
        <p><img src="<?php echo $image['photo']['images'][1]['src']; ?>" /></p>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
<?php endforeach; ?>
     </div>

</div>


<footer>
    <div class="container">
        <a href="http://www.callmenick.com/labs/styling-blockquotes-with-css-pseudo-classes">&larr; Back to the article</a>
    </div>
</footer>



</div>


</body>
</html>
<?php
ob_flush();
?>