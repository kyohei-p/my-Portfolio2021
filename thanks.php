<?php
   mb_language("japanese");
   mb_internal_encoding("UTF-8");

   $to = $_POST["email"];
   $subject = "任意の件名";
   $header = "From: 任意の送信元メールアドレス";
   $header .= "\n";
   $header .= "Bcc: 任意のBccメールアドレス";
   $message = "お問い合わせありがとうございます。"."\n".
   "以下の通りにお問い合わせ内容を受け付けました。"."\n"."\n".
   "お名前｜".$_POST["name"]."\n".
   "ふりがな｜".$_POST["furigana"]."\n".
   "性別｜".$_POST["sex"]."\n".
   "メール｜".$_POST["email"]."\n".
   "電話番号｜".$_POST["tel"]."\n".
   "職業｜".$_POST["item"]."\n".
   "お問い合わせ内容｜".$_POST["content"];

   mb_send_mail($to, $subject, $message, $header);
?>

<!DOCTYPE html>
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
            <div>
                <h1>お問い合わせ 送信完了</h1>
                <p>
                お問い合わせありがとうございました。<br>
                内容を確認のうえ、回答させて頂きます。<br>
                しばらくお待ちください。
                </p>
                <a href="contact.php">
                    <button type="button">お問い合わせに戻る</button>
                </a>
            </div>
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