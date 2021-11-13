<?php  

session_start();

# check if the user is logged in
if (isset($_SESSION['username'])) {
	
	# database connection file
	include 'connect.php';

	# get the logged in user's username from SESSION
	$id = $_SESSION['userid'];

	$sql = "UPDATE users
	        SET last_seen = NOW() 
	        WHERE id = ?";
	$stmt = $con->prepare($sql);
	$stmt->execute([$id]);

}else {
	header("main-login.php");
	exit;
}
?>