<?php require 'header.php'; ?>
<?php require 'db_connect.php'; ?>
<?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('delete from stationery_data where stationery_id=?');
if ($sql->execute([$_GET['id']])) {
    echo '削除に成功しました。';
} else {
    echo '削除に失敗しました。';
}
?>
<a href="home.php">ホームに戻る</a>
<?php require 'footer.php'; ?>