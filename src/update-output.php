<?php require 'header.php'; ?>
<?php require 'db_connect.php'; ?>
<?php
$pdo=new PDO($connect,USER,PASS);
$sql=$pdo->prepare('update stationery_data set stationery_mei=?, stationery_company=? where stationery_id=?');
if(empty($_POST['stationery_mei'])) {
    echo '文房具名を入力してください。';
}else if(empty($_POST['stationery_company'])){
    echo '文房具名を入力してください。';
}else if($sql->execute
            ([htmlspecialchars($_POST['stationery_mei']),$_POST['stationery_company'],$_POST['stationery_id']]))
    {
        echo '更新に成功しました。';
    } else {
        echo '更新に失敗しました。';
    }
?>
<a href="home.php">ホームに戻る</a>
<?php require 'footer.php'; ?>