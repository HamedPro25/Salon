<?php
    $ph = $_POST['ph'];
    $ec = $_POST['ec'];
    $temp = $_POST['temp'];


    $data = $ph ."\n". $ec;

    $file = fopen("Soil.txt", "w");
    fwrite($file, $data);
    fclose($file);


    $cmd = escapeshellcmd("engine.py");
    $out = shell_exec($cmd);
    $file = fopen("res.txt", "w");
    fwrite($file, $data);
    fclose($file);


    echo "Content saved to file successfully.";
    header("Location:index3.php");
    exit();
?>