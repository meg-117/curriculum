<link rel="stylesheet" href="style.css">

<?php
//POST送信で送られてきた名前を受け取って変数を作成
    $my_name = $_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
    $number = ['80', '22', '20', '21'];
    $language =['PHP','Python','JAVA','HTML'];
    $command =['join','select','insert','update'];
//② ①で作成した、配列から正解の選択肢の変数を作成してください

?>  

<p>お疲れ様です <?php echo $my_name; ?> さん</p>
<!--フォームの作成 通信はPOST通信で-->
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->

<form action="answer.php" method="post">
<?php
foreach ($number as $value) {?>
<input type="radio" name="number" value="'{$value}'" style="color:white;">
<?php echo $value;
}
?>
<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
foreach ($language as $value) {?>
<input type="radio" name="language" value="'{$value}'" style="color:white;">
<?php echo $value;
}
?>
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
foreach ($command as $value) {?>
<input type="radio" name="command" value="'{$value}'" style="color:white;">
<?php echo $value;
}
?>
<br />
<br />
<input type="submit" value="回答する" />

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<?php
$answer_number = "20";
$answer_language = "PHP";
$answer_command = "insert";
?>

<input type="hidden" name="my_name" value="<?php echo $my_name; ?>">
<input type="hidden" name="number" value ="<?php echo $number; ?>">
<input type="hidden" name="answer_number" value ="<?php echo $answer_number; ?>">
<input type="hidden" name="language" value ="<?php echo $language; ?>">
<input type="hidden" name="answer_language" value ="<?php echo $answer_language; ?>">
<input type="hidden" name="command" value ="<?php echo $command; ?>">
<input type="hidden" name="answer_command" value ="<?php echo $answer_command; ?>">

</form>