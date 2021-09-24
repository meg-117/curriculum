<?php
    // index.php
    $x = 9.8;
    echo ceil($x);
    ?>

<br />
<br />

<?php
    // index.php
    $x = 9.8;
    echo floor($x);
    ?>

<br />
<br />

<?php
    // index.php
    $x = 9.8;
    echo round($x);
    ?>

<br />
<br />

<?php
    function circleArea($r) {
        $circle_area = $r * $r * pi();
        echo $circle_area; 
    }
    circleArea(5);
?>

<br />
<br />

<?php
    echo mt_rand(1, 1000);
?>

<br />
<br />

<?php
    $str = "disneyland";
    echo strpos($str, "a");
?>

<br />
<br />

<?php
    $str = "disneyland";
    echo substr($str, -7, 5);
?>

<br />
<br />

<?php
    $str = "disneyland";
    echo str_replace("land", "LanD", $str);
?>

<br />
<br />

<?php
    $name = "mikey";
    $limit_hour = 16;
    $limit_minute = 30;
    $limit_second = 9;
    printf("%sは%02d時間%02d分%02d秒後に登場します。", $name, $limit_hour, $limit_minute,$limit_second);
?>

<br />
<br />

<?php
    $name = "minnie";
    $limit_day = 3;
    $limit_hour = 10;
    $limit_minute = 24;
    printf("%sは%2d日と%02d時間%02d分後に誕生日を迎えます。", $name, $limit_day, $limit_hour, $limit_minute);
?>