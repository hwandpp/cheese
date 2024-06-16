#!/bin/sh
sed -i "s/TZCTF{test_flag}/$FLAG/" /var/www/html/login.php #使用平台的动态flag替换index.php中的flag
#export GZCTF_FLAG=""	#这一句暂时不知道什么作用，但是要写着

apache2-foreground

