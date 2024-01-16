<?php require 'header.php'; ?>
<?php require 'db_connect.php'; ?>
<?php
$pdo=new PDO($connect,USER,PASS);
foreach ($pdo->query('select * from stationery_data') as $row){
    $sql=$pdo->prepare('insert into stationery_data values(?, ?, ?)');
    if (empty($_POST['stationery_id']),($_POST['stationery_mei']),($_POST['stationery_company'])) {
        echo '文房具ID,文房具名,販売会社を入力してください。';
    } else if($sql->execute
                    ($_POST['stationery_id'],$_POST['stationery_mei'], $_POST['stationery_company'])) {
        echo '追加に成功しました。';
    } else {
        echo '追加に失敗しました。';
    }
}
?>
<a href="home.php">ホームに戻る</a>
<?php require 'footer.php'; ?>