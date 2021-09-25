<?php
$dice = 0;
$sum = 0;

do {
$dice++;
$num = rand(1, 6);
printf("%d回目 = %d<br>", $dice, $num);
$sum += $num;
} 
while ($sum < 40);
printf("合計%d回でゴールしました。<br>", $dice);
?>

<br />

<?php
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