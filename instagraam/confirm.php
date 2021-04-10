<?php
require_once('funcs.php');
session_start();
unset($_SESSION['customer']);

$email = $_POST['email'];
$password = $_POST['password'];

try {
  //ID:'root', Password: 'root' ここはてデータベース名
  $pdo = new PDO('mysql:dbname=gs_db; charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());

}

$stmt = $pdo->prepare('SELECT * FROM
                        customer WHERE email="'.$email.'"');


$result = $stmt->fetch(PDO::FETCH_ASSOC);
$status = $stmt->execute();




if ($status == false) {
    $error = $stmt->errorInfo();
    exit('ErrorQuery:' . print_r($error, true));
}else{
       $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $hash = h($result['password']);
if (password_verify($password,$hash)) {
// echo '正しい！';
foreach($stmt as $row) {
    $_SESSION['customer']=[
    'id'=>$row['id'],'username'=>$row['username'], 
    'email'=>$row['email'],'password'=>$row['password']
    ];
 

 header('location:index.php');
}
} else {
echo '違う';
    }
    } 


// foreach($stmt as $row) {
//     $_SESSION['customer']=[
//     'id'=>$row['id'],'username'=>$row['username'], 
//     'email'=>$row['email'],'password'=>$row['password']
//     ];
// }

// if(isset($_SESSION['customer'])){
//     echo 'ログインに成功しました';
// }else{
//     echo'ユーザー名またはパスワードが違います。';
// }