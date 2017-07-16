<?php

header("Content-type: text/html; charset=utf-8");

$db = mysqli_connect('localhost','root','','task') or die(mysqli_connect_error());
mysqli_set_charset($db,'utf8');
  $name = $_POST['name'];
  $content = $_POST['content'];
  $dead_line = $_POST['dead_line'];
  $status = $_POST['status'];
  $member = $_POST['member'];
  $team = $_POST['team'];
 mysqli_query($db,'INSERT INTO task (name,content,dead_line,status,member,team) VALUES("' .$name . '"," ' .$content . '"," ' .$dead_line . '"," ' .$status . '"," ' .$member . '"," ' .$team . '")')
 or die(mysqli_connect_error());
?>



 <script>

     location.href = "practice.php";

 </script>
