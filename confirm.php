<?php
    //フォームのボタンが押されたら
        $name = isset($_POST["name"])? $_POST["name"] : "";
        $furigana = isset($_POST["furigana"])? $_POST["furigana"] : "";
        $sex = isset($_POST["sex"])? $_POST["sex"] : "";
        $email = isset($_POST["email"])? $_POST["email"] : "";
        $tel = isset($_POST["tel"])? $_POST["tel"] : "";
        $item = isset($_POST["item"])? $_POST["item"] : "";
        $content  = isset($_POST["content"])? $_POST["content"] : "";

    //送信ボタンが押されたら
    if(isset($_POST["submit"])){
        //送信ボタンが押されたときに動作する処理を記述する

        //日本語をメールで送る場合のおまじない
        mb_language("ja");
        mb_internal_encoding("UTF-8");

        //mb_send_mail("jitianjingping@gmail.com","メール送信テスト","メール本文")

        //件名を変数subjectに格納
        $subject =  "［自動送信］お問い合わせ内容の確認";

        //メール本文を変数bodyに格納
        $body = <<< EOM
        {$name} 様

        お問合せ頂きありがとうございます。
        以下のお問い合わせ内容をメールにて確認させていただきました。

        ==================================================

        【お名前】
        {$name}

        【ふりがな】
        {$furigana}

        【 メール 】
        {$email}

        【 電話番号 】
        {$tel}

        【 性別 】
        {$sex}

        【 項目 】
        {$item}

        【 内容 】
        {$content}
        ==================================================

        内容を確認の上、回答させて頂きます。
        しばらくお待ちください。
        EOM;

            // 送信元のメールアドレスを変数fromEmailに格納
            $fromEmail = "jitianjingping@gmail.com";

            // 送信元の名前を変数fromNameに格納
            $fromName = "お問い合わせテスト";

            // ヘッダ情報を変数headerに格納する
            $header = "From: " .mb_encode_mimeheader($fromName) ."<{$fromEmail}>";

            // メール送信を行う
            mb_send_mail($email, $subject, $body, $header);

            // サンクスページに画面遷移させる
            header("Location: http://www.kyoheiportfolio.work/thanks.php");
            exit;
        }
?>

<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>お問い合わせフォーム</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    </head>
    <body>
    <div id="contact-container">
            <div id="header">
                <div class="header-inner">
                    <h1 class="header-sitetitle"><a href="index.html">Kyohei's Portfolio</a></h1>
                    <div class="openbtn1"><span></span><span></span><span></span></div>
                    <nav id="header-nav">
                        <div id="header-nav-list">
                        <ul>
                            <li class="nav-item"><a href="index.html">Top</a></li>
                            <li class="nav-item"><a href="about.html">About</a></li>
                            <li class="nav-item"><a href="work.html">Work</a></li>
                            <li class="nav-item"><a href="contact.php">Contact</a></li>
                        </ul>
                        </div>
                    </nav>
                </div>
            </div>
        <div>
            <form action="thanks.php" method="post">
                <input type="hidden" name="name" value="<?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?>">
                <input type="hidden" name="furigana" value="<?php echo htmlspecialchars($furigana,ENT_QUOTES,"UTF-8"); ?>">
                <input type="hidden" name="sex" value="<?php echo htmlspecialchars($sex,ENT_QUOTES,"UTF-8"); ?>">
                <input type="hidden" name="email" value="<?php echo htmlspecialchars($email,ENT_QUOTES,"UTF-8"); ?>">
                <input type="hidden" name="tel" value="<?php echo htmlspecialchars($tel,ENT_QUOTES,"UTF-8"); ?>">
                <input type="hidden" name="item" value="<?php echo htmlspecialchars($item,ENT_QUOTES,"UTF-8"); ?>">
                <input type="hidden" name="content" value="<?php echo htmlspecialchars($content,ENT_QUOTES,"UTF-8"); ?>">
                <h1 class="contact-title">お問い合わせ 内容確認</h1>
                <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
            <div>
                <div>
                    <label>お名前</label>
                    <p><?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?></p>
                </div>
                <div>
                    <label>ふりがな</label>
                    <p><?php echo htmlspecialchars($furigana,ENT_QUOTES,"UTF-8"); ?></p>
                </div>
                <div>
                    <label>性別</label>
                    <p><?php echo htmlspecialchars($sex,ENT_QUOTES,"UTF-8"); ?></p>
                </div>
                <div>
                    <label>メール</label>
                    <p><?php echo htmlspecialchars($email,ENT_QUOTES,"UTF-8"); ?></p>
                </div>
                <div>
                    <label>電話番号</label>
                    <p><?php echo htmlspecialchars($tel,ENT_QUOTES,"UTF-8"); ?></p>
                </div>
                <div>
                    <label>職業</label>
                    <p><?php echo htmlspecialchars($item,ENT_QUOTES,"UTF-8"); ?></p>
                </div>
                <div>
                    <label>お問い合わせ内容</label>
                    <p><?php echo htmlspecialchars($content,ENT_QUOTES,"UTF-8"); ?></p>
                </div>
            </div>
                <input type="button" value="内容を修正する" onclick="history.back()">
                    <button type="submit" name="submit">送信する</button>
            </form>
        </div>
        <div id="footer">
		        <p class="Copyright"><span> &copy; 2021 Kyohei Yoshida All Rights Reserved.</span>
                </p>
	        </div>
            <div id="page-top"><a href="#"></a></div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="js/navpanel.js"></script>
        <script src="js/scroll.js"></script>
        <script src="js/gototop.js"></script>
    </body>
</html>
