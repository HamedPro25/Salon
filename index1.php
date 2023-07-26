<?php
    $temp = $_POST['temp'];
    $hum = $_POST['hum'];
    $def = $_POST['def'];
    $co = $_POST['co'];
    $pipe = $_POST['pipe'];
    $vent = $_POST['vent'];

    $data = $temp ."\n" .$hum ."\n" .$def ."\n" .$co ."\n" .$pipe ."\n" .$pipe ."\n" .$vent ."\n";

    $file = fopen("Air.txt", "w");
    fwrite($file, $data);
    fclose($file);

    echo "Content saved to file successfully.";
    header("Location:index2.html");
    exit();
?>