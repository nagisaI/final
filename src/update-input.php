<?php require 'header.php'; ?>
<?php require 'db_connect.php'; ?>
<div class="th0">文房具ID</div>
<div class="th1">文房具名</div>
<div class="th2">販売会社</div>
<?php require 'db_connect.php'; ?>
<?php
    $pdo=new PDO($connect,USER,PASS);
    foreach ($pdo->query('select * from stationery_data') as $row) {
    echo '<form action="update-output.php" method="post">';
    echo '<input type="hidden" name="stationery_id" value="', $row['stationery_id'], '">';
    echo '<div class="td0">', $row['stationery_id'], '</div>';
    echo '<div class="td1">';
    echo '<input type="text" name="stationery_mei" value="', $row['stationery_mei'], '">';
    echo '</div>';
    echo '<div class="td1">';
    echo '<input type="text" name="stationery_company" value="', $row['stationery_company'], '">';
    echo '<div class="td2">', $row['stationery_id'], '</div>';
    echo '</div>';
    echo '<div class="td2"><input type="submit" value="更新"></div>';
    echo '</form>';
    echo "\n";
}
?>
    <a href="home.php">ホームに戻る</a>
<?php require 'footer.php'; ?>