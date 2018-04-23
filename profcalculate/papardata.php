<?php
include("config.php");
?>

<style>
table,tr,th,td{
	border:1px solid red;
    }
tr:hover {background-color:#f5f5f5;}
	table{
		border-collapse:collapse;
	margin-bottom:20px;
	}

	
	</style>
	<br><table><tr>
	<th> Bil</th>
	<th>Nombor 1</th>
	<th>Operasi</th>
	<th>Nombor 2</th>
	<th>Jawapan</th>
    <th>Catatan</th>
	</tr>

<?php
include ('config.php');
$id=1;
$ambil=mysql_query("select*from calculator");
while($data=mysql_fetch_array($ambil))
{?>
<tr>
<td><?php echo $id++;?></td>
<td><?php echo $data['nom1'];?></td>
<td><?php echo $data['operation'];?></td>
<td><?php echo $data['nom2'];?></td>
<td><?php echo $data['result'];?></td>
<td><?php echo $data['catatan'];?></td>
<?php
}
?>
</table>
<a href="profcalculate.php" class="button">Kembali ke Calculator</a>
