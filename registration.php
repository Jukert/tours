<?php

require_once "lib/ReadBeanPHP/rb.php";
require_once "classes/core.class.php";

$p = str_replace("\\","/", dirname(__FILE__));
define("ROOT",$p);

$ob = new Core(ROOT);
$ob->connectDB();
$ob->entryRegistr();
