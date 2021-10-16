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

</body>
</html>

<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];
$number = $_POST['number'];
$answer = $_POST['answer'];
$language = $_POST['language'];
$command = $_POST['command'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

?>
<p><!--POST通信で送られてきた名前を表示--><?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
function check($check,$answer){
	if($check == $answer){
		echo "正解！";
	}else{
		echo "不正解･･･";
	}
}

check ($number,$answer);

?>

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
check ($language,$answer);
?>

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
check ($command,$answer);
?>
