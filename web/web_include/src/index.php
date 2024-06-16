<!--
# -*- coding: utf-8 -*-
# @Author:tianzhong 
# @Date:   2024-01-14 00:12:34
# @Last Modified by:   tianzhong
# @Last Modified time: 2024-05-23 00:26:48
# @email: tz_sir@qq.com
# @wchat: 15262079805
-->
<?php

// flag in ./flag.php
//You Know php://filter ?
if(isset($_GET['filter'])){
    $file = $_GET['filter'];
    include($file);
} 
else {
    highlight_file(__FILE__);
}
?>
