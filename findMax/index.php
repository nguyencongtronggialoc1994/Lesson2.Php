<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    nhap phan tu con thu 1:<input type="text" name="first"><br><br>
    nhap phan tu con thu 2:<input type="text" name="second"><br><br>
    nhap phan tu con thu 3:<input type="text" name="third"><br><br>
    nhap phan tu con thu 4:<input type="text" name="four"><br><br>
    <button type="submit">them vao mang</button>
</form>
<?php
include 'function.findMax.php';
$arrNew = [];
$count = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x1 = $_POST["first"];
    $x2 = $_POST["second"];
    $x3 = $_POST["third"];
    $x4 = $_POST["four"];
//    global $count;
    array_push($arrNew, [$x1, $x2, $x3, $x4]);
    $count += 1;
    print_r($count);
    if ($count >= 2)
        echo findMax($arrNew);

}

?>

</body>
</html>