<?php
if(mb_send_mail('｛jitianjingping@gmail.com｝', 'メール送信テスト：タイトル', 'メール送信テスト：本文')) {
    echo "送信完了";
} else {
    echo "送信失敗";
}
?>