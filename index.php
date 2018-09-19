<?php

$name = getenv('NAME');
$hostname = gethostname();
$visits = -1;

$redis = new Redis();
if ($redis->connect('redis', 6379, 2)) {
    $visits = $redis->incr('counter');
} else {
    $visits = 'Unknown (could not connect to Redis)';
}

$secret = file_get_contents('/run/secrets/shh');

?>

<h3>Hello <?= $name ?></h3>
<b>Hostname:</b> <?= $hostname ?><br />
<b>Visits:</b> <?= $visits ?><br />
<b>Secret:</b> <?= $secret ?><br />
