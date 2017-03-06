<?php
$_GET['domain'] = preg_replace("/[^A-z0-9\.-]/", "", $_GET['domain'])
?>
<pre>
<b>Domain IP:</b>
Local DNS: <a href="ip.php?domain=<?php system("dig +short " . escapeshellarg($_GET['domain'])); ?>"><?php system("dig +short " . escapeshellarg($_GET['domain'])); ?></a>
Google DNS: <?php system("dig @8.8.8.8 +short " . escapeshellarg($_GET['domain'])); ?>
OpenDNS: <?php system("dig @resolver1.opendns.com +short " . escapeshellarg($_GET['domain'])); ?>


<b>WWW IP</b>
<?php system("dig +short www." . escapeshellarg($_GET['domain'])); ?>

<b>Mobile IP</b>
<?php system("dig +short m." . escapeshellarg($_GET['domain'])); ?>

<b>TXT IP</b>
<?php system("dig TXT +short " . escapeshellarg($_GET['domain'])); ?>

<b>Mail Server</b>
<?php system("dig MX +short " . escapeshellarg($_GET['domain'])); ?>

<b>Name Server</b>
<?php system("dig NS +short " . escapeshellarg($_GET['domain'])); ?>

<b>WHOIS:</b><br>
<?php system("whois " . escapeshellarg($_GET['domain'])); ?>

<BR>
<b>DIG ANY:</b><br>
<?php system("dig ANY " . escapeshellarg($_GET['domain'])); ?>
</pre>
