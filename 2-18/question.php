<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
//POST送信で送られてきた名前を受け取って変数を作成
    $my_name = $_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
    $number = array('80', '22', '20', '21');
    $language =array('PHP','Python','JAVA','HTML');
    $command =array('join','select','insert','update');
//② ①で作成した、配列から正解の選択肢の変数を作成してください

?>  

<p>お疲れ様です <?php echo $my_name; ?> さん</p>
<!--フォームの作成 通信はPOST通信で-->
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->

<form action="answer.php" method="post">
<?php
foreach ($number as $value) {?>
<input type="radio" name="number_kotae" value="<?php echo $value; ?>"/>
<?php echo $value;
}
?>
<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
foreach ($language as $value) {?>
<input type="radio" name="language_kotae" value="<?php echo $value; ?>"/>
<?php echo $value;
}
?>
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
foreach ($command as $value) {?>
<input type="radio" name="command_kotae" value="<?php echo $value; ?>"/>
<?php echo $value;
}
?>
<br />
<br />


<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<?php
$answer_number = "80";
$answer_language = "HTML";
$answer_command = "select";
?>

<input type="hidden" name="my_name" value="<?php echo $my_name; ?>"/>
<input type="hidden" name="answer_number" value ="<?php echo $answer_number; ?>"/>
<input type="hidden" name="answer_language" value ="<?php echo $answer_language; ?>"/>
<input type="hidden" name="answer_command" value ="<?php echo $answer_command; ?>"/>

<input type="submit" value="回答する" />
</form>

</body>

</html>