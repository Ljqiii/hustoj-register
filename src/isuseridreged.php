<?php
/**
 * Created by PhpStorm.
 * User: ljq
 * Date: 10/27/18
 * Time: 9:30 AM
 */

require_once("../include/db_info.inc.php");
require_once("../include/my_func.inc.php");


$sqlmatch = 'select user_id from match1103 where user_id=?;';

$rows = pdo_query($sqlmatch);
print_r(count($rows));


?>