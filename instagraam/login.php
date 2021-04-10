<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav>
            <div class="container-fluid">
                <h1 class="navbar-header" >ログインをする</h1>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="confirm.php" enctype="multipart/form-data">
        <div class="jumbotron">
            <fieldset>
                <legend>ログイン</legend>
                <label>メールアドレス：<input type="text" name="email"></label><br>
                <label>password</label><input type="password" name="password">
                <input type="submit" value=ログイン>
            </fieldset>
        </div>
        <div>
            <p><a class="" href="newlogin.php" id="logout">まだ登録がお済みでない方はこちらへ</p>
        </div>
    </form>
    <!-- Main[End] -->


</body>

</html>