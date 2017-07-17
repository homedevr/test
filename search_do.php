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
  <div class="container">
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
  $recordSet = mysqli_query($db,"SELECT * FROM task WHERE name LIKE '%".$name."%'
  AND content LIKE '%".$content."%' AND dead_line LIKE '%".$dead_line."%'
  AND status LIKE '%".$status."%' AND member LIKE '%".$member."%' AND team LIKE '%".$team."%'  ");
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
    <th>編集</th>
    <th>削除</th>
  </tr>
  </thead>
  <tbody>
  <?php while($data = mysqli_fetch_assoc($recordSet)){ ?>
  <tr>
    <td><?php print($data['name']); ?></td>
    <td><?php print($data['content']); ?></td>
    <td><?php print($data['dead_line']); ?></td>
    <td>
      <form action="status.php" method="post" id="status_form">
    <select id="status_select" name="status_select_name">
    <option value="#" selected><?php print($data['status']); ?></option>
    <option value="todo" >todo</option>
    <option value="doing" >doing</option>
    <option value="done">done</option>
    <option value="canceled">canceled</option>
    </select>
    <input type="hidden" name="id" value=" <?php print($data['task_id']);?> ">
    <input type="submit" value="変更" class="btn btn-primary">
    </form>
  </td>
    <td><?php print($data['member']); ?></td>
    <td><?php print($data['team']); ?></td>
    <td><form action="update.php" method="post">
    <input type="hidden" name="task_id" value="<?php print($data['task_id']);?>">
    <input type="hidden" name="name" value="<?php print($data['name']);?>">
    <input type="hidden" name="content" value="<?php print($data['content']);?>">
    <input type="hidden" name="dead_line" value="<?php print($data['dead_line']);?>">
    <input type="hidden" name="status" value="<?php print($data['status']);?>">
    <input type="hidden" name="member" value="<?php print($data['member']);?>">
    <input type="hidden" name="team" value="<?php print($data['team']);?>">
      <input type="submit" value="編集" class="btn btn-primary"></form>
    </td>
    <td><form action="delete.php" method="post">
    <input type="hidden" name="id" value=" <?php print($data['task_id']);?> ">
      <input type="submit" value="削除" onclick='return confirm("よろしいですか？");' class="btn btn-primary"></form>
    </td>
  </tr>
  <?php } ?>
  </tbody>
</table>
<a href="practice.php">トップへ</a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
