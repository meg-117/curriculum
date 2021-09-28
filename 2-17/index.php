<?php
$dice = 0;
$sum = 0;

while ($sum < 40){
$dice++;
$num = rand(1, 6);
echo $dice ."回目" .$num. "<br/>";
$sum += $num;
} 
echo "合計" .$dice ."回でゴールしました。";
?>

<br />
<br />

<?php
date_default_timezone_set ('Asia/Tokyo');
$time = intval(date('H'));
if (6 <= $time && $time <= 11) {
echo "今" .$time. "時台です";
echo "<br />";
echo "おはようございます";
} elseif (12 <= $time && $time <= 18) { 
echo "今" .$time. "時台です";
echo "<br />";
echo "こんにちわ";
} else { 
echo "今" .$time. "時台です";
echo "<br />";
echo "こんばんわ";
} 
?>