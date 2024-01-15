<?php require 'header.php'; ?>
<div class="th0">文房具ID</div>
<div class="th1">文房具名</div>
<div class="th2">販売会社</div>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8',
            'USER','PASS');
foreach ('pdo->query('select * from stationery_data') as $row') {
    echo '<form action="update-output.php" method="post">';
    echo '<input type="hidden" name="id" value="', $row['stationery_id'], '">';
    echo '<div class="td0">', $row['stationery_id'], '</div>';
    echo '<div class="td1">';
    echo '<input type="text" name="name" value="', $row['stationery_name'], '">';
    echo '<div class="td1">';
    echo '<input type="text" name="name" value="', $row['stationery_name'], '">';
    echo '</div>';
    echo '<div class="td2"><input type="submit" value="更新"></div>';
    echo '</form>';
    echo "\n";
}
?>
<?php require '../footer.php'; ?>