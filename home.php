<?php  
	ob_start();
	session_start();
	require_once 'db_connection.php';
	$res=mysqli_query($conn, "SELECT * FROM user WHERE user_id=".$_SESSION['user']);
	$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
	$sql = "SELECT * FROM car";
	$result = mysqli_query($conn, $sql);
	include_once 'header_navbar.php'
?>
<div id="hero">
	<div class="row">
			<div class="col-md-4 col-lg-4 col-4">
				<div class="box">
					<img src="img/audi.jpg">
					<h3><strong>Easy access!</strong></h3>
					<p>Easy access
A new and effective way of using and booking through our website </p>
				</div>
			</div>
			<div class="col-md-4 col-lg-4 col-4">
				<div class="box">
					<img src="img/bmw.jpg" id="special">
					<h3><strong>Easy registration!</strong></h3>
					<p>Register now to get a new models cars from our Company</p>
				</div>
			</div>
			<div class="col-md-4 col-lg-4 col-4">
				<div class="box">
					<img src="img/family.jpg">
					<h3><strong>Fun with the whole family!</strong></h3>
					<p>Share your friends the best moments with us </p>
				</div>
			</div>
		</div>
</div>
	<footer>
</footer>
</body>
</html>
<?php ob_end_flush(); ?>