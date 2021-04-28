FROM debian:buster

MAINTAINER MDULCIE <mdulcie@student.21-school.ru>

# installing 
RUN apt-get update && apt-get upgrade -y && \
    apt-get install -y wget php-fpm php-mbstring mariadb-server nginx openssl bash && \
	rm -rf /etc/nginx/sites-enabled/default && \
	mkdir -p /var/www/mdulcie && chown -R root /var/www/mdulcie

COPY ./srcs/data /var/www/mdulcie/data
COPY ./srcs/autoindex.sh /.
COPY ./srcs/config.sample.inc.php /.
COPY ./srcs/config_nginx /etc/nginx/sites-available
COPY ./srcs/for_mysql.txt /.
COPY ./srcs/wp-config.php /.

# host (my site) on (nginx)
RUN ln -s /etc/nginx/sites-available/mdulcie.conf \
          /etc/nginx/sites-enabled/mdulcie.conf

# ssl & chown www-data (nginx)
RUN mkdir /etc/nginx/ssl && \
    openssl req -newkey rsa:4096 -nodes -x509 -days 3650 \
	-keyout /etc/nginx/ssl/mdulcie.key \
	-out /etc/nginx/ssl/mdulcie.crt \
	-subj '/C=RU/ST=Kazan/L=Kazan/O=21school/OU=42cursus/CN=mdulcie' && \
	chown -R root /var/www/mdulcie && chmod -R 755 /var/www/mdulcie

# install phpmyadmin
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-english.tar.gz && \
    tar -xzf phpMyAdmin-5.0.4-english.tar.gz -C /var/www/mdulcie && rm -rf phpMyAdmin-5.0.4-english.tar.gz && \
    chown -R root /var/www/mdulcie/phpMyAdmin-5.0.4-english && \
	mv -f /config.sample.inc.php /var/www/mdulcie/phpMyAdmin-5.0.4-english
COPY ./srcs/config.inc.php /var/www/mdulcie/phpMyAdmin-5.0.4-english

EXPOSE 80 443

# install wordpress
RUN apt-get install -y wordpress && mv /usr/share/wordpress /var/www/mdulcie/wordpress && \
    mv wp-config.php /var/www/mdulcie/wordpress

# Creating a database, MySQL
RUN service mysql start && mysql -u root --skip-password < /for_mysql.txt

# start services 
ENTRYPOINT service php7.3-fpm start && service nginx start && service mysql start && bash

# docker build -t test /Users/mdulcie/Desktop/ft_server
# docker run -t -it -p 80:80 -p 443:443 --rm test
# docker inspect id_container | grep IPAddress
#  docker inspect -f '{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' id_container