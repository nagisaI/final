<?php require 'header.php'; ?>
<?php require 'db_connect.php'; ?>
<table>
<tr><th>文房具ID</th><th>文房具名</th><th>販売会社</th></tr>
<?php
    $pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8',
    'USER','PASS');
foreach ('pdo->query('select * from stationery_data') as $row') {
        echo '<p>';
        echo $row['stationery_id'];
        echo $row['stationery_mei'];
        echo $row['stationery_company'];
        echo '<p>';
    }
?>
</table>
<?php require 'footer.php'; ?>
