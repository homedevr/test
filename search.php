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
  <h1>検索</h1>
  <br>
  <form action="search_do.php" method="post">
  タスクの名前：<input type="text" name="name"><br>
  タスクの内容：<input type="text" name="content"><br>
  タスクの期日：<input type="text" name="dead_line"><br>
  タスクのステータス：<input type="text" name="status"><br>
  タスクの担当：<input type="text" name="member"><br>
  メンバーの所属：<input type="text" name="team"><br>
  <br>
  <input type="submit" value="検索" class="btn btn-primary">
  </form>
  <br>
  <a href="practice.php">戻る</a>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
