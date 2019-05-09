<?php

session_start();

if(empty($_SESSION['id_admin'])) {
 
  exit();
}

require_once("../db.php");

//if user Actually clicked Add Post Button
if(isset($_POST)) {

	// New way using prepared statements. This is safe from SQL INJECTION. Should consider to update to this method when many people are using this method.


	$stmt = $conn->prepare("INSERT INTO bookstock (id, name, writer, category, quantity) VALUES (?, ?, ?, ?, ?)");

	$stmt->bind_param("isssi", $_SESSION['id_admin'], $id, $name, $writer, $category, $quantity);

	
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$writer = mysqli_real_escape_string($conn, $_POST['writer']);
	$category = mysqli_real_escape_string($conn, $_POST['category']);
	$quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
	


	if($stmt->execute()) {
		//If data Inserted successfully then redirect to dashboard
		$_SESSION['addBookSuccess'] = true;
		header("Location: manager-page.php");
		exit();
	} else {
		//If data failed to insert then show that error. 
		echo "Error ";
	}

	$stmt->close();

	$conn->close();

} else {
	//redirect them back to dashboard page if they didn't click Add Post button
	header("Location: add.php");
	exit();
}