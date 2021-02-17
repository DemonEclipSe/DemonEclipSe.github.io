<?php

$url = $_POST['url'];

list($main, $api, $webhook, $id, $key) = explode("/", $url);

echo "Site: " . $main . "\nID: " . $id . "\nKey: " . $key;
?>
