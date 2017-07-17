<html>
<body>
  <h1>編集</h1>
  <form action="update_do.php" method="post">
  <input type="hidden" name="id" value=" <?php print($_POST['task_id']);?>">
  タスクの名前：<input type="text" name="name" value="<?php print($_POST['name']);?>"><br>
  タスクの内容：<input type="text" name="content" value="<?php print($_POST['content']);?>"><br>
  タスクの期日：<input type="text" name="dead_line" value="<?php print($_POST['dead_line']);?>"><br>
  タスクのステータス：<input type="text" name="status" value="<?php print($_POST['status']);?>"><br>
  タスクの担当：<input type="text" name="member" value="<?php print($_POST['member']);?>"><br>
  タスクの所属：<input type="text" name="team" value="<?php print($_POST['team']);?>"><br>
  <input type="submit" value="編集完了">
  </form>
  <a href="practice.php">戻る</a>
</body>
</html>
