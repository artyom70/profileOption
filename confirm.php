<?php
	include('config.php');
	$id = $_GET['id'];
		$query = 'SELECT * FROM users WHERE id=' . $id . ' LIMIT 1';
		$result = mysql_query($query);
		$row = mysql_fetch_assoc($result);
?>
<div style="width: 400px;margin: 0px auto;">
	<h1>You want delete account?</h1>
	<form action="save.php" method="post">
		<input type="submit" name="yes" value="Yes" />
		<input type="submit" name="no" value="No" />
		<input type="hidden" name="userID" value="<?= $row['id'] ?>" />
	</form>
</div>
