<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <?php

    mb_internal_encoding("UTF-8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
    $stmt = $pdo->query("select * from 4each_keijiban");

    ?>

    <img src="4eachblog_logo.jpg">

    <header>
        <ul class="menu">
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>

    <div class="left">
        <h1>プログラミングに役立つ掲示板</h1>

        <form method="post" action="insert.php">
            <h2>入力フォーム</h2>
            <div>
                <label>ハンドルネーム</label>
                <br>
                <input type="text" class="text" name="handlename" size="50">
            </div>

            <div>
                <label>タイトル</label>
                <br>
                <input type="text" class="text" name="title" size="50">
            </div>

            <div>
                <label>コメント</label>
                <br>
                <textarea name="comments" rows="8" cols="50"></textarea>
            </div>

            <div>
                <input type="submit"  class="submit" value="投稿する">
            </div>
        </form>

        <?php

        while($row = $stmt->fetch()){

            echo "<div class='box1'>";
            echo "<h3>".$row['title']."</h3>";
            echo "<div class='article'>";
            echo $row['comments'];
            echo "<div class='handlename'>posted by".$row['handlename']."</div>";
            echo "</div>";
            echo "</div>";
        }

        ?>
    </div>

    <div class="right">
        <h5>人気の記事</h5>
        <ul class="b">
            <li>PHPオススメ本</li>
            <li>PHP MyAdminの使い方</li>
            <li>今人気のエディタ Top5</li>
            <li>HTMLの基礎</li>
        </ul>

        <h5>オススメリンク</h5>
        <ul class="b">
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Eclipseのダウンロード</li>
            <li>Bracketsのダウンロード</li>
        </ul>

        <h5>カテゴリ</h5>
        <ul class="b">
            <li>HTML</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>JavaScript</li>
        </ul>
    </div>

    <footer>
        copyright © internous | 4each blog the which provides A to Z about programming.
    </foter>
    
</body>
</html>