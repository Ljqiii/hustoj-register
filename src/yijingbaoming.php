<?php
/**
 * Created by PhpStorm.
 * User: ljq
 * Date: 10/26/18
 * Time: 5:09 PM
 */


require_once("../include/db_info.inc.php");
require_once("../include/my_func.inc.php");


$sql = "select * from match1103;";
$rows = pdo_query($sql);



?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>已经报名</title>

    <link rel="stylesheet" href="/bootstrap4/css/bootstrap.min.css">
    <script src="/bootstrap4/js/jquery-3.2.1.slim.min.js"></script>
    <script src="/bootstrap4/js/popper.min.js"></script>
    <script src="/bootstrap4/js/bootstrap.min.js"></script>
</head>
<body>

</body>
</html>
<br>
<br>
<br>
<br>
<br>

<h1>已经报名</h1>
<br>
<br>
<br>

<table class="table">
    <thead>
    <tr>
        <th scope="col">User_id</th>
        <th scope="col">姓名</th>
        <th scope="col">专业</th>
        <th scope="col">学号</th>
        <th scope="col">性别</th>
        <th scope="col">手机号</th>
    </tr>
    </thead>


        <?php
        foreach ($rows as $i) {
            echo ' <tr><td>' . $i['user_id'] . '</td><td>' . $i["xingming"] .
                '</td><td>' . $i["zhuanye"] . '</td><td>' . $i["xuehao"] . '</td><td>'. $i["xingbie"] . '</td><td>' . $i["shoujihao"] . "</td> </tr>";
        }?>



</table>

