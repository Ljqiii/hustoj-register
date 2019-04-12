<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/25/18
 * Time: 4:45 PM
 */

require_once("../include/db_info.inc.php");
require_once("../include/my_func.inc.php");

$len;

$user_id = trim($_POST['user_id']);
$len = strlen($user_id);
$nick = trim($_POST['nick']);
$school = "";
$email = trim($_POST['email']);

$registered = trim($_POST['registered']);


$err_str = "";
$err_cnt = 0;

if ($len > 20) {
    $err_str = $err_str . "用户名不能大于20个字符!\\n";
    $err_cnt++;
} else if ($len < 3) {
    $err_str = $err_str . "用户名不能小于3个字符!\\n";
    $err_cnt++;
}


if (!is_valid_user_name($user_id)) {
    $err_str = $err_str . "用户名只能由字母数字和下划线组成!\\n";
    $err_cnt++;
}


$len = strlen($nick);
if ($len > 100) {
    $err_str = $err_str . "昵称太长!\\n";
    $err_cnt++;
} else if ($len == 0) $nick = $user_id;

if (strcmp($_POST['password'], $_POST['rptpassword']) != 0) {
    $err_str = $err_str . "密码不一致!\\n";
    $err_cnt++;
}
if (strlen($_POST['password']) < 6) {
    $err_cnt++;
    $err_str = $err_str . "密码应大于6字符!\\n";
}


$len = strlen($_POST['email']);
if ($len > 100) {
    $err_str = $err_str . "电子邮件太长!\\n";
    $err_cnt++;
}


if ($registered == 0) {

    $password = pwGen($_POST['password']);

    $sql = "SELECT `user_id` FROM `users` WHERE `users`.`user_id` = ?";
    $result = pdo_query($sql, $user_id);
    $rows_cnt = count($result);
    if ($rows_cnt == 1) {
        print "<script language='javascript'>\n";
        print "alert('用户名已经存在!\\n');\n";
        print "history.go(-1);\n</script>";
        exit(0);
    }


    if ($err_cnt > 0) {
        print "<script language='javascript'>\n";
        print "alert('";
        print $err_str;
        print "');\n history.go(-1);\n</script>";
        exit(0);
    }


}

$nick = (htmlentities($nick, ENT_QUOTES, "UTF-8"));
$email = (htmlentities($email, ENT_QUOTES, "UTF-8"));
$ip = ($_SERVER['REMOTE_ADDR']);

$sql = "INSERT INTO `users`("
    . "`user_id`,`email`,`ip`,`accesstime`,`password`,`reg_time`,`nick`,`school`,`defunct`)"
    . "VALUES(?,?,?,NOW(),?,NOW(),?,?,?)";
$rows = pdo_query($sql, $user_id, $email, $ip, $password, $nick, '', 'N');// or die("Insert Error!\n");


$xingming = trim($_POST['xingming']);
$zhuanye = trim($_POST['zhuanye']);

$xuehao = trim($_POST['xuehao']);
$xingbie = trim($_POST['xingbie']);
$shoujihao = trim($_POST['shoujihao']);


$xingming = htmlentities($xingming);
$zhuanye = htmlentities($zhuanye);
$xuehao = htmlentities($xuehao);
$xingbie = htmlentities($xingbie);
$shoujihao = htmlentities($shoujihao);


$sqlmatch = 'insert into match1103(user_id, xingming, zhuanye, xuehao, xingbie, shoujihao)values (?,?,?,?,?,?);';

$rows = pdo_query($sqlmatch, $user_id, $xingming, $zhuanye, $xuehao, $xingbie, $shoujihao);

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>报名成功</title>


    <link rel="stylesheet" href="/bootstrap4/css/bootstrap.min.css">
    <script src="/bootstrap4/js/jquery-3.2.1.slim.min.js"></script>
    <script src="/bootstrap4/js/popper.min.js"></script>
    <script src="/bootstrap4/js/bootstrap.min.js"></script>
</head>
<body>


<br>
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-7 col-sm-10" style="text-align: center">
            <img src="img/ok.png" alt="" style="width: 120px">
            <div></div>
            <br>
            <br>
            <h3>报名成功</h3>
            <p>UserID : <?php echo $user_id;?></p>
            <p>请在11-03到综合楼机房参加比赛</p>
            <p>您可以到 <a href="https://hustoj.ljqiii.xyz/">https://hustoj.ljqiii.xyz/</a>练习，熟悉比赛环境</p>
        </div>
    </div>
</div>




</body>
</html>
