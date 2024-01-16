<?php require 'header.php'; ?>
<table>
<tr><th>文房具ID</th><th>文房具名</th><th>販売会社</th></tr>

<?php require 'db_connect.php'; ?>
<?php
    $pdo=new PDO($connect,USER,PASS);
foreach ($pdo->query('select * from stationery_data') as $row) {
        echo '<tr>';
        echo '<td>',$row['stationery_id'], '</td>';
        echo '<td>',$row['stationery_mei'],'</td>';
        echo '<td>',$row['stationery_company'],'</td>';
        echo '</tr>';
        echo "\n";
    }
?>
</table>
<a href="home.php">ホームに戻る</a>
<?php require 'footer.php'; ?>
