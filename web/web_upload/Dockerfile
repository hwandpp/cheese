FROM php:5.4-apache

COPY src /var/www/html
RUN chmod 755 /var/www/html && \ 
	chmod 777 /var/www/html/uploads &&\
	 mv /var/www/html/flag.sh / && \
	 chmod +x /flag.sh &&\
	mv /var/www/html/apache2.conf /etc/apache2/ &&\
	/etc/init.d/apache2 restart
CMD /flag.sh
EXPOSE 80
