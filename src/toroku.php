<?php require 'header.php'; ?>
<?php require 'db_connect.php'; ?>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8',
            'USER','PASS');
$sql=$pdo->prepaer('insert into stationery_data values(null, ?, ?,)');
if (empty($_POST['stationery_id'])) {
    echo '文房具IDを入力してください。';
} else if(empty($_POST['stationery_id'])){
    echo '文房具名を入力してください。';
}
if($sql->execute($_POST['stationery_id'], $_POST['stationery_name'])) {
    echo '追加に成功しました。';
} else {
    echo '追加に失敗しました。';
}
?>
<?php require '../footer.php'; ?>