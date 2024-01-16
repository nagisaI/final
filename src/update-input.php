<?php require 'header.php'; ?>
<?php require 'db_connect.php'; ?>
<h3>文房具情報管理　　　更新画面</h3>
    <hr>
    <table>
        <tr><th>文房具ID</th><th>文房具名</th><th>販売会社</th></tr>
<?php
    $pdo=new PDO($connect,USER,PASS);
    foreach ($pdo->query('select * from stationery_data') as $row) {
    echo '<form action="update-output.php" method="post">';
    echo '<tr>';
    echo '<td>','<input type="text" name="stationery_id" value="', $row['stationery_id'],'">';
    echo '</td>';
    echo '<td>','<input type="text" name="stationery_mei" value="', $row['stationery_mei'],'">';
    echo '</td>';
    echo '<td>','<input type="text" name="stationery_company" value="', $row['stationery_company'],'">';
    echo '</td>';
    echo '<td>';
    echo '<input type="submit" value="更新">';
    echo '</td>';
    echo '</tr>';
    echo "\n";
}
?>
</table>
    <a href="home.php">ホームに戻る</a>
<?php require 'footer.php'; ?>