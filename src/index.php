<?php
require_once("../include/db_info.inc.php");
require_once("../include/my_func.inc.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta charset="UTF-8">
    <title>第一届第一届XXXXXXX程序设计大赛</title>


    <link rel="stylesheet" href="/bootstrap4/css/bootstrap.min.css">
    <script src="/bootstrap4/js/jquery-3.2.1.slim.min.js"></script>
    <script src="/bootstrap4/js/popper.min.js"></script>
    <script src="/bootstrap4/js/bootstrap.min.js"></script>


</head>

<body>


    <br>
    <br>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-10 " style="text-align: center">


                <p class="text-center h3" style="font-weight: bold">第一届第一届XXXXXXX程序设计大赛</p>
                <br>
                <img src="img/icpc_logo.png" alt="" style="max-width: 70%" class="align-items-center">
                <br>
                <br>
                <br>
                <p><strong>活动对象</strong>：河北农业大学海洋学院本科生</p>
                <p><strong>活动时间</strong>：2018年11月3日9:00-12:00</p>
                <p><strong>竞赛地点</strong>：综合楼四楼机房</p>
                <h4><strong>竞赛说明</strong></h4>
                <p style="text-align: start">
                    1.竞赛语言: C、C++、Java。<br>
                    2.竞赛中每人拥有一台计算机，竞赛命题7题，比赛时间为3个小时。每通过一个题目发一个气球。<br>
                    <strong>3.参赛队员可以携带诸如书、手册、程序清单等参考资料。</strong><br>
                    <strong>4.参赛队员不能携带任何可用计算机处理的软件或数据(不允许任何私人携带的U盘、磁盘或计算器)。</strong><br>
                    5.参赛队员不能使用任何类型的通讯工具，包括无线电接收器、移动电话。<br>
                    6.在竞赛中，参赛队员不得和指定工作人员以外的人交谈;系统支持人员可以回答和系统相关的问题，例如解释系统错误信息。<br>
                    7.当参赛队伍出现妨碍比赛正常进行的行为时，诸如擅自移动赛场中的设备，未经授权修改比赛软硬件，干扰他人比赛等，都将会被剥夺参赛资格。<br>
                </p>

                <h4><strong>排名规则</strong></h4>
                <p style="text-align: start">


                    按照解题题数多少进行排名，解题多的排名在前；若解题数目相同，在比较总用时，总用时少的排名在前。<br><br>
                    总用时为所有解出赛题所用时间总和；每道赛题的用时是从竞赛开始到该题捷达被判定为正确时的提交时间为止，期间每一次被判为错误的提交将被加罚20分钟时间，没有解出的赛题不计罚时<br>

                </p>
                <br>

                <p>当前报名人数: <strong><?php
                                    $sqlmatch = 'select user_id from match1103 ;';

                                    $rows = pdo_query($sqlmatch);
                                    echo count($rows);
                                    ?>人</strong></p>
                <br>
                <a type="submit" class="btn btn-warning btn-block btn-lg button" href="regpage.php">
                    <strong>进入报名</strong>
                </a>
                <br>
                <br>
                <br>
                <br>
                <br>

            </div>

        </div>


    </div>

    <footer></footer>

</body>

</html>