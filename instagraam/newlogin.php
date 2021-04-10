<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>instagaam </title>
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
                <h1 class="navbar-header" >会員登録をする</h1>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="registration.php" enctype="multipart/form-data">
        <div class="jumbotron">
            <fieldset>
                <legend>instagaam</legend>
                <label>username：<input type="text" name="username"></label><br>
                <label>email：<input type="text" name="email"></label><br>
                <label>password</label><input type="password" name="password">
                <input type="submit" value=登録>
            </fieldset>
        </div>
        <div>
            <p><a class="" href="login.php">すでに会員の方はこちらへ</p>
        </div>
    </form>
    <!-- Main[End] -->


</body>

</html>
