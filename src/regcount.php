<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/26/18
 * Time: 10:05 AM
 */

require_once("../include/db_info.inc.php");
require_once("../include/my_func.inc.php");


if(is_valid_user_name($user_id)){

    $sqlmatch = 'select user_id from match1103 ;';

    $rows = pdo_query($sqlmatch);
    echo count($rows);
}











?>
