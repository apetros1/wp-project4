<html>
<body>

Welcome <?php echo $_GET["email"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>
<?php
$user=$_GET["email"];
$pass=$_GET["password"];
 
$file = fopen("test.txt", "a");
 
fwrite($file, $user);
fwrite($file, $pass."\n");
fclose($file);
 
?>
</body>
</html>