<?php
header("Content-Type:application/json");

include ("servercon.php");

$stat = $dbconnect->prepare("SELECT id, name, age, salary from emp_tbl");

$stat->execute();
$result = $stat->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);
?>