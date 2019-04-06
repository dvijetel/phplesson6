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
<br>______________task1____________<br>
<?php
if (!empty($_GET["login"])) {
    if (strlen($_GET["login"])<3) {
        echo "Длина должна быть не менее 3 символов";
    } else {echo "Ваш логин-".$_GET["login"]."<br>";};
}
else {echo "Введите логин";}
?>
<!--<br>______________task3____________<br>-->
<?php
//$login=$_GET["login"];
//$pass=$_GET["password"];
//$email=$_GET["email"];
//
//
//if (!empty($login) && !empty($pass) && !empty($pass)) {
//    if ((strlen($login)<3) or (strlen($login)>18)) {
//        echo "Длина логина должна быть не менее 3 и не более 18 символов";
//    } else {echo "Ваш логин-".$login."<br>";
//      echo "Ваш пароль".$pass."<br>";
//      echo "Ваш e-mail".$email."<br>";}
//}
//else {echo "Заполните все  поля";}
//?>










</body>
</html>