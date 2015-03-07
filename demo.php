<head><meta charset="UTF-8" /></head>

<?php
/*================== Custom Facebook Feed Standalone ===================

Author: Smash Balloon
Support Website: http://smashballoon.com/custom-facebook-feed/support
Version: 1.7.0
Copyright: Smash Balloon
License: Non-distributable, not for resale


FOLLOW THE 5 STEPS BELOW TO SET UP YOUR FEED.
For more detailed directions please visit the following link: http://smashballoon.com/custom-facebook-feed/docs/standalone/
*/
?>


<?php
// 1) Place the 'fbfeed' folder in the same directory as the file/page that you're displaying the Facebook feed in.
//    If you put the 'fbfeed' folder in a different location then update the '$fbfeed_path' variable below to point from your file to the 'fbfeed' folder. Eg. $fbfeed_path = 'plugins/fbfeed';

// 2) Copy and paste the following 2 lines below the closing </head> tag in the file where you want to display your feed.
?>

<?php $fbfeed_path = 'fbfeed';
include $fbfeed_path . '/fbfeed-settings.php'; ?>


<?php
// 3) Open the 'fbfeed/fbfeed-settings.php' file and enter your license key, Facebook Page ID and any customization settings you wish to use.

// 4) Copy and paste the fbFeed($settings) function below anywhere on your page to display your feed:
?>

<?php fbFeed($settings); ?>


<?php
// 5) Include jQuery and the Custom Facebook Feed JavaScript file below
?>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo $fbfeed_path ?>/core/js/cff.js"></script>