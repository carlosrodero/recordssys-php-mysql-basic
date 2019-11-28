<?php
include 'db.inc.php';
$id = $_GET["id"];

$sql = "DELETE FROM tbl_records WHERE id = '$id'";
$conn->query($sql);
header("Location:../recordslist.php");