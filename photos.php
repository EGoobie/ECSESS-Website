<?php

echo "<div class='col-lg-12'>";
    echo "<h1 class='page-header'>{$page_title}</h1>";
echo "</div>";

$fb_page_id = "618578424896289";

$json_link = "http://graph.facebook.com/{$fb_page_id}/albums?fields=id,name,description,link,cover_photo,count";
$json = file_get_contents($json_link);

$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

$album_count = count($obj['data']);

for($x=0; $x<$album_count; $x++){

    $id = $obj['data'][$x]['id'];
    $name = $obj['data'][$x]['name'];
    $description = $obj['data'][$x]['description'];
    $link = $obj['data'][$x]['link'];
    $cover_photo = $obj['data'][$x]['cover_photo'];
    $count = $obj['data'][$x]['count'];

    // if you want to exclude an album, just add the name on the if statement
    if(
        $name!="Profile Pictures" &&
        $name!="Cover Photos" &&
        $name!="Timeline Photos"
    ){

        $show_pictures_link = "photos.php?album_id={$id}&album_name={$name}";

        echo "<div class='col-md-4'>";
            echo "<a href='{$show_pictures_link}'>";
                echo "<img class='img-responsive' src='https://graph.facebook.com/{$cover_photo}/picture' alt=''>";
            echo "</a>";
            echo "<h3>";
                echo "<a href='{$show_pictures_link}'>{$name}</a>";
            echo "</h3>";

            $count_text="Photo";
            if($count>1){ $count_text="Photos"; }

            echo "<p>";
                echo "<div style='color:#888;'>{$count} {$count_text} / <a href='{$link}' target='_blank'>View on Facebook</a></div>";
                echo $description;
            echo "</p>";
        echo "</div>";
    }
}
?>