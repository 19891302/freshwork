<?php
$page->template = false;
$cache_expire = 60*60*24*365;
header("Pragma: public");
header("Cache-Control: max-age=".$cache_expire);
header('Expires: ' . gmdate('D, d M Y H:i:s', time()+$cache_expire) . ' GMT');
$conf = Conf::readAll();
?>
<script src="//connect.facebook.net/<?php echo $conf["FB.LANG"]; ?>/all.js"></script>