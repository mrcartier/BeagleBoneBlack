<?php

$result = 'nothing';

if (isset($_POST['set_off']))
{
$result = "turned off";
exec("/bin/echo 0 > /sys/class/leds/beaglebone:green:usr3/brightness");
}

if (isset($_POST['set_on']))
{
$result = "turned on";
exec("/bin/echo 1 > /sys/class/leds/beaglebone:green:usr3/brightness");
}
?>

<html>
<head>
<title>BBB WebIO Demo</title>
</head>
<body>
<h1>Simple WebIO Demo</h1>
<p>Click button below to turn LED3 on/off</p>

<?php if (isset($result)) { ?>
<h1> Action: <?php echo $result ?></h1>
<?php } ?>

<form action="" method="post">
<p><input type="hidden" name="set_on" value="yes"/><input type="submit" value="LED On"/></p></form>

<form action="" method="post">
<p><input type="hidden" name="set_off" value="yes"/><input type="submit" value="LED Off"/></p></form>
</body>

</html>
