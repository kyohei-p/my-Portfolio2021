<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kyohei's Portfolio</title>
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
            <div class="contact-main">
                <h2 class="contact-ttl">Contact</h2>
                <form action="confirm.php" method="post" name="form" onsubmit="return validate()">
                    <table class="contact-table">
                        <tr>
                            <th class="contact-item">名前</th>
                            <td class="contact-body">
                                <input type="text" name="name" placeholder="例）山田太郎" value="" class="form-text" />
                            </td>
                        </tr>
                        <tr>
                            <th class="contact-item">ふりがな
                            </th>
                            <td class="contact-body">
                                <input type="text" name="furigana"  placeholder="例）やまだたろう" value="" class="form-text" />
                            </td>
                        </tr>
                        <tr>
                            <th class="contact-item">性別</th>
                            <td class="contact-body">
                                <label class="contact-sex">
                                    <input type="radio" name="性別" />
                                    <span class="contact-sex-txt">男性</span>
                                </label>
                                <label class="contact-sex">
                                    <input type="radio" name="性別" />
                                    <span class="contact-sex-txt">女性</span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="contact-item">メール</th>
                            <td class="contact-body">
                                <input type="email"  name="email" placeholder="例）guest@example.com" value="" class="form-text" />
                            </td>
                        </tr>
                        <tr>
                            <th class="contact-item">電話</th>
                            <td class="contact-body">
                                <input type="tel" name="電話" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" placeholder="例）000-1111-2222" value="" class="form-text" />
                            </td>
                        </tr>
                        <tr>
                            <th class="contact-item">職業</th>
                            <td class="contact-body">
                                <select name="職業" class="form-select">
                                    <option>選択</option>
                                    <option>学生</option>
                                    <option>主婦</option>
                                    <option>会社員</option>
                                    <option>フリーランス</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th class="contact-item">お問い合わせ内容</th>
                            <td class="contact-body">
                                <textarea name="content" rows="5" placeholder="お問合せ内容を入力" class="form-textarea"></textarea>
                            </td>
                        </tr>
                    </table>
                    <input class="contact-submit" type="submit" value="確認画面へ" />
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