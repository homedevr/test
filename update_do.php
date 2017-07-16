<?php

header("Content-type: text/html; charset=utf-8");

$db = mysqli_connect('localhost','root','','task') or die(mysqli_connect_error());
mysqli_set_charset($db,'utf8');
  $id = $_POST['id'];
  $name = $_POST['name'];
  $content = $_POST['content'];
  $dead_line = $_POST['dead_line'];
  $status = $_POST['status'];
  $member = $_POST['member'];
  $team = $_POST['team'];
  mysqli_query($db,"UPDATE task SET name=' $name ' ,content='$content',dead_line='$dead_line',status='$status',member='$member',team='$team' WHERE task_id='$id' ")
  or die(mysqli_connect_error());
?>



  <script>

     location.href = "practice.php";

 </script>
