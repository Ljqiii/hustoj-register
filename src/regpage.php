<?php
require_once("../include/db_info.inc.php");
require_once("../include/my_func.inc.php");
//echo pwGen("dsefasdf");
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>报名</title>


    <link rel="stylesheet" href="/bootstrap4/css/bootstrap.min.css">
    <script src="/bootstrap4/js/jquery-3.2.1.min.js"></script>
    <script src="/bootstrap4/js/popper.min.js"></script>
    <script src="/bootstrap4/js/bootstrap.min.js"></script>


</head>
<body>


<br>
<br>
<br>
<p class="text-center h3">第一届海洋学院程序设计大赛</p>

<p class="text-center">比赛时间11-03</p>
<p class="text-center">比赛网址：<a href="https://hustoj.ljqiii.xyz">https://hustoj.ljqiii.xyz</a></p>
<br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-5 col-sm-5" id="btn1">
            <br>

            <button type="button" class="btn btn-primary btn-lg btn-block" id="unregbtn">我没在此网址注册过账号</button>
            <br><br><br>
            <button type="button" class="btn btn-secondary btn-lg btn-block" id="regedbtn">我在此网址注册过账号</button>


        </div>
    </div>
</div>
<br>
<br>
<br>


<div class="container">
    <div class="row justify-content-center" id="unreg">
        <div class="col-lg-6 col-md-6 col-sm-10 ">

            <form action="reg.php" method="post">
                <input type="hidden" name="registered" value="0" id="isregistered">

                <div class="form-group" id="user_idinput" style="display: none">
                    <label for="user_id">登录用户名</label>
                    <input type="text" class="form-control" id="user_id" name="user_id"
                           placeholder="3-20位字母数字和下划线">
                    <div class="invalid-feedback" style="display: none" id="user_idinvalid">
                        用户名由3-20位字母数字和下划线组成
                    </div>
                    <div class="invalid-feedback" style="display: none" id="user_reged">
                        该用户已经报名
                    </div>
                    <div class="invalid-feedback" style="display: none" id="user_idnotexist">
                        不存在的用户，请检查或先 <a href="/registerpage.php">注册</a>
                    </div>
                </div>

                <div id="unregform" style="display: none">


                    <div class="form-group">
                        <label for="nick">昵称</label>
                        <input type="text" class="form-control" id="nick" name="nick">
                    </div>
                    <div class="form-group">
                        <label for="password">密码</label>
                        <input type="password" class="form-control" id="password" name="password"
                               placeholder="至少6字符">
                        <div class="invalid-feedback" style="display: none" id="passwordinvalid">
                            密码至少6字符.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="rptpassword">重复密码</label>
                        <input type="password" class="form-control" id="rptpassword" name="rptpassword"
                               placeholder="至少6字符">
                        <div class="invalid-feedback" style="display: none" id="rptpasswordinvalid">
                            密码不一致.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">电子邮件（选填）</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div style="height: 5px;"></div>
                    <hr>
                </div>


                <div id="regedform" style="display: none">
                    <div class="form-group">
                        <label for="xingming">姓名</label>
                        <input type="text" class="form-control" id="xingming" name="xingming">
                    </div>

                    <div class="form-group">
                        <label for="xhuanye">专业</label>

                        <select class="custom-select custom-select-lg mb-3" name="zhuanye">
                            <option selected value="未选择">选择专业</option>
                            <option value="海洋科学">海洋科学</option>
                            <option value="机电工程">机电工程</option>
                            <option value="环境科学">环境科学</option>
                            <option value="管理学">管理学</option>
                            <option value="水产科学">水产科学</option>
                            <option value="信息工程">信息工程</option>
                            <option value="英语">英语</option>
                        </select>


                    </div>

                    <div class="form-group">
                        <label for="xuehao">学号</label>
                        <input type="text" class="form-control" id="xuehao" name="xuehao">
                        <div class="invalid-feedback" style="display: none" id="xuehaoinvalid">
                            请输入正确的学号.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="xingbie">性别</label>

                        <select class="custom-select custom-select-lg mb-3" name="xingbie" id="xingbie">
                            <option selected value="0">选择性别</option>
                            <option value="男">男</option>
                            <option value="女">女</option>
                            <option value="其他">其他</option>
                        </select>

                    </div>


                    <div class="form-group">
                        <label for="shoujihao">手机号</label>
                        <input type="text" class="form-control" id="shoujihao" name="shoujihao">
                        <div class="invalid-feedback" style="display: none" id="shoujihaoinvalid">
                            请输入正确的手机号.
                        </div>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary btn-block " id="submitbtn" style="display: none"
                        disabled>提交
                </button>
                <br>
                <br>
                <br>

            </form>
        </div>

    </div>


</div>


<script>


    function testuser_id() {
        var ptn = /^[a-zA-Z0-9_]{3,}$/
        if (ptn.test($("#user_id").val()) && $("#user_id").val().length >= 3 && $("#user_id").val().length <= 20) {
            return true

        }
        else {
            return false
        }
    }


    function isuseridreged() {
        if (testuser_id()){

            if ($("#isregistered").val() == 1) {
                $.post({
                    methord: "post",
                    url: "isreg.php",
                    data: {user_id: $("#user_id").val()}

                }).done(function (msg) {
                    if (msg != 0) {
                        $("#user_id").addClass("is-invalid")
                        $("#user_reged").show()
                    }
                    else {
                        $("#user_id").removeClass("is-invalid")
                        $("#user_reged").hide()
                    }
                });
            }
        }


    }

    function hasuserid() {
        if (testuser_id()) {

            if ($("#isregistered").val() == 1) {
                $.post({
                    methord: "post",
                    url: "hasuserid.php",
                    data: {user_id: $("#user_id").val()}

                }).done(function (msg) {
                    console.log("meizhuce")
                    console.log(msg)

                    if (msg == 0) {
                        $("#user_id").addClass("is-invalid")
                        $("#user_idnotexist").show()
                    }
                    else {
                        $("#user_id").removeClass("is-invalid")
                        $("#user_idnotexist").hide()
                    }
                });
            }

        }


    }


    function testrptpw() {
        if ($("#password").val() != $("#rptpassword").val()) {
            return false
        }
        else {
            return true
        }
    }


    function testxuehao() {
        rexuehao = /^\d{13}$/

        if (rexuehao.test($("#xuehao").val())) {
            return true
        }

        else {
            return false
        }

    }

    function testshoujihao() {
        reshoujihao = /^1[35784][0-9]{9}$/
        if (reshoujihao.test($("#shoujihao").val())) {
            return true
        }
        else {
            return false
        }
    }


    function testpw() {
        if ($("#password").val().length < 6) {
            return false
        }
        else {
            return true
        }
    }


    function submitbtnstatus() {

        if (testuser_id() && testshoujihao() && testxuehao()) {
            $("#submitbtn").removeAttr("disabled")

        }
        else {
            $("#submitbtn").attr("disabled", "disabled")

        }
    }


    $("#user_id").on("blur", function () {


        if (!(testuser_id())) {
            $("#user_idinvalid").show()
            $("#user_id").addClass("is-invalid")
            submitbtnstatus()
        }
        else {
            $("#user_idinvalid").hide()
            $("#user_id").removeClass("is-invalid")
            submitbtnstatus()
        }
        // isuseridreged()
        hasuserid()
    })


    $("#unregbtn").on("click", function () {


        $("#submitbtn").show()
        $("#user_idinput").show()
        $("#isregistered").val("0")
        $("#unregform").show()
        $("#regedform").show()

        $("#btn1").remove()

    })

    $("#regedbtn").on("click", function () {
        $("#submitbtn").show()
        $("#user_idinput").show()
        $("#isregistered").val("1")
        $("#regedform").show()
        $("#btn1").remove()

    })

    $("#password").on("keyup", function () {
        console.log($("#password").val().length)

        if (!testpw()) {
            $("#password").addClass("is-invalid")
            $("#passwordinvalid").show()

        }
        else {
            $("#password").removeClass("is-invalid")
            $("#passwordinvalid").hide()

        }

    })

    $("#rptpassword").on("keyup", function () {
        if (!testrptpw()) {
            $("#rptpassword").addClass("is-invalid")
            $("#rptpasswordinvalid").show()

        }
        else {
            $("#rptpassword").removeClass("is-invalid")
            $("#rptpasswordinvalid").hide()

        }

    })
    $("#shoujihao").on("keyup", function () {
        if (!testshoujihao()) {
            $("#shoujihao").addClass("is-invalid")
            $("#shoujihaoinvalid").show()
            submitbtnstatus()
        }
        else {
            $("#shoujihao").removeClass("is-invalid")
            $("#shoujihaoinvalid").hide()
            submitbtnstatus()
        }

    })
    $("#xuehao").on("blur", function () {
        if (!testxuehao()) {
            $("#xuehao").addClass("is-invalid")
            $("#xuehaoinvalid").show()
            submitbtnstatus()
        }
        else {
            $("#xuehao").removeClass("is-invalid")
            $("#xuehaoinvalid").hide()
            submitbtnstatus()
        }

    })


</script>


</body>
</html>


