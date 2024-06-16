#!/bin/sh

mysql -e "insert into flag values('$FLAG');" -uroot -p2024jsaqtest users

export DASFLAG=nonono
DASFLAG=nonono