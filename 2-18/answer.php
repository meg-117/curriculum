<link rel="stylesheet" href="style.css">

<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];
$number =$_POST['number'];
$answer_number =$_POST['answer_number'];
$language =$_POST['language'];
$answer_language =$_POST['answer_language'];
$command =$_POST['command'];
$answer_command =$_POST['answer_command'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

?>
<p><!--POST通信で送られてきた名前を表示--><?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
if($number == $answer_number){
	echo "正解！";
}else{
	echo "不正解･･･";
}
?>

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
if($language == $answer_language){
	echo "正解！";
}else{
	echo "不正解･･･";
}
?>

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
if($command == $answer_command){
	echo "正解！";
}else{
	echo "不正解･･･";
}
?>