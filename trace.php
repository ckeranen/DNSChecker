<?php
$_GET['domain'] = preg_replace("/[^A-z0-9\.]/", "", $_GET['domain'])
?>

<pre>
<?php system("traceroute -A " . escapeshellarg($_GET['domain'])); ?>
</pre>
