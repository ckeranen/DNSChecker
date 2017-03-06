<?php
$_GET['domain'] = preg_replace("/[^A-z0-9\.]/", "", $_GET['domain'])
?>

<pre>
<b>PTR:</b>
<?php system("dig +noall +answer -x  " . escapeshellarg($_GET['domain'])); ?>

<b>WHOIS:</b>
<?php system("whois " . escapeshellarg($_GET['domain'])); ?>
</pre>
