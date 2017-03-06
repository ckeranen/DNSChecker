<?php
$_GET['domain'] = preg_replace("/[^A-z0-9\.]/", "", $_GET['domain'])
?>

<pre>
<?php system("ping -c 4 " . escapeshellarg($_GET['domain'])); ?>
</pre>
