<?php

header("Content-type: text/html; charset=utf-8");

$db = mysqli_connect('localhost','root','','task') or die(mysqli_connect_error());
mysqli_set_charset($db,'utf8');
  $id = $_POST['id'];
  //echo $_POST['id'];
 mysqli_query($db,'DELETE FROM task WHERE task_id =' .$id) or die(mysqli_connect_error());
?>
 <script>

     location.href = "practice.php";

 </script>
