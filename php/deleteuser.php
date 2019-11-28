<?php
include 'db.inc.php';
$id = $_GET["id"];

$sql = "DELETE FROM tbl_accounts WHERE id = '$id'";
$conn->query($sql);
header("Location:../userslist.php");