<?php
/* Name: PDQL
 * Description: Php based Database and Query Language
 * Author: Pavan Kumar Sunkara <pavan.sss1991@gmail.com>
 * Copyright: Copyright (C) 2009 Sun Web dev, Inc.
 * Licence: You may redistribute this under Creative Commons License
 */

include_once 'config.php';

$r = $db->query("SELECT * FROM users ORDER BY cash DESC");

var_dump($r);

?>
