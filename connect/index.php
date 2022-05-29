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
    $dsn="mysql:host=localhost;charset=utf8;dbname=school2";
    $pdo=new PDO($dsn,'root',''); //php每一段結尾都有分號,只有如果是陣列或SQL語法斷行不須分號
    
    $sql="SELECT `students`.*,`dept`.`code`,`dept`.`name` as '科系' FROM `students`,`dept` WHERE `dept`.`id`=`students`.`dept`";

    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

/*     echo "<table>";
    for($i=0;$i<count($rows);$i=$i+1){
            $key=$i;
            $row=$rows[$i];
        echo "<tr>";
            echo "<td>這是索引值第{$key}的資料</td>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['school_num']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['科系']}</td>";
            echo "<td>{$row['parents']}</td>";
        echo "</tr>";
    }
    echo "</table>"; */
    echo "<table>";
    
    foreach($rows as $key => $row){
        echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['school_num']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['科系']}</td>";
            echo "<td>{$row['parents']}</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>