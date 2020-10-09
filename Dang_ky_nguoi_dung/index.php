<?php
include 'User.php';
include 'Data.php';
$user_list = Data::loadData();
?>
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
<form method="post">
    Username : <input type="text" name="username" placeholder="username"><br><br>
    Email : <input type="text" name="email" placeholder="email"><br><br>
    SDT : <input type="text" name="number" placeholder="so dien thoai"><br><br>
    <button type="submit">DANG KY</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $numberPhone = $_POST['number'];
    $user = new User($username,$email,$numberPhone);
    Data::saveData([$user]);
}
?>
<table border="1">
    <tr>
        <th>STT</th>
        <th>Username</th>
        <th>Email</th>
        <th>Number Phone</th>
    </tr>
    <?php foreach ($user_list as $key=>$value):?>
    <tr>
        <td><?php echo $key+1 ?></td>
        <td><?php echo $value["username"] ?></td>
        <td><?php echo $value["email"] ?></td>
        <td><?php echo $value["numberPhone"] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
