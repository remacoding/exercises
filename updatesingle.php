<!-- Move this to crud -->

<?php
$title = "Update your info";
include "..layout/header.php";
$a = $_GET['id'];

$results = mysqli_query($conn, "Select * from studentinfo where id='$a' ");
$row = mysqli_fetch_array($results);
?>
<h2>Update your information below</h2>
<form  name="update" method="post" action=""></form>