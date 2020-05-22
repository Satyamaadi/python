<?php 
	$t = $_POST['task'];
	$d = $_POST['dead'];
	$conn = new mysqli("root","shikhar","");
	if($conn->connect_error)
		{
		die("Connection error".$conn->connect_error);
		}
	else
		{
		$stmt = $conn->prepare("INSERT INTO todo (title,dead) VALUES (?,?)");
		$stmt->bind_param("ss",$t,$d);	
		$stmt->execute();
		}   		
$conn->close();
?>	
<html>
<head><title>TODO ADD</title></head>
<body>
<div class="heading">
		<h2 style="font-style: 'Hervetica';">ToDo List Application</h2>
	</div>
	<form method="post" action="info.php" class="input_form">
		<input type="text" name="task" class="task_input">
		<input type="text" name="dead" class="task_date">
 		<button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
		<input type="reset" value="Reset">
	</form>
</body>
</html>

