<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/26/18
 * Time: 10:05 AM
 */

require_once("../include/db_info.inc.php");
require_once("../include/my_func.inc.php");

$user_id=trim($_POST['user_id']);

$user_id=(htmlentities ($user_id,ENT_QUOTES,"UTF-8"));


if(is_valid_user_name($user_id)){

    $sqlmatch = 'select user_id from match1103 where user_id=?;';

    $rows = pdo_query($sqlmatch,$user_id);
    echo count($rows);
}











?>
