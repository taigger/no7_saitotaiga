<?php

session_start();

if(isset($_SESSION['customer'])) {
	unset($_SESSION['costomer']);
    echo 'ログアウトしました';
}else{
    echo 'すでにログアウトしています';
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" initial-scale=1.0 >
    <title>ログアウト</title>
</head>
<body>
    <p><a href="login.php">ログインはこちら</a></p>
    <p><a href="newlogin.php">新規ユーザー登録へ</a></p>
</body>
</html>