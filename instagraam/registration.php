<?php

$name = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);


//2. DB接続します
try {
  //ID:'root', Password: 'root' ここはてデータベース名
  $pdo = new PDO('mysql:dbname=gs_db; charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}
//３．データ登録SQL作成
// 1. SQL文を用意　ここはファイル名
$stmt = $pdo->prepare('INSERT INTO
                        customer(id,username,email,password) 
                        VALUES(NULL,:username,:email,:password)');
                        //:はフォームからSQL分が送られてきたときに無効化するため
//  2. バインド変数を用意
$stmt->bindValue(':username', $name, PDO::PARAM_STR); //  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':email',$email, PDO::PARAM_STR);  
$stmt->bindValue(':password', $password, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)

//  3. 実行
$status = $stmt->execute();


if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("ErrorMessage:". print_r($error, true));
}else{
  
  echo 会員登録が完了しました;
  header('location:newlogin.php');
  
}

?>