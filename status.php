<?php

header("Content-type: text/html; charset=utf-8");

$db = mysqli_connect('localhost','root','','task') or die(mysqli_connect_error());
mysqli_set_charset($db,'utf8');
  $status = $_POST['status_select_name'];
  $id = $_POST['id'];

    mysqli_query($db,"UPDATE task SET status=' $status ' WHERE task_id='$id' ")
     or die(mysqli_connect_error());

  //$id = $_GET['id'];
  //$status = $_POST['status'];
  // mysqli_query($db,"UPDATE task SET name=' $name ' ,content='$content',dead_line='$dead_line',status='$status',member='$member',team='$team' WHERE task_id='$id' ")
  // or die(mysqli_connect_error());
?>



  <script>

     location.href = "practice.php";

 </script>
