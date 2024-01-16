<?php require 'header.php'; ?>
<h3>文房具情報管理　　　新規登録画面</h3>
    <hr>
<p>文房具の情報を追加します。</p>
<form action="toroku-output.php" method="post">
    文房具ID <input type="text" name="stationery_id"></p>
    文房具名 <input type="text" name="stationery_mei"></p>
    販売会社 <input type="text" name="stationery_company"></p>
    <input type="submit" value="追加">
    <a href="home.php">ホームに戻る</a>
</form>
<?php require 'footer.php'; ?>