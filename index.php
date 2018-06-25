<?php

$name = getenv('NAME');
$hostname = gethostname();
$visits = 0;

?>

<h3>Hello <?= $name ?></h3>
<b>Hostname:</b> <?= $hostname ?><br />
<b>Visits:</b> <?= $visits ?><br />
