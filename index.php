<?php
	include('config.php');
	
	$query = 'SELECT * FROM users';
	
	$result = mysql_query($query);
	
	$users = array();
	
	while($row = mysql_fetch_assoc($result)) {
		$users[] = $row;
	}
	
	foreach($users as $value) {
		
?>
	<div>
<?php
	echo '<span style="float:left;">' .  $value['firstName'] . ' ' . $value['lastName'] . '<br/>' . '</span>';
	
?>
	<a href="form.php?id=<?php echo $value['id'] ?>" style="float:left;margin-left: 10px;">Edit</a>
	<a href="confirm.php?id=<?php echo $value['id'] ?>" style="float: left; margin-left: 10px;">Delete</a>
	<div style="clear:both;"></div>
<?php
	}
?>

	<a href="form.php">Create user</a>