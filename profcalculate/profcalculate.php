<?php
	function jwp($a,$b,$c){
		switch($c){
			case '+':
			return $a+$b;
			break;
			case '-':
			return $a-$b;
			break;
			case '*':
			return $a*$b;
			break;
			case '/':
			return $a/$b;
			break;			
		}
	} 
	$link = mysqli_connect('localhost','root','123456','daliyah');
	if(isset($_POST['submit'])){
		$nom1 = $_POST['nom1'];
		$nom2 = $_POST['nom2'];
		$operation = $_POST['operation'];
		$catatan = $_POST['catatan'];
		$result = jwp($nom1,$nom2,$operation);
		$sql = "INSERT INTO calculator VALUES(NULL,'$nom1','$nom2','$operation','$result','$catatan')";
		if($result = mysqli_query($link,$sql)){
			echo "<script>alert('insert data successfully.');</script>";
		}
	}


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 </head>
 <style type="text/css">
	.a{
	 color:#FFF;
 }
 a:link, a:visited {
    background-color: gray;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: lightblue;
}

 </style>
 <center><body>
 <body bgcolor="#222">
<table width="100%" border="0">

<tr> 
 	<td width="50"><p align="center" ><img src="https://cdn.dribbble.com/users/470545/screenshots/3471475/calculater.gif" width="137" height="117"/></p>
 		<p align="center" class="a" >Prof .Calculate</p>
		<center><a href="papardata.php">JAWAPAN </a></center>
	</td>


	
<td width="50%" align="left">
 		<form method="post" action= "<?php echo $_SERVER['PHP_SELF'] ?>">
		
		<style>
		
		.a {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 36px;
}

		.b {
	color: #FFF;
}
	  input[type=number], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

	  input[type=text]{
    width: 100%;
    padding: 50px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
	  
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	align:right;
}

input[type=submit]:hover {
    background-color: lightblue;
}
		
		</style>
		
		<table>
		<tr>
		<td align="left" nowrap="nowrap"  class="b"> Nombor 1        :</td>
        <td width="100%"><input type="number" name="nom1" size="20" /></td>
        </tr>
	 
	    <tr>
        <td align="left" nowrap="nowrap" class="b"> Nombor 2		:</td>
        <td width="100%"><input type="number" name="nom2" size="20" /></td>
        </tr>
 		
		<tr>
        <td align="left" nowrap="nowrap" class="b"> Pilih Operasi   :</td>
        <td width="100%"><select name="operation">
          <option value="">Sila Pilih</option>
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="*">x</option>
          <option value="/">/</option>
          <option value="%">%</option>
        </select></td>
        </tr>
 	
	    <tr>
        <td align="left" nowrap="nowrap" class="b"> Catatan          :</td>
        <td width="100%"><input type="text" name="catatan" /></td>
        </tr>
		</table>
		
	  <table width="100%" border="0">
        <tr>
          <td><center><input type="submit" name="submit"></center></td>
        </tr>
      </table>
 		
 	</form>
 	
 	
 </body>
 </center>
 </html>