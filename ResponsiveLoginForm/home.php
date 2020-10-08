<?php
session_start();
if (!isset($_SESSION['username'])) {
	header('location:login.php');	
}
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<a class="float-right text-white" href="logout.php">Logout</a>
	<h1 class="mt-5 text-center text-capitalize text-white">Welcome <?php  echo $_SESSION['username']; ?></h1>
	</div>
</body>
</html>