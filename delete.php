<?php


include 'config.php';




$id = $_GET['id'];


$query = "DELETE FROM sinhvien WHERE id = $id";

if (mysqli_query($db, $query)) {
	header ('Location: index.php');
} else {
	echo 'Error';
}