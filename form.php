<?php
	include('config.php');
	if(isset($_GET['id'])) {
		if((int)$_GET['id'] <= 0) {
			echo 'User not found';
			exit;
		}
	
		$id = $_GET['id'];
		$query = 'SELECT * FROM users WHERE id=' . $id . ' LIMIT 1';
		$result = mysql_query($query);
		$row = mysql_fetch_assoc($result);
		
		if(empty($row)) {
			echo 'User not found';
			exit;
		}
	}
?>
<form action="save.php" method="post">
	<input type="text" name="firstName" placeholder="firstName" value="<?= @$row['firstName'] ?>" /><br/>
	<input type="text" name="lastName" placeholder="lastName" value="<?= @$row['lastName'] ?>" /><br/>
	<input type="text" name="email" placeholder="Email" value="<?= @$row['email'] ?>" /><br/>
	<input type="password" name="password" placeholder="Password"  value="<?= @$row['password'] ?>"/><br/>
	Male
	<?php if(isset($row)) : ?>
		<input type="radio" name="gender" value="1" <?= ($row['gender'] == 1) ? 'checked' : '' ?> />
	<?php else : ?>
		<input type="radio" name="gender" value="1" checked />
	<?php endif; ?>
	Female
	<input type="radio" name="gender" value="2" <?= (isset($row) && $row['gender'] == 2) ? 'checked' : '' ?> /><br/><br/>
	<?php if(isset($row)) : ?>
	<input type="hidden" name="userID" value="<?= $row['id'] ?>" />
	<?php endif; ?>
	<input type="submit" value="save" />
	
	
</form>