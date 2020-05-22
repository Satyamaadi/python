<?php
$conn = new mysqli("root", "shikhar","");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
$sql = "SELECT title,dead from todo";
$result = $conn->query($sql);
}
?>
<html>
<head><title>View TODO's</head></title>
<body>
<table>
	<thead>
		<tr>
			<th>N</th>
			<th>Tasks</th>
			<th style="width: 60px;">Action</th>
		</tr>
	</thead>

	<tbody>
		<?php

		$i = 1; while ($result->num_rows>0) { ?>
			<tr>
				<td> <?php echo $i; ?> </td>
				<td class="task"> <?php echo $result['task']+"|"+$result['dead'] ?> </td>
				<td class="delete"> 
					<a href="index.php?del_task=<?php echo $result['id'] ?>">x</a> 
				</td>
			</tr>
		<?php $i++; } ?>	
	</tbody>
</table>
<?php $conn->close();?>
</body>
</html>
