#!/bin/sh
sed -i "s/TZCTF{test_flag}/$FLAG/" /var/www/html/flag.php #使用平台的动态flag替换index.php中的flag
apache2-foreground
export FLAG=nonono
#export GZCTF_FLAG=""	#这一句暂时不知道什么作用，但是要写着

