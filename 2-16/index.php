<?php
    $testFile = "test.txt";
    $contents = "2021.09.24！";
    
    if (is_writable($testFile)) {
        $fp = fopen($testFile, "a");
        fwrite($fp, $contents);
        fclose($fp);
        echo "finish writing!!";
    } else {
        echo "not writable!";
        exit;
    }
?>

<br />

<?php
    $test_file = "test2.txt";
    
    if (is_readable($test_file)) {
        $fp = fopen($test_file, "r");
        while ($line = fgets($fp)) {
            echo $line.'<br>';
        }
        fclose($fp);
    } else {
        echo "not readable!";
        exit;
    }
?>
