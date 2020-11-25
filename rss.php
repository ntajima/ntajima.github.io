<?php
$url = "https://drx523.stg.cloud.clipkit.co/feeds/98039c90-e38f-4bb9-a788-c6110b532168.rss";
$xml = file_get_contents($url);
header("Content-type: application/xml; charset=UTF-8");
print $xml;
?>
