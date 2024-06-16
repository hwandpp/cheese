FROM php:7.4-apache
COPY src /var/www/html
RUN chmod 755 /var/www/html && \ 
	 mv /var/www/html/flag.sh / && \
	 chmod +x /flag.sh
CMD /flag.sh
EXPOSE 80


