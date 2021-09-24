<?php
$members = ["Mickey", "Minnei", "Donald", "Goofy", "Daisy","Pluto","Winnie The Pooh"];
echo count($members);
?>

<br />
<br />

<?php
sort($members);
var_dump($members);
?>

<br />
<br />

<?php
var_dump(in_array("Goofy", $members));
?>

<br />
<br />

<?php
if (in_array("Donald", $members)) {
    echo "ドナルドがいるよ！";
} else {
    echo "ドナルドはいないよ！";
}
?>

<br />
<br />

<?php
$atstr = implode("@", $members);
var_dump($atstr);
?>

<br />
<br />

<?php
$re_members = explode("@", $atstr);
var_dump($re_members);
?>

<br />
<br />

<?php
$str = "1,2,3,4,5,6,7";
$array = explode(",",$str);
var_dump($array);
?>
