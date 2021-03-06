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
  <h1>編集</h1>
  <br>
  <form action="update_do.php" method="post">
  <input type="hidden" name="id" value=" <?php print($_POST['task_id']);?>">
  タスクの名前：<input type="text" name="name" value="<?php print($_POST['name']);?>"><br>
  タスクの内容：<input type="text" name="content" value="<?php print($_POST['content']);?>"><br>
  タスクの期日：<input type="text" name="dead_line" value="<?php print($_POST['dead_line']);?>"><br>
  タスクのステータス：<input type="text" name="status" value="<?php print($_POST['status']);?>"><br>
  タスクの担当：<input type="text" name="member" value="<?php print($_POST['member']);?>"><br>
  メンバーの所属：<input type="text" name="team" value="<?php print($_POST['team']);?>"><br>
  <br>
  <input type="submit" value="編集完了" class="btn btn-primary">
  </form>
  <br>
  <a href="practice.php">戻る</a>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
