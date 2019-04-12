<?php
/**
 * Created by PhpStorm.
 * User: ljq
 * Date: 10/27/18
 * Time: 9:36 AM
 */


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap4/css/bootstrap.min.css">
    <script src="/bootstrap4/js/jquery-3.2.1.min.js"></script>
    <script src="/bootstrap4/js/popper.min.js"></script>
    <script src="/bootstrap4/js/bootstrap.min.js"></script>
</head>
<body>

<script>



    $.ajax({
        methord:"post",
        url: "test.php",
        data:{user_id:"admin"}

    }).done(function(msg) {
        console.log(msg)
    });
</script>

</body>
</html>
