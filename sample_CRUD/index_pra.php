<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP連線資料庫</title>
    <style>
        h1,h2,h3,h4{
            text-align: center;
        }
        table{
            border-collapse: collapse;
            border:3px solid blue;
            margin: auto;
        }
        table td{
            padding:0.5rem;
            border:1px solid #aaa;
        }
        table tr:nth-child(odd){
            background: lightgreen;
        }
        table tr:nth-child(even){
            background: lightcyan;
        }
        table tr:hover{
            background: lightcoral;
        }

    </style>
</head>
<body>
    <h1>php連線資料庫</h1>
    <?php
    $dsn="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dsn,'root','');
    
    //這樣是全部的資料都會出來
    $sql="SELECT * FROM `students`";

    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>
    <h3><button><a href="add.php">新增學生資料</a></button></h3>
    <h3><form action="add.php" method="get"><button>新增學生資料</button></form></h3>
    <h3><button onclick="location.href='add.php'">新增學生資料</button></h3>
    <table>
    <tr>
        <td>序號</td>
        <td>學號</td>
        <td>學生姓名</td>
        <td>科系</td>
        <td>父母</td>
        <td>畢業國中</td>
        <td>操作</td>
    </tr>
<?php
    foreach($rows as $key => $row){
        echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['uni_id']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['major']}</td>";
            echo "<td>{$row['parent']}</td>";
            echo "<td>{$row['secondary']}</td>";
            echo "<td>";
            echo "<button><a href='edit.php?id={$row['id']}'>編輯</a></button>";
            echo "<button><a href='del.php?id={$row['id']}'>刪除</a></button>";
            echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>