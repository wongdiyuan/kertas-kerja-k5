<?php
include ('config.php');
$inusername=$_POST['username'];
$inpassword=$_POST['password'];
 
$call=mysql_query('select * from user');
while($row=mysql_fetch_array($call))
{
	$username=$row['username'];
	$password=$row['password'];
}

if ($inusername==$username && $password==$inpassword)
{
?>

<script type="text/javascript">
	alert ("Your Login Successful");
	window.location="profcalculate.php";
</script>

<?php
}

else if ($inusername=="" || $inpassword =="")
{
?>
<script type="text/javascript">
	alert ("Please Fill in your username and password");
	window.location="signin.php";
</script>

<?php
}

else if ($inusername!=$username || $password != $inpassword)
{
?>

<script type="text/javascript">
	alert ("The Username or Password is wrong");
	window.location="signin.php";
</script>

<?php
}
?>

