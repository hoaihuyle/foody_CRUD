<?php
require 'page-header.php';
require '../database.php';
$id = 0;
if ( !empty($_GET['id'])) {
	$id = $_REQUEST['id'];
}
if ( !empty($_POST)) {
	// keep track post values
	$id = $_POST['id'];
	
	// delete data
	$conn = Database::connect();
	$sql = "DELETE FROM users WHERE id=$id";
	$conn->query($sql);
	header("Location: user-control.php");
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
		<div class="span10 offset1">
			<div class="row">
    			<h3>Delete a Customer</h3>
    		</div>
    		
			<form class="form-horizontal" action="user-delete.php" method="post">
			  <input type="hidden" name="id" value="<?php echo $id;?>"/>
			  <p class="alert alert-error">Are you sure to delete ?</p>
			  <div class="form-actions">
				  <button type="submit" class="btn btn-danger">Yes</button>
				  <a class="btn" href="user-control.php">No</a>
				</div>
			</form>
		</div>
    </div> <!-- /container -->
  </body>
</html>