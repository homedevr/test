<!DOCTYPE html>
<html lang="ja">
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>todoリスト</title>
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
   <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
 </head>
<body>
<h1>検索結果</h1>



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
  $recordSet = mysqli_query($db,"SELECT * FROM task WHERE name LIKE '%".$name."%'  ");
?>

  <table class="table table-striped">
  <thead>
  <tr>
    <th>タイトル</th>
    <th>内容</th>
    <th>期日</th>
    <th>ステータス</th>
    <th>担当</th>
    <th>所属</th>
  </tr>
  </thead>
  <tbody>
  <?php while($data = mysqli_fetch_assoc($recordSet)){ ?>
  <tr>
    <td><?php print($data['name']); ?></td>
    <td><?php print($data['content']); ?></td>
    <td><?php print($data['dead_line']); ?></td>
    <td><?php print($data['status']); ?></td>
    <td><?php print($data['member']); ?></td>
    <td><?php print($data['team']); ?></td>
  </tr>
  <?php } ?>
  </tbody>
</table>
<a href="practice.php">トップへ</a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
